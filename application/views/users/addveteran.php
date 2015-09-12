

    <div id="wrapper">

        <?php $this->load->view('template/navigation'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Veteran Management
                            <!-- <small>Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-users"></i>  <a href="<?php echo base_url("index.php/Users/"); ?>">User Management</a>
                            </li>
                            <li class="">
                                <i class="fa fa-file"></i> Veteran Management
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Add New Veteran
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                       <?php if (validation_errors()) { ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($succ_message)) { ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $succ_message; ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($error_message)) { ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $error_message; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo form_open('Users/add_veteran'); ?>
                          <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                          </div>
                          <hr>
                          <div class="form-group">
                            <label>Date of Appoinmnet</label>
                            <input type="date" class="form-control" name="dateofappoinment" placeholder="Date of Appoinmnet">
                          </div>
                          <div class="form-group">
                            <label>Position</label>
                            <select class="form-control" name="position">
                                  <option value="Senior Doctor">Senior Doctor</option>
                                  <option value="Doctor">Doctor</option>
                                  <option value="Intern">Intern</option>
                                </select>
                          </div>
                          <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description"></textarea>
                          </div>
                          <hr>
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                          </div>
                         
                          <button type="submit" class="btn btn-success">Add User</button>
                        <?php echo form_close(); ?>
                    </div>
                
                </div>

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


