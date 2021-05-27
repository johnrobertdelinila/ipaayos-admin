<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Request Amount</h4>
                  
                </div>
                <div class="card-body table-responsive">
                  <table id="example" class="table table-hover">
                    <thead class="text-warning">
                       <tr>
                        <th>S. No</th>
                        <th>Worker Name</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Request Time</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0;
                       foreach ($wallet_requests as $wallet_requests) {
                        $i++;?>
                        <tr>
                          <td class="py-1"><?php echo $i; ?></td>
                          <td><?php echo $wallet_requests->name; ?></td>
                          <td><?php echo $wallet_requests->email_id; ?></td>
                          <td><?php echo $wallet_requests->walletAmount; ?></td>
                          <td><?php echo date('M d, Y h:i A', $wallet_requests->created_at); ?></td>
                          <td><?php if($wallet_requests->status==1)  { ?>
                           <label class="badge badge-teal">Paid</label>
                           <?php } elseif($wallet_requests->status==0) { ?>
                           <label class="badge badge-danger">Pending</label>
                           <?php } ?>
                          </td>
                          <td>
                   <?php if($wallet_requests->status==0) { ?>
                   <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post' name='frmPayPal1'>
                      <input type='hidden' name='business' value='<?php echo $wallet_requests->paypal_id; ?>'>
                      <input type='hidden' name='cmd' value='_xclick'>
                      <input type='hidden' name='item_name' value='<?php echo $wallet_requests->name; ?>'>
                      <input type='hidden' name='item_number' value='<?php echo $wallet_requests->artist_id; ?>'>
                      <input type='hidden' name='amount' value='<?php echo $wallet_requests->walletAmount; ?>'> 
                      <input type='hidden' name='no_shipping' value='0'>
                      <input type='hidden' name='currency_code' value='<?php echo $wallet_requests->currency_code; ?>'>
                      <input type='hidden' name='handling' value='0'>
                     <?php $failureUrlLocal= base_url().'index.php/Admin/payufailure?getUserId='.$wallet_requests->artist_id.'&getpost='.$wallet_requests->walletAmount.'&request_id='.$wallet_requests->id; 
                      $successUrlLocal= base_url().'index.php/Admin/payusuccess?getUserId='.$wallet_requests->artist_id.'&getpost='.$wallet_requests->walletAmount.'&request_id='.$wallet_requests->id;
                      $failureUrlSever= base_url().'Admin/payufailure?getUserId='.$wallet_requests->artist_id.'&getpost='.$wallet_requests->walletAmount.'&request_id='.$wallet_requests->id; 
                      $successUrlSever= base_url().'Admin/payusuccess?getUserId='.$wallet_requests->artist_id.'&getpost='.$wallet_requests->walletAmount.'&request_id='.$wallet_requests->id; ?>
                      <input type='hidden' name='cancel_return' value='<?php echo $failureUrlLocal; ?>'>
                      <input type='hidden' name='return' value='<?php echo $successUrlLocal; ?>'>
                      <input class="btn btn-primary" type="submit" name="submit" value="Pay Now" <?php  if($wallet_requests->walletAmount < 0) { ?> disabled <?php } ?> >
                    </form> 
                   <?php } else { ?> 
                   <label class="badge badge-teal">Paid</label>
                   <?php } ?>
                  </td>
                </tr>
              <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
      
    </div>
  </div>
</div>