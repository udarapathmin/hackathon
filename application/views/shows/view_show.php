

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">
            
            <div class="row">
                
                <div class="col-md-12">
                    <p class="lead"><a href="<?php echo base_url('index.php/shows'); ?>"><i class="fa fa-backward"></i> Shows</a></p>
                    <div class="panel panel-info">
                        <div class="panel-heading"><?php echo $show->name; ?></div>
                        <div class="panel-body">

                            <p><?php echo $show->description; ?></p>
                            <p><strong>Ticket Price:</strong> <?php echo $show->ticket_price; ?>
                            <p><strong>Start Time:</strong> <?php echo $show->start_time; ?>
                            <p><strong>Start Time:</strong> <?php echo $show->end_time; ?>
                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo base_url("index.php/shows/purchase_tickets/{$show->id}"); ?>" class="btn btn-sm btn-success">
                                Purchase Tickets
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


