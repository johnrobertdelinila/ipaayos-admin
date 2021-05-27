<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Add Manager</h4>
                  
          </div>
          <div class="card-body">
            
            <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/add_manager', $attributes); ?>
            <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                          </div>
                          
                          
                          <input type="text" name="name" class="form-control" required="" placeholder="Enter Name" />
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="material-icons">email</i>
                              </span>
                            </div>
                            
                            <input type="email" name="email" class="form-control" required="" placeholder="Enter Email" />
                        </div>
                      </div>

                      <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="material-icons">lock</i>
                              </span>
                            </div>
                            
                            <input type="password" name="password" class="form-control" required="" placeholder="Enter Password" />
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="input-group">
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                        </div>
                      </div>

                    </div>
                      
                  </div>
            
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header card-header-warning">
                  <h4 class="card-title">All Manager</h4>
                  
                </div>
        <div class="card-body">
          
          
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>
                  S. No
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Status
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              foreach ($admin as $admin) {
              $i++;
              ?>
              <tr>
                <td class="py-1">
                  <?php echo $i; ?>
                </td>
                <td>
                  <?php echo $admin->name; ?>
                </td>
                <td>
                  <?php echo $admin->email; ?>
                </td>
                <td>
                  <?php if($admin->status==1)
                  {
                  ?>
                  <label class="badge badge-teal">Active</label>
                  <?php
                  }
                  elseif($admin->status==0) {
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
                      <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_admin');?>?id=<?php echo $admin->id; ?>&status=1&request=2"><i class="fa fa-reply fa-fw"></i>Active</a>
                      <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_admin');?>?id=<?php echo $admin->id; ?>&status=0&request=2"><i class="fa fa-history fa-fw"></i>Deactivate</a>
                      <a class="dropdown-item" href="<?php echo base_url('Admin/editmanager/').$admin->id ?>"><i class="fa fa-history fa-fw"></i>Edit</a>
                    </div>
                  </div>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
  </div>
</div>