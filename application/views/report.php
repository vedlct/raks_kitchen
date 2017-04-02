<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rak's kitchen</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">


    <!-- Custom Fonts -->
<!--    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <link href="<?php echo  base_url()?>css/elegant_font/elegant_font.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

    <!-- Date Picker -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>css/datepicker.css">
    <!--<link rel="stylesheet" href="<?php echo base_url()?>css/main.css">-->

<!--    <script src="--><?php //echo base_url()?><!--js/datepicker.js"></script>-->
<!--    <script src="--><?php //echo base_url()?><!--js/main.js"></script>-->

    <!-- end Date Picker -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->

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
                        Sales Report Page Contents
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Sales Report</h3>
                        </div>

                        <div class="panel-body">


                            <div class="container">


                                <div class="row" >
                                    <form method="post" action="<?php echo base_url()?>Report">
                                        <div class="col-md-3 col-sm-6" >
                                        <div class="form-group" >

                                            <label for="date">From</label>
                                            <input type="text" class="form-control docs-date" name="date_from" placeholder="Pick a date">
                                        </div >
                                        </div>

                                        <div class="col-md-3 col-sm-6" >
                                            <div class="form-group" >

                                                <label for="date">To</label>
                                                <input type="text" class="form-control docs-date" name="date_to" placeholder="Pick a date">
                                            </div >
                                        </div>

                                     <input style="margin-top: 30px" type="submit" name="generate" class="btn btn-success" value="Generate">

                                    </form>

                                    </div>


                                </div>




                            <?php if($this->input->post('generate')){?>

                            <div class="table-responsive">
                                <table class=" table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Item Name</th>
                                        <th>Item attribute</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <!--<th >Order Date</th>

                                        <th colspan="2">Action</th>-->
                                    </tr>
                                    </thead>
                                    <?php $count=0; ?>

                                    <?php foreach ($this->data['show_Sales_review_by_date'] as $e){
                                        $count++;?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $count?></td>
                                        <td><?php echo $e->date ?></td>
                                        <td><?php echo $e->item_name ?></td>
                                        <td><?php echo $e->item_attr ?></td>
                                        <td><?php echo $e->qun ?></td>
                                        <td><?php echo $e->price ?></td>

                                    </tr>

                                    </tbody>
                                    <?php }?>
                                    <tr >
                                        <td colspan="4"></td>

                                        <th id="1">Total Price</th>
                                        <?php foreach ($this->data['gettotaltrans'] as $p) { ?>
                                            <td ><?php echo $p->total?></td>

                                        <?php } ?>
                                    </tr>

                                    <?php } ?>
                                </table>
                            </div>





                    </div>
                </div
            </div>
        </div>



</div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->






</body>

</html>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url()?>js/datepicker.js"></script>
<script src="<?php echo base_url()?>js/main.js"></script>