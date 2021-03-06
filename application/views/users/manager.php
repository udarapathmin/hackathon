

    <div id="wrapper">

        <?php $this->load->view('template/navigation'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manager Management
                            <!-- <small>Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-users"></i>  <a href="<?php echo base_url("index.php/Users/"); ?>">User Management</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Manager Management
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               <!--  <div class="row">
                    <div class="col-lg-12">
                        <h4><a href="<?php echo base_url("index.php/Users/add_manager"); ?>">Add New Manager</a></h4>
                        <h4><a href="<?php echo base_url("index.php/Users/list_manager"); ?>">List Manager</a></h4>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>Add Manager</h4>
                            <div><i style="color:#5cb85c;" class="fa fa-user fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/add_manager"); ?>" class="btn btn-success">Add Manager</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>List Manager</h4>
                            <div><i style="color:#5cb85c;" class="fa fa-users fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/list_manager"); ?>" class="btn btn-success">List Manager</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


