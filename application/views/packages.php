<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Packages</h4>
            <p class="card-description">
              <a class="btn btn-primary" href="<?php echo base_url('Admin/add_packages') ?>">Add Package</a>
            </p>
            <table id="example" class="table table-striped">
              <thead>
                <tr>
                  <th>
                    S. No.
                  </th>
                  <th>
                    Title
                  </th>
                  <th>
                    Description
                  </th>
                  <th>
                    Price
                  </th>
                   <th>
                    Subscription Type
                  </th>
                  <th>Status</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=0; foreach ($packages as $packages) {
                $i++; ?>
                <tr>
                  <td class="py-1">
                    <?php echo $i; ?>
                  </td>
                  <td>
                    <?php echo $packages->title; ?>
                  </td>
                  <td><?php echo $packages->description; ?></td>
                  <td><?php echo $packages->price; ?> </td>
                  <td>
                   <?php if($packages->subscription_type==1)
                   { ?>
                   <span>Monthly</span>
                   <?php }
                    elseif($packages->subscription_type==0) { ?>
                   <span >Free</span>
                   <?php
                     } 
                     elseif($packages->subscription_type==2) {
                       ?>
                   <span >Quarterly</span>
                   <?php
                     } 
                     elseif($packages->subscription_type==3) {
                       ?>
                   <span >Halfyearly</span>
                   <?php
                     } 
                     elseif($packages->subscription_type==4) {
                       ?>
                   <span >Yearly</span>
                   <?php
                     } ?>
                  </td>
                  <td>
                   <?php if($packages->status==1)
                   {
                     ?>
                   <label class="badge badge-teal">Active</label>
                   <?php
                    }
                    elseif($packages->status==0) {
                       ?>
                   <label class="badge badge-danger">Deactive</label>
                   <?php
                     } ?>
                  </td>
                   <td>
                      <div class="btn-group dropdown">
                      <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_package');?>?id=<?php echo $packages->id; ?>&status=1"><i class="fa fa-reply fa-fw"></i>Active</a>
                        <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_package');?>?id=<?php echo $packages->id; ?>&status=0"><i class="fa fa-history fa-fw"></i>Deactivate</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('Admin/edit_package/').$packages->id ?>"><i class="fa fa-history fa-fw"></i>Edit</a>
                      </div>

                    </div>
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
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->