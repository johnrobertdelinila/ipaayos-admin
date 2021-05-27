<div class="content">

    <div class="content-fluid">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Edit Slider Image</h4>
                        <p class="card-category">Edit Slider</p>
                    </div>
                    <div class="card-body">

                        <?php
                        $attributes = array('id' => 'form_validation', 'name' => 'add_coupon', 'class' => 'form-sample');
                        echo form_open_multipart('Admin/editSliderAction', $attributes);
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
                                        <input type="file" name="image" accept="image/*" class="form-control"/>
                                    </div>
                                    <img src="<?php echo base_url(); ?>/assets/sliders/<?php echo $slider->image ?>" style="max-width:100px"/>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                        </div>
                                        <input type="text" name="title" class="form-control" value="<?php echo $slider->title; ?>" required="" placeholder="Title"/>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="id" class="form-control" value="<?php echo $slider->id; ?>" required="" placeholder="Title"/>
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
        </div>
    </div>
</div>