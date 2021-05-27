<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Jobs</h4>
                  <p class="card-category">List of All Jobs</p>
                </div>
          <div class="card-body">
            <h4 class="card-title">All Jobs</h4>
            <div class="table-responsive">
              <table id="example" class="table table-striped">
                <thead>
                  <tr>
                    <th>S. No.</th>
                    <th>User Name</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>View More</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($job_list as $job_list) { $i++;
                  ?>
                  <tr>
                    <td ><?php echo $i; ?></td>
                    <td ><?php echo $job_list->user_name; ?></td>
                    <td ><?php echo $job_list->title; ?></td>
                    <td ><?php echo $job_list->category_name; ?></td>
                    <td ><?php echo $job_list->created_at; ?></td>
                    <td>
                      <?php if($job_list->status==0) { ?>
                      <label class="badge badge-warning">Pending</label>
                      <?php } elseif($job_list->status==1) { ?>
                      <label class="badge badge-primary">Confirm</label>
                      <?php } elseif($job_list->status==2) { ?>
                      <label class="badge badge-success">Completed</label>
                      <?php } elseif($job_list->status==3) { ?>
                      <label class="badge badge-danger">Rejected</label>
                      <?php } elseif($job_list->status==4) { ?>
                      <label class="badge badge-primary">Deactivate</label>
                      <?php } ?>
                    </td>
                    <td>
                      <div class="btn-group">
                        <a href="<?php echo base_url('Admin/ViewJobDetails') ?>?job_id=<?php echo $job_list->job_id; ?>" class="btn btn-teal">View Artist</a>
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