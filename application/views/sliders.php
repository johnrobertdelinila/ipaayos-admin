<div class="content">

    <div class="content-fluid">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Add Slider Image</h4>
                        <p class="card-category">List of Slider</p>
                    </div>
                    <div class="card-body">

                        <?php
                        $attributes = array('id' => 'form_validation', 'name' => 'add_coupon', 'class' => 'form-sample');
                        echo form_open_multipart('Admin/addSliderAction', $attributes);
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">image</i>
                                            </span>
                                        </div>
                                        <input type="file" name="image" accept="image/*" class="form-control" required=""/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                        </div>
                                        <input type="text" name="title" class="form-control" required="" placeholder="Title"/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-success mr-2">Submit</button>
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
                        <h4 class="card-title">Sliders</h4>
                        <p class="card-category">All Slider Images</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <tr>
                                    <th>
                                        S. No
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($sliders as $slider) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td class="py-1">
                                            <?php echo $i; ?>
                                        </td>
                                        <td>
                                            <?php echo $slider->title; ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url(); ?>assets/sliders/<?php echo $slider->image ?>" class="img-responsive" style="max-width:50px;"/>
                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Manage
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="<?php echo base_url('/Admin/editSlider'); ?>?id=<?php echo $slider->id; ?>"><i class="fa fa-history fa-fw"></i>Edit</a>
                                                    <a class="dropdown-item delete" href="<?php echo base_url('/Admin/deleteSlider'); ?>?id=<?php echo $slider->id; ?>"><i class="fa fa-trash fa-fw"></i>Delete</a>
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