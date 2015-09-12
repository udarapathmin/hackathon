

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Shows Management <small>Create New Show</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>">Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-dashboard"></i>  
                            <a href="<?php echo base_url('index.php/show_management/'); ?>">Shows Management</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Create New Show
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal">

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="show_name">Show Name</label>  
                            <div class="col-md-4">
                                <input id="show_name" name="show_name" type="text" placeholder="Enter Show Name" class="form-control input-md">
                                <span class="help-block"></span>  
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="show_desc">Show Description</label>
                            <div class="col-md-4">                     
                                <textarea class="form-control" id="show_desc" name="show_desc" placeholder="Enter show description here"></textarea>
                                <span class="help-block"></span> 
                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="ticket_price">Ticket Price</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Rs.</span>
                                    <input id="ticket_price" name="ticket_price" class="form-control" placeholder="0.00" type="text">
                                </div>
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="start_time">Start Time</label>  
                            <div class="col-md-4">
                                <input id="start_time" name="start_time" type="text" placeholder="Enter Start Time" class="form-control input-md">
                                <span class="help-block"></span>  
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="end_time">End Time</label>  
                            <div class="col-md-4">
                                <input id="end_time" name="end_time" type="text" placeholder="Enter End Time" class="form-control input-md">
                                <span class="help-block"></span>  
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">&nbsp;</label>
                            <div class="col-md-4">
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success">Create</button>
                            </div>
                        </div>

                    </form>
                    <script type="text/javascript">
                        $(function () {
                            $('#start_time').datetimepicker();
                        });
                        
                        $(function () {
                            $('#end_time').datetimepicker();
                        });
                    </script>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


