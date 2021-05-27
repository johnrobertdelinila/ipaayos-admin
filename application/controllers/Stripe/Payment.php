<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'libraries/Stripe/lib/Stripe.php');

class Payment extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        
        $this ->load->model('Api_model');;
        $this->load-> helper('form');
        $this->load->helper('url');
    }
	
	public function make_payment($user_id, $amount)
    {
        $data['user_id']=$user_id;
        $data['amount']=$amount;
        $getKey= $this->Api_model->getSingleRow('stripe_keys', array('id'=>1));
        $data['getKey']=$getKey->publishable_key;
        $this->load->view('stripe/in.php',$data);
    }

	public function index(){

        $data['getKey']= $this->Api_model->getSingleRow('stripe_keys', array('id'=>1));
		$this->load->view('stripe/index.php');
	}

	public function call_url(){
        $this->load->view('stripe/call_url');
    }

	public function process(){
	   try {
            $getKey= $this->Api_model->getSingleRow('stripe_keys', array('id'=>1));
            $API_KEY=$getKey->api_key;
            $user_id=$this->input->post('user_id');
            $amount=$this->input->post('amount');
            $id=$user_id;
            $amount_in_usd=$amount*100;
            Stripe::setApiKey($API_KEY);
            $charge = Stripe_Charge::create(array(
                        "amount" => $amount_in_usd,
                        "currency" => "USD",
                        "card" => $this->input->post('access_token'),
                        "description" => "Stripe Payment"
            ));

            $getUser= $this->Api_model->getSingleRow('user', array('user_id'=>$user_id));
            // this line will be reached if no error was thrown above
            $data_send = array(
                'invoice_id' => $charge->id,
                'user_id' => $user_id,
                'amount' => $amount,
                'currency_type' => "$",
                'type' => 1,
                'status' => 0,
                'description' =>"Add money to wallet",
                'created_at' => time(),
                'order_id' => time()
            );
            $getUserId=$this->Api_model->insertGetId('wallet_history',$data_send);
            $getWallent= $this->Api_model->getSingleRow('artist_wallet',array('artist_id'=>$user_id));
	        if($getWallent)
	        {
	          $amount= $getWallent->amount + $amount;
	          $updateUser=$this->Api_model->updateSingleRow("artist_wallet",array('artist_id'=>$user_id),array('amount'=>$amount));
	        }
	        else
	        {
	          $this->Api_model->insertGetId('artist_wallet',array('artist_id'=> $user_id, 'amount'=>$amount));
	        }
	        
            if ($getUserId) 
            {
                echo json_encode(array('status' => 200, 'success' => 'Payment successfully completed.'));
                exit();
            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }
        } catch (Stripe_CardError $e) {
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Stripe_InvalidRequestError $e) {
            // Invalid parameters were supplied to Stripe's API
            echo json_encode(array('status' => 500, 'error' => $e->getMessage()));
            exit();
        } catch (Stripe_AuthenticationError $e) {
            // Authentication with Stripe's API failed
            echo json_encode(array('status' => 500, 'error' => AUTHENTICATION_STRIPE_FAILED));
            exit();
        } catch (Stripe_ApiConnectionError $e) {
            // Network communication with Stripe failed
            echo json_encode(array('status' => 500, 'error' => NETWORK_STRIPE_FAILED));
            exit();
        } catch (Stripe_Error $e) {
            // Display a very generic error to the user, and maybe send
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        }
	}
	public function success(){
		$this->load->view('stripe/success');
	}
    public function fail(){
        $this->load->view('stripe/fail');
    }
}
