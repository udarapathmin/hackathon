

    <div id="wrapper">

        <?php $this->load->view('template/navigation'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Vetenary Management
                            <!-- <small>Subheading</small> -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-users"></i>  <a href="<?php echo base_url("index.php/Users/"); ?>">User Management</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Vetenary Management
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
             <!--    <div class="row">
                    <div class="col-lg-12">

                        <h4><a href="<?php echo base_url("index.php/Users/add_veteran"); ?>">Add New Vetenary</a></h4>
                        <h4><a href="<?php echo base_url("index.php/Users/list_veteran"); ?>">List Vetenary</a></h4>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>Add Veteran</h4>
                            <div><i style="color:#5cb85c;" class="fa fa-user fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/add_veteran"); ?>" class="btn btn-success">Add Veteran</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="well well-lg">
                            <h4>List Veteran</h4>
                            <div><i style="color:#5cb85c;" class="fa fa-users fa-4x"></i></div>
                            <a href="<?php echo base_url("index.php/Users/list_veteran"); ?>" class="btn btn-success">List Veteran</a>
                        </div>
                    </div>
                </div>

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


