 <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="<?php echo base_url(); ?>assets/images/faces/face4.jpg" alt="image"> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Service</p>
                <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Admin/home"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/size.png" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>
          <!-- Users tab -->
           <li class="nav-item" >
            <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
             <img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/users.png" alt="menu icon">
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
             <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
               <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/user"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/users.png" alt="menu icon"><span class="menu-title">Users</span></a></li>
               <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/artists"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/artist.png" alt="menu icon"><span class="menu-title">Artist</span></a></li>
               <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/warning"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/warning.png" alt="menu icon"><span class="menu-title">Warning Users</span></a></li>
              </ul>
            </div>
          </li>
          <!-- End Users Tab -->
            <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/category"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/diagram.png" alt="menu icon"><span class="menu-title">Services</span></a></li> 
          <!-- End Admin Utils -->

          <!-- Features Tab-->
          <li class="nav-item"); background-repeat:no-repeat; background-position: right;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
             <img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/computer.png" alt="menu icon">
              <span class="menu-title">Features</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/booking"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/appointment.png" alt="menu icon"><span class="menu-title">Current Booking</span></a></li>
               <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/jobs"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/jobs.png" alt="menu icon"><span class="menu-title">Jobs</span></a></li>
              </ul>
            </div>
          </li>
          <!-- End Features Tab -->

          <!-- Payout Tab -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
             <img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/bill.png" alt="menu icon">
              <span class="menu-title">Payout</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/requestAmount"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/application.png" alt="menu icon"><span class="menu-title">Artist Request</span></a></li>
                <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/allInvoice"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/bill.png" alt="menu icon"><span class="menu-title">Invoice</span></a></li>
                <!-- <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/packages"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/bill.png" alt="menu icon"><span class="menu-title">Packages</span></a></li> -->
              </ul>
            </div>
          </li>
          <!-- End Payout Tab -->

          <!-- Admin Support -->
            <li class="nav-item" >
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
             <img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/online-support.png" alt="menu icon">
              <span class="menu-title">Admin Support</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/ticket"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/ticket.png" alt="menu icon"><span class="menu-title">Tickets</span></a></li>
                <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/notifaction"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/notification.png" alt="menu icon"><span class="menu-title">Notifications</span></a></li>
               <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/broadcast_msg"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/chat.png" alt="menu icon"><span class="menu-title">Broadcast</span></a></li>
              </ul>
            </div>
          </li>
          <!-- End Admin Support -->

          <!-- Settings -->
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
             <img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/settings-gears.png" alt="menu icon">
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/setting"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/settings.png" alt="menu icon"><span class="menu-title">Commissions</span></a></li>
                <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/app_setting"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/settings.png" alt="menu icon"><span class="menu-title">App Settings</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Admin/manager"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/manager.png" alt="menu icon"><span class="menu-title">Manager</span></a></li> 
              </ul>
            </div>
          </li>
          <!-- End Settings -->
          <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>Admin/coupon"><img class="menu-icon" src="<?php echo base_url(); ?>assets/images/menu_icons/coupon.png" alt="menu icon"><span class="menu-title">Coupons</span></a></li> 
        </ul>
      </nav>
      <!-- partial -->