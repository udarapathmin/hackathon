

    <div id="wrapper">

        <?php $this->load->view('template/navigation'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User Management
                            <!-- <small>Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-users"></i>  <a href="<?php echo base_url("index.php/Users/"); ?>">User Management</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <h4><a href="<?php echo base_url("index.php/Users/add_admin"); ?>">Add New Admin</a></h4>
                        <h4><a href="<?php echo base_url("index.php/Users/list_admin"); ?>">List Admin</a></h4>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>Add Admin</h4>
                            <div><i style="color:#5cb85c;" class="fa fa-user fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/add_admin"); ?>" class="btn btn-success">Add Admin</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>List Admin</h4>
                            <div><i style="color:#5cb85c;" class="fa fa-users fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/list_admin"); ?>" class="btn btn-success">List Admin</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>Add Veteran</h4>
                            <div><i style="color:#f0ad4e;" class="fa fa-user fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/add_veteran"); ?>" class="btn btn-warning">Add Veteran</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>List Veteran</h4>
                            <div><i style="color:#f0ad4e;" class="fa fa-users fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/list_veteran"); ?>" class="btn btn-warning">List Veteran</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>Add Manager</h4>
                            <div><i style="color:#5bc0de;" class="fa fa-user fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/add_manager"); ?>" class="btn btn-info">Add Manager</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>List Manager</h4>
                            <div><i style="color:#5bc0de;" class="fa fa-users fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/list_manager"); ?>" class="btn btn-info">List Manager</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


