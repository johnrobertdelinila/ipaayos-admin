<div class="content">
  <div class="content-wrapper">
    <div class="container">
      
      <?php if ($this->session->flashdata('msg')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
        Commission changed successfully.
      </div>
      <br>
      <?php } ?>
      <?php if ($this->session->flashdata('msg1')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
        Currency Type changed successfully.
      </div>
      <br>
      <?php } ?>
      
      <div class="card card-nav-tabs">
        <div class="card-header card-header-primary">
          <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#profile" data-toggle="tab">
                    <i class="material-icons">face</i>
                    Commision
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#messages" data-toggle="tab">
                    <i class="material-icons">chat</i>
                    Currency
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="card-body ">
          <div class="tab-content text-center">
            <div class="tab-pane active" id="profile">
              <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form'); echo form_open_multipart('Admin/commissionSetting', $attributes); ?>
                <div class="col-md-12">
                  <div class="col-md-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            Commision Base on
                        </span>
                      </div>
                      
                        <!--   -->
                      <input type="radio" id="flatCommission" value="1" name="commission_type" <?php if($commission_setting->commission_type==1){ echo "checked"; } ?> />Flat
                      <input type="hidden" name="id" value="<?php echo $commission_setting->id; ?>" class="form-control" required=""/>
                      
                    </div>
                  </div>
                  <br>
                  <div class="col-md-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            Commision
                        </span>
                      </div>
                      
                        <!--   -->
                      <input type="text" id="numberbox" name="flat_amount" value="<?php echo $commission_setting->flat_amount; ?>" class="form-control" required="" placeholder="Commission" />
                      
                    </div>
                  </div>
                  <br>

                  <div class="col-md-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            Percentage
                        </span>
                      </div>

                        <!--   -->
                       <select class="form-control" name="flat_type">
                          <option value="1">Percentage (%)</option>
                         <!--  <option value="2"<?php if ($commission_setting->flat_type == 2) echo ' selected="selected"'; ?>>Flat Cost (<?php echo $currency_type; ?>)</option> -->
                        </select>
                      
                    </div>

                  </div>
  
                  <div class="float-left">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>

                </div> 
                
              </form>
            </div>
            <div class="tab-pane" id="messages">
              <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/currency_setting', $attributes); ?>
                <div class="col-md-12">
                  

                  <div class="col-md-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            Currency Type
                        </span>
                      </div>

                        <!--   -->
                       <select class="form-control" name="currency">
                          <?php foreach ($currency_setting as $currency_setting) { ?> 
                          <option value="<?php echo $currency_setting->id; ?>"<?php if ($currency_setting->status == 1) echo ' selected="selected"'; ?>><?php echo $currency_setting->currency_name; ?> (<?php echo $currency_setting->currency_symbol; ?>)</option>
                          <?php } ?>
                        </select>
                      
                    </div>

                  </div>
  
                  <div class="float-left">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>

                </div> 
                
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  setTimeout(function() {
  $('#mydiv').fadeOut('fast');
  }, 5000); // <-- time in milliseconds
  </script>