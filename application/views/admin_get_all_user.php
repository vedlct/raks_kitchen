<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin_head');?>





</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        User Information Page
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>User Information</h3>
                        </div>

                        <div class="panel-body">


                            <div class="container">



                                <div class="table-responsive">

                                    <table class="table  table-bordered">

                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>

                                            <th>
                                                Phone
                                            </th>
                                            <th>
                                                User Name
                                            </th>
                                            <th>
                                                Password
                                            </th>
                                            <th>
                                                Full Address
                                            </th>


                                        </tr>

                                        <?php foreach ($this->data['show_all_user'] as $m) { ?>
                                            <tr>
                                                <td width="20%"><?php echo $m->name?></td>
                                                <td width="20%"><?php echo $m->email?></td>
                                                <td width="20%"><?php echo $m->phone?></td>
                                                <td width="20%"><?php echo $m->username?></td>
                                                <td width="20%"><?php echo $m->password?></td>
                                                <td width="20%"><?php echo $m->full_address?>,<?php echo $m->city?>,<?php echo $m->state?>-<?php echo $m->postcode?>;<?php echo $m->country?></td>

                                                </tr>
                                            <?php
                                        }?>


                                    </table>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->






</body>

</html>
<script src="<?php echo base_url()?>js/jquery-1.12.4.js"></script>
<script src="<?php echo base_url()?>js/datepicker.js"></script>
<script src="<?php echo base_url()?>js/main.js"></script>