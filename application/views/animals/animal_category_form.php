

<div id="wrapper">

    <?php $this->load->view('template/navigation'); ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Animal 
                        <small>Animal Category</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>ANIMAL CATEGORY</b>
                        </div>
                        <div class="panel-body">
                            <?php if (validation_errors()) { ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo 'There are some errors while inserting. Please check again!'; ?>
                                </div>
                            <?php } ?>
                            <?php
                            // Change the css classes to suit your needs    

                            $attributes = array('class' => 'form-horizontal', 'id' => '');
                            echo form_open('animal/add_animal_category', $attributes);
                            ?>
                            <br>
                            <div class=" col-md-12 col-lg-12 ">
                                <br>
                                <div class="form-group" style="margin-right:2em">
                                    <label for="inputEmail3" class="col-sm-2 control-label ">*Animal Category</label>
                                    <div class="col-sm-4">
                                        <input id="category" type="text" name="category"  value="<?php echo set_value('animname'); ?>"  class="form-control"  placeholder="Animal Category">
                                        <?php echo form_error('category'); ?>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Add">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                                <!--
                                                                <div class="form-group">
                                                                    <div class="col-sm-offset-2 col-sm-10">
                                                                        <input type="submit" class="btn btn-primary" value="Register">
                                                                        <button type="reset" class="btn btn-default">Reset</button>
                                                                    </div>
                                                                </div>-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> View Details</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover" id='myTable'>
                                <br>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Animal Category</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="fillgrid">
                                    <?php foreach ($animalss as $row) { ?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td><a href='<?php echo base_url(); ?>' class='btnedit' title='edit'><i class='glyphicon glyphicon-pencil' title='edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url(); ?>' class='btndelete' title='delete'><i class='glyphicon glyphicon-remove'></i></a></td>    
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script>
    $(document).ready(function () {
        $('#myTable').dataTable();
    });
</script>

