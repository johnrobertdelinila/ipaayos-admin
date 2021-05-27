<?php  
// $license_filename="includes/.lic";
// if(!file_exists($license_filename))
// {
//     header("Location:install/index.php");
//     exit;
// }
?>


<?php
 
  if (isset($_SESSION['name'])){
    header('location:Admin');
  }
?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('/asset2/login/assets/images/favicon.png');?>">
    <title>Please Login</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('asset2/login/dist/css/style.min.css');?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(<?php echo base_url('/asset2/login/assets/images/big/auth-bg.jpg');?>) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?php echo base_url('assets/images/login_img.gif');?>)">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets/images/set_img.png');?>" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Login</h2>
                        <p class="text-center">Enter your email address and password to access admin panel.</p>
                        <form class="mt-4" method="post" action="<?php echo base_url('Admin/login') ?>">
                            <div class="row">
                              <?php if ($this->session->flashdata('msg')) { ?>
                                <div class="col-lg-12">
                                  <?= $this->session->flashdata('category_success') ?>
                                  <p style="color:red">Please enter valid Email or password.</p>
                                </div>
                              <?php } ?>
                              <?php if ($this->session->flashdata('block')) { ?>
                                <div class="col-lg-12">
                                  <?= $this->session->flashdata('category_success') ?>
                                  <?= $this->session->flashdata('category_success') ?>
                                  <p style="color:red">You action has been block. Contact to admin.</p>
                                </div>
                              <?php } ?>   
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Email</label>
                                        <input class="form-control" id="uname" type="text" name="email"
                                            placeholder="enter your email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" name="password" id="pwd" type="password"
                                            placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Login</button>
                                </div>
                                <!--<div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="#" class="text-danger">Sign Up</a>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('/asset2/login/assets/libs/jquery/dist/jquery.min.js');?> "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('/asset2/login/assets/libs/popper.js/dist/umd/popper.min.js');?> "></script>
    <script src="<?php echo base_url('/asset2/login/assets/libs/bootstrap/dist/js/bootstrap.min.js');?> "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>