

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Blank Page
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Animal Treatments
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            
                <div class="row">
                    <?php if (isset($succ_message)) { ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo $succ_message; ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($err_message)) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo $err_message; ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="row">
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#table_id').DataTable();
                        });
                    </script>

                    <table class="table table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>Category</th>
                                <th></th>
<!--                                <th></th>
                                <th></th>-->

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) { ?>


                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->name; ?></td> 
                                    <td><?php echo $row->birthday; ?></td>
                                    <td><?php echo $row->gender; ?></td>
                                    <td><?php echo $row->category_id; ?></td>

                                    <td><a href="<?php echo base_url("index.php/treatments/load_treatment") . "/" . $row->id;;  ?>" ><span class="fa fa-plus-square-o" aria-hidden="true"></span></a></td>
<!--                                    <td><a href="<?php //echo base_url("index.php/student/load_student") . "/" . $row->user_id;  ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                                    <td><a href="<?php //echo base_url("index.php/student/archive_student") . "/" . $row->user_id;  ?>" onclick="return confirm('Are you sure you want to permenantly delete this student?!!');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></i></a></td>-->

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>

            </div>
        
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


