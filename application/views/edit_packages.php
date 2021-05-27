<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Package</h4>
             <?php $attributes = array('id' => 'form_validation', 'class'=> 'form-sample'); echo form_open_multipart('Admin/editPackageAction', $attributes); ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" name="title" value="<?php echo $get_package->title; ?>" class="form-control" />
                      <input type="hidden" name="id" value="<?php echo $get_package->id; ?>" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" name="description" value="<?php echo $get_package->description; ?>" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" name="price" value="<?php echo $get_package->price; ?>" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Type</label>
                    <div class="col-sm-9">
                      <?php $subscription_type =$get_package->subscription_type; ?>
                      <select class="form-control" name="type">
                      <option value="0"<?php if ($subscription_type == '0') echo ' selected="selected"'; ?>>Free</option>
                      <option value="1"<?php if ($subscription_type == '1') echo ' selected="selected"'; ?>>Monthly</option>
                      <option value="2"<?php if ($subscription_type == '2') echo ' selected="selected"'; ?>>Quarterly</option>
                      <option value="3"<?php if ($subscription_type == '3') echo ' selected="selected"'; ?>>Halfyearly</option>
                      <option value="4"<?php if ($subscription_type == '4') echo ' selected="selected"'; ?>>Yearly</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">                         
                      <input class="btn btn-primary" type="submit" name="submit" value="submit" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>