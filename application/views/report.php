<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin_head');?>


    <link rel="stylesheet" href="<?php echo base_url()?>css/datepicker.css">


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
                <div class="col-lg-12">

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


                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                     <input style="margin-top: 35px;margin-left: 50px" type="submit" name="generate" class="btn btn-success" value="Generate">

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
                                </table>
                            </div>
                                    <?php }else{ ?>


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

                                    <?php foreach ($this->data['show_Sales_review_date'] as $v){
                                        $count++;?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $count?></td>
                                            <td><?php echo $v->date ?></td>
                                            <td><?php echo $v->item_name ?></td>
                                            <td><?php echo $v->item_attr ?></td>
                                            <td><?php echo $v->qun ?></td>
                                            <td><?php echo $v->price ?></td>

                                        </tr>

                                        </tbody>
                                    <?php }?>
                                    <tr >
                                        <td colspan="4"></td>

                                        <th id="1">Total Price</th>
                                        <?php foreach ($this->data['gettotal'] as $r) { ?>
                                            <td ><?php echo $r->total?></td>

                                        <?php } ?>
                                    </tr>
                                </table>
                            </div>

                            <?php } ?>





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
<script src="<?php echo base_url()?>js/jquery-1.12.4.js"></script>
<script src="<?php echo base_url()?>js/datepicker.js"></script>
<script src="<?php echo base_url()?>js/main.js"></script>