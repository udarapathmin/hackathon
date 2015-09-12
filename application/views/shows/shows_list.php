

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">
            
            <?php foreach($shows as $show) { ?>
            <!-- Page Heading -->
            <div class="row">
                <div class="col-md-12">
                    <?php echo validation_errors(); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url("index.php/show_management/view/{$show->id}"); ?>">
                                <?php echo $show->name; ?>
                            </a>
                        </div>
                        <div class="panel-body"><?php echo $show->description; ?></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <?php } ?>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


