<div class="content">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Password Setting</h4>
                  
          </div>
          <div class="card-body">
            
            <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/edit_manager', $attributes); ?>
            <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                          </div>
                          
                          
                          <input type="text" name="name" value="<?php echo $admin->name; ?>" class="form-control" required="" placeholder="Enter Name" />
                            <input type="hidden" name="id" value="<?php echo $admin->id; ?>" class="form-control" required="" placeholder="Enter Name" />
                            
                        </div>
                      </div>
                      <br>
                      <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="material-icons">email</i>
                              </span>
                            </div>
                            
                            <input type="email" name="email" value="<?php echo $admin->email; ?>" class="form-control" required="" placeholder="Enter Email"  />
                        </div>
                      </div>
 
                      
                      <br>
                      <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="material-icons">lock</i>
                              </span>
                            </div>
                            
                            <input type="password" name="password" value="<?php echo $admin->password; ?>" class="form-control" required="" placeholder="Enter Password" />
                        </div>
                      </div>
                      <br>
                      
                      
                      <div class="col-md-8">
                        <div class="input-group">
                                     

                                    <h2 type="submit" class="btn btn-success">Submit</h2>
                            
                        </div>
                      </div>

                    </div>
                      
                  </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>