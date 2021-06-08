<div class="content">

        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Service Provider</h4>
                  <p class="card-category">List of All Service Provider</p>
                </div>
                <div class="card-body">
                  <p><a class="btn btn-primary mr-2" href="<?php echo base_url('addArtist') ?>">Add Service Provider</a></p>
                  <div class="table-responsive">
                    <table id="example" class="table table-striped">
                      <thead>
                        <tr>
                          <th>S. No.</th>
                          <th> Name</th>
                          <th> Email</th>
                          <th> Profile Complete</th>
                          <th> Featured</th>
                          <th> Status</th>
                          <th>Approval</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($artist as $artist) {
                        $i++; ?>  
                        <tr>
                          <td>
                            <?php echo $i; ?>  
                          </td>

                          <td>
                            <?php echo $artist->name; ?>
                          </td>

                          <td>
                            <?php echo $artist->email_id; ?>
                          </td>

                           <!--<td>
                            <?php echo $artist->referral_code; ?>
                          </td> -->

                          <!--<td>
                            <?php echo $artist->user_referral_code; ?>
                          </td> -->

                          <!-- <td>
                            <?php echo $artist->amount; ?>
                          </td> -->

                          <td>
                            <?php if($artist->is_artist==1) { ?>
                            <label class="badge badge-teal">Yes</label>
                            <?php } elseif($artist->is_artist==0) { ?>
                            <label class="badge badge-danger">No</label>
                            <?php } ?>
                          </td>

                          <td>
                            <?php if($artist->featured==1) { ?>
                            <label class="badge badge-teal">Yes</label>
                            <?php } elseif($artist->featured==0) { ?>
                            <label class="badge badge-danger">No</label>
                            <?php } ?>
                          </td>

                          <td>
                            <?php  if( $artist->status){ ?><button class="btn active_user btn-success">Active</button><?php }else {  ?><button class="active_user btn-danger btn">Deactive</button> <?php }?><input  type="text"  value="<?php echo $artist->user_id;?>" hidden>
                          </td>

                          <td>
                            <?php if($artist->approval_status==1) { ?>
                            <label class="badge badge-success">Approved</label>
                            <?php } elseif($artist->approval_status==0) { ?>
                            <label class="badge badge-danger">Pending</label>
                            <?php } ?>
                          </td>

                          <td>
                            <div class="btn-group dropdown">
                              <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                              </button>
                                <div class="dropdown-menu">
                                  <?php if($artist->is_artist==1){ ?> 
                                  <a class="dropdown-item" href="<?php echo base_url('/Admin/artistDetails');?>?id=<?php echo $artist->user_id; ?>&role=1&artist_name=<?php echo $artist->name; ?>">View More</a>
                                  <?php if($artist->featured==0){ ?>
                                  <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" onclick="return confirm('Are you sure want to make Featured this Artist?')" href="<?php echo base_url('/Admin/change_status_featured');?>?id=<?php echo $artist->user_id; ?>&status=1&request=2"><i class="fa fa-history fa-fw"></i>Make Featured</a>
                                      <?php } ?>
                                      <?php if($artist->featured==1){ ?>
                                    <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" onclick="return confirm('Are you sure want to remove from Featured this artist?')" href="<?php echo base_url('/Admin/change_status_featured');?>?id=<?php echo $artist->user_id; ?>&status=0&request=1"><i class="fa fa-history fa-fw"></i>Remove Featured</a>
                                      <?php } ?>
                                     <div class="dropdown-divider"></div>
                                  <?php } ?>
                                  <a class="dropdown-item" onclick="return confirm('Are you sure? Want to warn this episode user.')" href="<?php echo base_url('warningUser/')?>?user_id=<?php echo $artist->user_id; ?>">Warning</a>
                                  <?php if($artist->approval_status==0){ ?>
                                  <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" onclick="return confirm('Are you sure want to approve?')" href="<?php echo base_url('/Admin/artist_approve');?>?id=<?php echo $artist->user_id; ?>"><i class="fa fa-history fa-fw"></i>Approve</a>
                                  <?php } ?>
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
        </div>
      </div>