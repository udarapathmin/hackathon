

    <div id="wrapper">

        <?php $this->load->view('template/navigation'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Management
                            <!-- <small>Subheading</small> -->
                        </h1>

                        <?php if (isset($_GET['delete']) && $_GET['delete'] == 'true') { ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                User Deleted Successfully!
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['delete']) && $_GET['delete'] == 'false') { ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                Failed to delete the User
                            </div>
                        <?php } ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-users"></i>  <a href="<?php echo base_url("index.php/Users/"); ?>">User Management</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Admin Management
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example').DataTable();
                    } );
                </script>
                <table id="example" class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                        $no=1;
                        foreach($userslist as $row){

                            echo "<tr>" . PHP_EOL;
                            echo "<th scope='row'>".$no."</th>" . PHP_EOL;
                            echo "<td>".$row->username."</td>" . PHP_EOL;
                            echo "<td>".$row->created."</td>" . PHP_EOL;
                            echo "<td>".$row->updated."</td>" . PHP_EOL;
                            echo "<td>".$row->name."</td>" . PHP_EOL;
                            echo "<td>".$row->last_name."</td>" . PHP_EOL;
                            echo "<td>".$row->email."</td>" . PHP_EOL;
                            echo "<td>" . PHP_EOL; ?>
                           <a href='<?php echo base_url('index.php/users/view_user/'.$row->id); ?>' class='btn btn-primary btn-xs'><i class="fa fa-list-alt"></i></a>
                           <a href='<?php echo base_url('index.php/users/delete_user/'.$row->id); ?>' class='btn btn-danger btn-xs' onclick="return confirm('Are you sure you want to permenantly delete this user?   you cannot recover this user profile after you delete');"><i class="fa fa-trash-o"></i></a>
                        <?php
                            echo "</td>" . PHP_EOL;
                            echo "</tr>" . PHP_EOL;

                            $no++;
                        }

                        ?>


                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


