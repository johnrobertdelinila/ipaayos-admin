<div class="content">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-header card-header-warning">
                  <h4 class="card-title">Edit Category</h4>
                  <p class="card-category">Edit Category Here</p>
                </div>
          <div class="card-body">
            
            <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form'); echo form_open_multipart('Admin/editCategoryAction', $attributes); ?>
            <div class="row">
              <div class="col-md-12">
                  <div class="col-md-8">
                      <div class="input-group row">
                          <label class="col-sm-3 col-form-label">Image</label>
                          <div class="col-sm-9">
                              <img src="<?php echo base_url(); ?>/assets/category/<?php echo $category->image ?>" style="max-width:100px"/>
                              <input type="file" name="image" accept="image/*" class="form-control"/>
                          </div>
                      </div>
                  </div>
                <div class="col-md-8">
                  <div class="input-group row">
                    <label class="col-sm-3 col-form-label">Category Name</label>
                    <div class="col-sm-9">
                      <input type="text" name="cat_name" value="<?php echo $category->cat_name ?>" class="form-control" required="" placeholder="Category Name" />
                      <input type="hidden" name="id" value="<?php echo $category->id ?>" class="form-control" required=""  />
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="input-group row">
                    <label class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" name="price" value="<?php echo $category->price ?>" class="form-control" required="" placeholder="Price" />
                    </div>
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