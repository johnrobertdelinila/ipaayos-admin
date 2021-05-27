 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Skills</h4>
                   <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/addSkillsAction', $attributes); ?>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Skill Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="skill" class="form-control" required="" placeholder="Skill Name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Catgory</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="cat_id">
                                <?php foreach ($category as $category) { ?>
                                <option value="<?php echo $category->id ?>"><?php echo $category->cat_name ?></option>
                                <?php } ?>
                              </select>
                        </div>
                      </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
          <h4 class="card-title">All Skills</h4>
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>
                  S. No
                </th>
                <th>
                 Skills Name
                </th>
                <th>
                  Category
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
            <?php
            $i=0;
             foreach ($skills as $skills) {
              $i++;
              ?>
              <tr>
                <td class="py-1">
                  <?php echo $i; ?>
                </td>
                <td>
                  <?php echo $skills->skill; ?>
                </td>
                <td>
                 <?php echo $skills->cat_name; ?>
                </td>
                 <td>
                 <?php if($skills->status==1)
                 {
                   ?>
                 <label class="badge badge-teal">Active</label>
                 <?php
                  }
                  elseif($skills->status==0) {
                     ?>
                 <label class="badge badge-danger">Deactive</label>
                 <?php
                   } ?>
                </td>
                 <td>
                 <div class="btn-group dropdown">
                  <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_skills');?>?id=<?php echo $skills->id; ?>&status=1&request=1"><i class="fa fa-reply fa-fw"></i>Active</a>
                    <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_skills');?>?id=<?php echo $skills->id; ?>&status=0&request=1"><i class="fa fa-history fa-fw"></i>Deative</a>
                     <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('/Admin/editSkills');?>?id=<?php echo $skills->id; ?>"><i class="fa fa-history fa-fw"></i>Edit</a>
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