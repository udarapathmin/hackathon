

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Shows Management
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Shows Management
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-lg-12">
                    <a href="<?php echo base_url('index.php/show_management/create'); ?>" class="btn btn-info">
                    Create New Show
                    </a>
                </div>
            </div>
            <div class="row">
                <script>
                    $(document).ready(function () {
                        $('#example').DataTable();
                    });
                </script>
                <div class="col-md-12">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Ticket Price</th>
                                <th>Seats Available</th>
                                <th>Seats Boocked</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Ticket Price</th>
                                <th>Seats Available</th>
                                <th>Seats Boocked</th>
                                <th>&nbsp;</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php foreach ($shows as $show) { ?>
                            <tr>
                                <td><?php echo $show->id; ?></td>
                                <td><?php echo $show->name; ?></td>
                                <td><?php echo $show->start_time; ?></td>
                                <td><?php echo $show->end_time; ?></td>
                                <td><?php echo "Rs. " . $show->ticket_price; ?></td>
                                <td><?php echo $show->seats_available; ?></td>
                                <td><?php echo $show->seats_booked; ?></td>
                                <td>
                                    <a href="<?php echo base_url("index.php/show_management/view/{$show->id}"); ?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    &nbsp;
                                    <a href="<?php echo base_url("index.php/show_management/view/{$show->id}"); ?>">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


