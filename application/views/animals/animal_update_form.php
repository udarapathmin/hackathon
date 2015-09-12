

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
                            echo form_open('animal/update_animal_details', $attributes);
                            ?>
                            <br>
                            <input type="hidden" name="animid" id="animid" value="<?php echo $row->id; ?>">
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
                                        <input id="animname" type="text" name="animname"  value="<?php if($attempt == '1'){ echo $row->name;} else if($attempt == '2'){ echo set_value('animname') ;}; ?>"  class="form-control"  placeholder="Animal Name">
                                        <?php echo form_error('animname'); ?>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">*Birth Day</label>
                                    <div class="col-sm-4">

                                        <input id="birth" type="date" name="birth"  value="<?php if($attempt == '1'){ echo $row->birthday;} else if($attempt == '2'){ echo set_value('birth') ;}; ?>" class="form-control" placeholder="Birth Day">
                                        <?php echo form_error('birth'); ?>
                                    </div>
                                </div>

                                <div class="form-group" style="margin-right: 2em">
                                    <label for="inputEmail3" class="col-sm-2 control-label">*Gender</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input id="male" type="radio" name="gender"  value="m" type="radio"  id="male" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->gender) == 'm') {
                                                    echo "checked";
                                                }
                                            }
                                            else if($attempt == '2'){
                                                if (set_value('gender') == 'm') {
                                                    echo "checked"; 
                                                }
                                            }
                                            ?>> Male
                                        </label>
                                        <label class="radio-inline">
                                            <input id="female" type="radio" name="gender"  value="f" type="radio" id="female" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->gender) == 'f') {
                                                    echo "checked";
                                                }
                                            }
                                            else if($attempt == '2'){
                                                if (set_value('gender') == 'f') {
                                                    echo "checked"; 
                                                }
                                            }
                                            ?>> Female
                                        </label>
                                        <br>
                                        <?php echo form_error('gender'); ?>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">*Animal Category</label>
                                    <div class="col-sm-4">

                                        <select id="animcat" name="animcat" class="form-control">
                                            <option value="0" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->category_id) == null || ($row->category_id) == 0) {
                                                    echo "selected";
                                                }
                                            }
                                            else if(set_value('animcat') == '0') { 
                                                echo "selected";
                                            }
                                            ?>>Select Category</option>
                                            <option value="1" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->category_id) == 1) {
                                                    echo "selected";
                                                }
                                            }
                                            else if(set_value('animcat') == '1') { 
                                                echo "selected";
                                            }
                                            ?> >Birds</option>
                                            <option value="2" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->category_id) == 2) {
                                                    echo "selected";
                                                }
                                            }
                                            else if(set_value('animcat') == '2') { 
                                                echo "selected";
                                            }
                                            ?> >Snakes</option>
                                            <option value="3" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->category_id) == 3) {
                                                    echo "selected";
                                                }
                                            }
                                            else if(set_value('animcat') == '3') { 
                                                echo "selected";
                                            }
                                            ?> >Fish</option>
                                            <option value="4" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->category_id) == 4) {
                                                    echo "selected";
                                                }
                                            }
                                            else if(set_value('animcat') == '4') { 
                                                echo "selected";
                                            }
                                            ?> >Ducks</option>
                                            <option value="5" 
                                            <?php
                                            if($attempt == '1'){
                                                if (($row->category_id) == 5) {
                                                    echo "selected";
                                                }
                                            }
                                            else if(set_value('animcat') == '5') { 
                                                echo "selected";
                                            }
                                            ?> >Other</option>
                                        </select>
                                        <?php echo form_error('animcat'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-primary" value="Add">
                                        <button type="reset" class="btn btn-danger">Reset</button>
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


