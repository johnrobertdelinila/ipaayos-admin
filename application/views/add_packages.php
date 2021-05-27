<div class="main-panel">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Package</h4>
           <?php $attributes = array('id' => 'form_validation', 'class'=> 'form-sample'); echo form_open_multipart('Admin/packageAction', $attributes); ?>
           <!--  <p class="card-description">
              Personal info
            </p> -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Description</label>
                  <div class="col-sm-9">
                    <input type="text" name="description" class="form-control" />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Price</label>
                  <div class="col-sm-9">
                    <input type="number" name="price" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Type</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="type">
                      <option value="0">Free</option>
                      <option value="1">Monthly</option>
                      <option value="2">Quarterly</option>
                      <option value="3">Halfyearly</option>
                      <option value="4">Yearly</option>
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