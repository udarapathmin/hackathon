

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
                            <?php if (isset($succ_message)) { ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo $succ_message; ?>
                                </div>
                            <?php } ?>
                            <?php
                            // Change the css classes to suit your needs    

                            $attributes = array('class' => 'form-horizontal', 'id' => '');
                            echo form_open('animal/add_animal_location', $attributes);
                            ?>
                            <br>
                            <div class=" col-md-12 col-lg-12 ">
                                <br>
                                <div class="form-group" style="margin-right:2em">
                                    <label for="inputEmail3" class="col-sm-2 control-label ">Animal Name</label>
                                    <div class="col-sm-4">
                                        <?php
                                        echo "<select id='animname' name='event_type' class='form-control'>";

                                        foreach ($animalss as $row) {
                                            //echo "<option value='" . $row->event_type . "'>" . $row->event_type . "</option>";
                                            echo "<option value='$row->id'>$row->name</option>";
                                        }
                                        echo "</select>";
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-right:2em">
                                    <label for="inputEmail3" class="col-sm-2 control-label ">Location Name</label>
                                    <div class="col-sm-4">
                                        <textarea id="lname" type="text" name="lname" class="form-control"  placeholder="Location Name"><?php echo set_value('lname'); ?></textarea>
                                        <?php echo form_error('lname'); ?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" class="btn btn-primary" value="Register">
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </div>

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

