<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add Service Provider</h4>
                  
                </div>
          <div class="card-body">
            
            <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form'); echo form_open_multipart('Admin/addArtistAction', $attributes); ?>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">group</i>
                      </span>
                    </div>
                    <input type="text" name="name" class="form-control" required="" placeholder="Service Provider Name" />  
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">email</i>
                      </span>
                    </div>
                    
                    <input type="email_id" name="email_id" class="form-control" required="" placeholder="Email Address" />
                    
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">lock</i>
                      </span>
                    </div>
                    
                    <input type="password" name="password" class="form-control" required="" placeholder="Password" />
                    
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>
</div>