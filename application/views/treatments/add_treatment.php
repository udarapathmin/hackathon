

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
                            <i class="fa fa-file"></i> Blank Page
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
                <?php
                // Change the css classes to suit your needs    

                $attributes = array('class' => 'formCon', 'id' => '');
                echo form_open('treatments/add_treatment', $attributes);
                ?>
                <fieldset>

                    <!-- Form Name -->
                    <legend>Medicine for Animal</legend>

                  
                    
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="medicine">Medicine</label>
                        <div class="col-md-5">
                            <select id="medicine" name="medicine" class="form-control">
                                <?php foreach ($medicine as $med) {?>
                                <option value="<?php echo $med->id;?>"><?php echo $med->name.'-'.$med->qty;?></option>
<!--                                <option value="2">Option two</option>-->
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="qty">Medicine Qty</label>  
                        <div class="col-md-5">
                            <input id="qty" name="qty" type="text" placeholder="medicine qty" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="prescription">Prescription Notes</label>
                        <div class="col-md-5">                     
                            <textarea class="form-control" id="prescription" name="prescription" style="    width: 453px;"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="button1id"></label>
                        <div class="col-md-8">
                            <input type="submit" id="submit" name="submit" class="btn btn-success" value="Add Treatment">
                            <button type=reset" id="reset" name="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                    <div class="form-group">
                          <input id="animalid" name="animalid" type="text" hidden="" value="<?php if(isset($animal_id)){echo $animal_id;}?>">
                    </div>
                </fieldset>
            </form<?php echo form_close();?>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


