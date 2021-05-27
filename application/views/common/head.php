<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ipaayos mo Admin Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('/asset2/css/material-dashboard.css?v=2.1.2');?>" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('/asset2/demo/demo.css');?>" rel="stylesheet" />
  <!-- New tag -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>






<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url('/asset2/img/sidebar-1.jpg');?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          Admin Panel
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <!-- <li class="nav-item <?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li> -->
          
          <!-- <li class="nav-item <?php if($this->uri->segment(1)=="billing"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>billing">
              <i class="material-icons">receipt</i>
              <p>Money</p>
            </a>
          </li> -->


          <li class="nav-item <?php if($this->uri->segment(1)=="customer"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>customer">
              <i class="material-icons">person</i>
              <p>User</p>
            </a>
          </li>

          <li class="nav-item <?php if($this->uri->segment(1)=="worker"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>worker">
              <i class="material-icons">brush</i>
              <p>Service Provider</p>
            </a>
          </li>

          <!--<li class="nav-item <?php if($this->uri->segment(1)=="blockeduser"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>blockeduser">
              <i class="material-icons">warning</i>
              <p>Warning Users</p>
            </a>
          </li> -->


          <li class="nav-item <?php if($this->uri->segment(1)=="list"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>list">
              <i class="material-icons">content_paste</i>
              <p>Services</p>
            </a>
          </li>
          
          <li class="nav-item <?php if($this->uri->segment(1)=="support"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>support">
              <i class="material-icons">local_activity</i>
              <p>Support</p>
            </a>
          </li>
          
          <!-- <li class="nav-item <?php if($this->uri->segment(1)=="sublist"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>sublist">
              <i class="material-icons">content_paste</i>
              <p>Sub Categories <span class="badge" style="background-color:#FE9C16">New</span></p>
            </a>
          </li> -->

         <li class="nav-item <?php if($this->uri->segment(1)=="sliders"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>sliders">
              <i class="material-icons">image</i>
              <p>Banner Image</p>
            </a>
          </li>
          
            
          <!-- <li class="nav-item <?php if($this->uri->segment(1)=="promocode"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>promocode">
              <i class="material-icons">book</i>
              <p>Promocode <span class="badge" style="background-color:#FE9C16">New</span></p>
            </a>
          </li> -->

          <li class="nav-item <?php if($this->uri->segment(1)=="ongoing"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>ongoing">
              <i class="material-icons">booking</i>
              <p>Booking</p>
            </a>
          </li>

          <li class="nav-item <?php if($this->uri->segment(1)=="work"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>work">
              <i class="material-icons">work</i>
              <p>Jobs</p>
            </a>
          </li>
        
          <!-- <li class="nav-item <?php if($this->uri->segment(1)=="payment"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>payment">
              <i class="material-icons">request_quote</i>
              <p>Withdraw Request</p>
            </a>
          </li> -->
     

          <li class="nav-item <?php if($this->uri->segment(1)=="sendnotification"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>sendnotification">
              <i class="material-icons">information</i>
              <p>Notification</p>
            </a>
          </li>

          <li class="nav-item <?php if($this->uri->segment(1)=="pushnotification"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>pushnotification">
              <i class="material-icons">cast</i>
              <p>Push Notification</p>
            </a>
          </li>
          

          <!-- <li class="nav-item <?php if($this->uri->segment(1)=="setting"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>setting">
              <i class="material-icons">settings</i>
              <p>Cost Setting </p>
            </a>
          </li> -->

          <!-- <li class="nav-item <?php if($this->uri->segment(1)=="multisetting"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>multisetting">
              <i class="material-icons">settings</i>
              <p>Setting</p>
            </a>
          </li> -->

          <!--<li class="nav-item <?php if($this->uri->segment(1)=="member"){echo "active";}?>">
            <a class="nav-link" href="<?php echo base_url(); ?>member">
              <i class="material-icons">admin_panel_settings</i>
              <p>Manager</p>
            </a>
          </li>-->

          
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="<?php echo base_url(); ?>Admin/user">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img style="width:50px;height:50px;border-radius:50%" src="<?php echo base_url('/assets/images/admin_img.png');?>" alt="image">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="<?php echo base_url('Admin/editmanager/1'); ?>">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      