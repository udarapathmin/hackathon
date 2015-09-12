

    <div id="wrapper">

        <?php $this->load->view('template/navigation'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            View User
                            <!-- <small>Subheading</small> -->
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-8">
                        <?php if (isset($error_message)) { ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <?php echo $error_message; ?>
                            </div>
                        <?php } else { ?>

                        <div class="panel panel-info">
                        <?php
                            foreach($user as $row){ ?>
                        <div class="panel-heading">
                          <h3 class="panel-title"><?php echo $row->name . " " . $row->last_name ; ?></h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://icons.iconarchive.com/icons/dryicons/simplistica/128/user-icon.png" class="img-circle"> </div>
                            
                            <div class=" col-md-9 col-lg-9 "> 
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td><b>Username:</b></td>
                                    <td><?php echo $row->username; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>First Name:</b></td>
                                    <td><?php echo $row->name; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>Last Name:</b></td>
                                    <td><?php echo $row->last_name; ?></td>
                                  <tr>
                                    <td><b>Email:</b></td>
                                    <td><?php echo $row->email; ?></td>
                                  </tr>
                                   <tr>
                                    <td><b>Position:</b></td>
                                    <td><?php echo $row->position; ?></td>
                                  </tr>
                                   <tr>
                                    <td><b>Description:</b></td>
                                    <td><?php echo $row->description; ?></td>
                                  </tr>
                                   <tr>
                                    <td><b>Date of Appoinmnet:</b></td>
                                    <td><?php echo $row->dateofappoinment; ?></td>
                                  </tr>
                                  

                                 
                                </tbody>
                              </table>
                              
                            </div>
                          </div>
                        </div> 
                        
                        </div>
                    </div>
                
                </div>

                <?php } ?>
                <?php } ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


