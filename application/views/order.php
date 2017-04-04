<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('head');?>
    <?php $this->load->view('admin_head');?>




</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php $this->load->view('adminmenu')?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Order Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Order Content</h3></div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class=" table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Oder</th>
                                            <th >Order Time</th>
                                            <th>Date</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <form method="post"   >
                                        <?php
                                        $count =1;
                                        foreach ($this->data['te'] as $e) {?>

                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count ?> </td>
                                                    <td><?php echo $e->name ?></td>
                                                    <td><?php echo $e->phone ?>
                                                    <hr>
                                                        <?php echo $e->email?>
                                                    </td>
                                                    <td><?php echo $e->address ?></td>
                                                        <!--<button type="button" data-panel-id="<?= $e->username ?>" onclick="selectid4(this)">See full address</button>-->
                                                    <td>
                                                        <table class="table-bordered table-responsive" id="price_table">
                                                            <tr>
                                                            <th width="5%">
                                                                Action
                                                            </th>
                                                            <th width="20%">
                                                                Item Type
                                                            </th>
                                                            <th width="30%">
                                                                Item Name
                                                            </th>
                                                            <th width="10%">
                                                                Size
                                                            </th>
                                                            <th width="5%" >
                                                                Quantity
                                                            </th>
                                                            <th width="10%">
                                                                rate
                                                            </th>
                                                            <th width="10%">
                                                                price
                                                            </th>

                                                            </tr>
                                                            <?php
                                                            $date=$e->date;
                                                            $query=$this->db->query("SELECT * FROM `order_cart` WHERE  `date`='$date'" );
                                                            $total=0;
                                                            //$type_id=$e->type_id;
                                                            foreach ( $query->result() as $s ) {

                                                                ?>
                                                                <tr>
                                                                    <td style="text-align: center">
                                                                        <a href="#0" class="remove_item"  data-panel-id="<?= $s->id ?>" onclick="selectid(this)"><i class="icon_minus_alt"></i></a>
                                                                    </td>
                                                                    <td style="color:#00aba9;text-align: center">

                                                                        <?php

                                                                        //echo $s->type_id;
                                                                        $query5= $this->db->query("select `type` from `menu_type` WHERE `id` ='$s->type_id' ");
                                                                        foreach ( $query5->result() as $t ) { echo $t->type;}
                                                                        ?>

                                                                    </td>
                                                                    <td style="color:#00aba9;text-align: center">
                                                                        <?php echo $s->item_name ?>
                                                                    </td>
                                                                    <td style="color:#00aba9;text-align: center">
                                                                        <?php echo $s->item_attr ?>
                                                                    </td>
                                                                    <td style="color:#00aba9;text-align: center " >
                                                                        <?php echo $s->quantity ?>
                                                                    </td>
                                                                    <td style=" color:#00aba9;text-align: center ">
                                                                        <?php echo $rate=($s->quantity*$s->price)/$s->quantity ?>
                                                                    </td>
                                                                    <td style="color:#00aba9; text-align: center">
                                                                        <?php echo $price=$s->quantity*$s->price ?>
                                                                    </td>

                                                                </tr>

                                                                <?php
                                                            $total=$total+$price;
                                                            }

                                                            ?>
                                                            <tr>

                                                                <td colspan="6" align="right" style="color: red">Total (Including $2 delivery fee): &nbsp;</td>
                                                                <td style="color: red"><?php echo $total+2 ?></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td><?php echo $e->order_time ?></td>
                                                    <td><?php echo  date("Y-m-d", strtotime($e->date)) ?></td>
                                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                    <!--<td><button  data-panel-id=="<?= $e->id ?>" onclick="selectid4(this)">Accept</button></td>-->
                                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                    <td><button class="btn btn-success" type="submit"  formaction="<?php echo base_url()?>Order/accept_order/<?php echo $e->username ?>" onclick="return confirm('Are you confirm to accept this Order?')" >Accept</button></td>

                                                    <td><button class="btn btn-danger" type="submit"  formaction="<?php echo base_url()?>Order/delete_order/<?php echo $e->username ?>" onclick="return confirm('Are you confirm to delete this Order?')" >Delete</button></td>

                                                </tr>
                                            </tbody>

                                        <?php
                                        $count++;
                                        } ?>
                                    </form>

                                </table>
                            </div>

                            <div id="myModal3" class="modal">
                                <br/><br/><br/>
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">×</span>

                                    <h2>Edit Content</h2>
                                    <div id="txtHint"></div>

                                </div>


                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->



<!-- /#wrapper -->

<!-- jQuery -->
<!--<script src="<?php base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php base_url()?>js/common_scripts_min.js"></script>
<script src="<?php base_url()?>js/functions.js"></script>
<script src="<?php base_url()?>assets/validate.js"></script>-->









<script>

    var modal3 = document.getElementById('myModal3');
    var span = document.getElementsByClassName("close")[0];

    $.ajaxSetup({
        data: {
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
        }
    });

    function selectid4(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');
        alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Order/showadd/")?>'+btn,
            data:{'username':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });


    }

</script>

<script>

    $.ajaxSetup({
        data: {
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
        }
    });
    function selectid(x) {


    btn = $(x).data('panel-id');

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Order/oderdelete/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
               // $('#txtHint').html(data);
               // alert(data);
            }

        });
        $('#price_table').load(document.URL +  ' #price_table');

    }
</script>



</body>

</html>
