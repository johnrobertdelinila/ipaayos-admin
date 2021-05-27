<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_balance</i>
                  </div>
                  <p class="card-category">Total Amount</p>
                  <h3 class="card-title"> 
                    <?php echo $currency_type; if(isset($t_amount->total_amount)) {  echo round($t_amount->total_amount, 2); } else { echo "0"; } ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-info">brush</i>
                    <a href="javascript:;">Worker Amount</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_balance</i>
                  </div>
                  <p class="card-category">Total Commision</p>
                  <h3 class="card-title"><?php echo $currency_type; if(isset($c_amount->category_amount)) {  echo round($c_amount->category_amount, 2);  } else { echo "0"; } ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">category</i>
                    <a href="javascript:;">Commision Amount</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_balance</i>
                  </div>
                  <p class="card-category">Paid Amount</p>
                  <h3 class="card-title"><?php echo $currency_type; echo round($p_amount->total_amount, 2) ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">brush</i> Paid Amount
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_balance</i>
                  </div>
                  <p class="card-category">Unpaid Amount</p>
                  <h3 class="card-title"><?php echo $currency_type; echo round($u_amount->total_amount, 2) ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">brush</i> Unpaid Amount
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Completed Work</h4>
                  <p class="card-category">Recent completed Work</p>
                </div>
                <div class="card-body table-responsive">
                  <table id="example" class="table table-hover">
                    <thead class="text-warning">
                      <tr>
                        <th>S.No.</th>
                        <th>Invoice Id</th>
                        <th>User Name</th>
                        <th>Worker Name</th>
                        <!--<th>Coupon Code</th>-->
                        <th>Working Min</th>
                        <th>Commission</th>
                        <th>Work Amount</th>
                        <th>Total Amount</th>
                        <th>Payment Type</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; foreach ($getInvoices as $get_invoice) {
                        $i++;
                        ?>
                        <tr>
                          <td ><?php echo $i; ?></td>
                          <td ><?php echo $get_invoice->invoice_id; ?></td>
                          <td ><?php echo $get_invoice->userName; ?></td>
                          <td ><?php echo $get_invoice->ArtistName; ?></td>
                          <!--<td ><?php echo $get_invoice->coupon_code; ?></td>-->
                          <td><?php echo $get_invoice->working_min; ?></td>
                          <td><?php echo $currency_type; echo round($get_invoice->category_amount, 2); ?></td>
                          <td><?php echo $currency_type; echo $get_invoice->artist_amount; ?></td>
                          <td><?php echo $currency_type; echo $get_invoice->total_amount; ?></td>   
                           <td>
                           <?php if($get_invoice->payment_type==0)
                           {
                             ?>
                           <label class="badge badge-primary">Online</label>
                           <?php
                            }
                            elseif($get_invoice->payment_type==1) {
                               ?>
                           <label class="badge badge-primary">Cash</label>
                           <?php } ?>
                          </td>             
                          <td>
                           <?php if($get_invoice->flag==0)
                           {
                             ?>
                           <label class="badge badge-warning">Pending</label>
                           <?php
                            }
                            elseif($get_invoice->flag==1) {
                               ?>
                           <label class="badge badge-primary">Paid</label>
                           <?php } ?>
                          </td>  
                          <td>
                         <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_invoice');?>?id=<?php echo $get_invoice->id; ?>&status=1"><i class="fa fa-reply fa-fw"></i>Paid</a>
                            <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_invoice');?>?id=<?php echo $get_invoice->id; ?>&status=0"><i class="fa fa-history fa-fw"></i>Cancel</a>
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

  