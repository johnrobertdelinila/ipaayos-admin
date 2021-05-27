




<div class="content">
  
        <div class="content-fluid">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add Service</h4>
                  <p class="card-category">List of Service</p>
                </div>
                <div class="card-body">
                  
                  <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/addCategoryAction', $attributes); ?>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">image</i>
                                    </span>
                                </div>
                                <input type="file" name="image" accept="image/*"  class="form-control" required=""/>
                            </div>
                        </div>
                      <div class="col-md-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">category</i>
                            </span>
                          </div>

                          <input type="text" name="cat_name" class="form-control" required="" placeholder="Service Name" />
                          
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="material-icons">card_giftcard</i>
                              </span>
                            </div>
                            
                            <input type="text" name="price" class="form-control num_only" required="" placeholder="Commission in <?php echo $currency_type;?>" maxlength="5" />
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="input-group">
                            <button type="submit" id="someId" class="btn btn-success mr-2">Submit</button>
                        </div>
                      </div>

                    </div>
                      
                  </div>
                    
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Completed Work</h4>
                  <p class="card-category">Recent completed Work</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                       <tr>
                        <th>
                          S. No
                        </th>
                        <th>
                         Service Name
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                          Commission Rate
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
                      <?php $i=0;
                       foreach ($category as $category) {
                        $i++;  ?>
                        <tr>
                          <td class="py-1">
                            <?php echo $i; ?>
                          </td>
                          <td>
                            <?php echo $category->cat_name; ?>
                          </td>
                            <td>
                                <img src="<?php echo base_url(); ?>assets/category/<?php echo $category->image ?>" class="img-responsive" style="max-width:50px;"/>
                            </td>
                          <td>
                           <?php echo $currency_type; echo $category->price; ?>
                          </td>
                           <td>
                           <?php  if( $category->status){ ?><button class="btn active_category btn-success">Active</button><?php }else {  ?><button class="active_category btn-danger btn">Deactive</button> <?php }?><input  type="text"  value="<?php echo $category->id;?>" hidden>
                          </td>
                           <td>
                           <div class="btn-group dropdown">
                            <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Manage
                            </button>
                            <div class="dropdown-menu">
                             <!--  <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_category');?>?id=<?php echo $category->id; ?>&status=1&request=1"><i class="fa fa-reply fa-fw"></i>Active</a>
                              <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_category');?>?id=<?php echo $category->id; ?>&status=0&request=1"><i class="fa fa-history fa-fw"></i>Deative</a>
                               <div class="dropdown-divider"></div> -->
                              <a class="dropdown-item" href="<?php echo base_url('/Admin/editCategory');?>?id=<?php echo $category->id; ?>"><i class="fa fa-history fa-fw"></i>Edit</a>
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
      </div>