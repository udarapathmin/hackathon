

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Animal Registration
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>ANIMAL REGISTRATION</b>
                        </div>
                        <div class="panel-body">
                            <?php if (validation_errors()) { ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo 'There are some errors while inserting. Please check again!'; ?>
                                </div>
                            <?php } ?>
                            <?php
                            // Change the css classes to suit your needs    

                            $attributes = array('class' => 'form-horizontal', 'id' => '');
                            echo form_open('animal/add_animals', $attributes);
                            ?>
                            <br>
                            <div class="col-md-7" align="center"> 
                                <label for="profile-img">Profile Image</label>
                                <br />
                                <img src="<?php echo base_url("assets/img/logo.png"); ?>" id="profile-img" class="img-thumbnail profile-img">
                                <br><br>
                                <span class="btn btn-default btn-file">
                                    Upload Image<input type="file" name="profile_img" id="img-inp" onchange="readURL(this);">
                                </span>
                                <?php echo form_error('profile_img'); ?>
                            </div>
                            <div class=" col-md-12 col-lg-12 ">
                                <br>
                                <div class="form-group" style="margin-right:2em">
                                    <label for="inputEmail3" class="col-sm-2 control-label ">*Name</label>
                                    <div class="col-sm-4">
                                        <input id="animname" type="text" name="animname"  value="<?php echo set_value('animname'); ?>" type="text" class="form-control" id="NIC" placeholder="NIC No">
                                        <?php echo form_error('NIC'); ?>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">*Birth Day</label>
                                    <div class="col-sm-4">

                                        <input id="birth" type="date" name="birth"  value="<?php echo set_value('birth'); ?>" type="text" class="form-control" id="birth" placeholder="Birth Day">
                                        <?php echo form_error('birth'); ?>
                                    </div>
                                </div>

                                <div class="form-group" style="margin-right: 2em">
                                    <label for="inputEmail3" class="col-sm-2 control-label">*Gender</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input id="male" type="radio" name="gender"  value="m" <?php
                                            if (set_value('gender') == 'm') {
                                                echo "checked";
                                            }
                                            ?>> Male
                                        </label>
                                        <label class="radio-inline">
                                            <input id="female" type="radio" name="gender" value="f" <?php
                                            if (set_value('gender') == 'f') {
                                                echo "checked";
                                            }
                                            ?>> Female
                                        </label>
                                        <br>
                                        <?php echo form_error('gender'); ?>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">*Animal Category</label>
                                    <div class="col-sm-4">

                                        <select id="animcat" name="animcat" class="form-control">
                                            <option value="0" <?php
                                            if (set_value('animcat') == '0') {
                                                echo "selected";
                                            }
                                            ?>>Select Category</option>
                                            <option value="1" <?php
                                            if (set_value('animcat') == '1') {
                                                echo "selected";
                                            }
                                            ?>>Cat</option>
                                            <option value="2" <?php
                                            if (set_value('animcat') == '2') {
                                                echo "selected";
                                            }
                                            ?>>Fish</option>
                                            <option value="3" <?php
                                            if (set_value('animcat') == '3') {
                                                echo "selected";
                                            }
                                            ?>>Indian Tamil</option>
                                            <option value="4" <?php
                                            if (set_value('animcat') == '4') {
                                                echo "selected";
                                            }
                                            ?>>Muslim</option>
                                            <option value="5" <?php
                                            if (set_value('animcat') == '5') {
                                                echo "selected";
                                            }
                                            ?>>Other</option>
                                        </select>
                                        <?php echo form_error('animcat'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-primary" value="Register">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imp-inp").change(function () {
        readURL(this);
    });
</script>


