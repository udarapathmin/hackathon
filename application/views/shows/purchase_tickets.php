

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">
            <p class="lead"><a href="<?php echo base_url('index.php/shows'); ?>"><i class="fa fa-backward"></i> Shows</a></p>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">Purchase Tickets</div>
                        <div class="panel-body">
                            <?php echo form_open(); ?>
                                <fieldset>
                                    <!-- Form Name -->
                                    <legend><?php echo $show->name; ?> Rs. <?php echo $show->ticket_price; ?> Per Person</legend>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label for="t_name">Your Name:</label>
                                        <input type="text" class="form-control" name="t_name" id="t_name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="num_tickets">Number of Tickets:</label>
                                        <select id="num_tickets" name="num_tickets" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option> 
                                        </select>
                                    </div>
                                    <button class="btn btn-success" type="submit">Purchase</button>
                                </fieldset>
                            <?php echo form_close(); ?>

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


