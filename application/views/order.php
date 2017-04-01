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
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <!--<link href="<?php echo  base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <link href="<?php echo  base_url()?>css/elegant_font/elegant_font.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>js/bootstrap.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>




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
                                                        <table class="table-bordered table-responsive">
                                                            <tr>
                                                            <th width="5%">
                                                                    Action
                                                            </th>
                                                            <th width="50%">
                                                                Item Name
                                                            </th>
                                                            <th width="10%">
                                                                Size
                                                            </th>
                                                            <th width="10%">
                                                                Quantity
                                                            </th>
                                                            <th width="20%">
                                                                rate
                                                            </th>
                                                            <th width="20%">
                                                                price
                                                            </th>

                                                            </tr>
                                                            <?php
                                                            $date=$e->date;
                                                            $query=$this->db->query("SELECT * FROM `order_cart` WHERE  `date`='$date'" );
                                                            $total=0;
                                                            foreach ( $query->result() as $s ) {

                                                                ?>
                                                                <tr>
                                                                    <td style="text-align: center">
                                                                        <a href="#0" class="remove_item"  data-panel-id="<?= $s->id ?>" onclick="selectid(this)"><i class="icon_minus_alt"></i></a>
                                                                    </td>
                                                                    <td style="color:#00aba9">
                                                                        <?php echo $s->item_name ?>
                                                                    </td>
                                                                    <td style="color:#00aba9">
                                                                        <?php echo $s->item_attr ?>
                                                                    </td>
                                                                    <td style="color:#00aba9">
                                                                        <?php echo $s->quantity ?>
                                                                    </td>
                                                                    <td style="color:#00aba9">
                                                                        <?php echo $rate=($s->quantity*$s->price)/$s->quantity ?>
                                                                    </td>
                                                                    <td style="color:#00aba9">
                                                                        <?php echo $price=$s->quantity*$s->price ?>
                                                                    </td>

                                                                </tr>

                                                                <?php
                                                            $total=$total+$price;
                                                            }

                                                            ?>
                                                            <tr>

                                                                <td colspan="5" align="right" style="color: red">Total (Including $2 delivery fee): &nbsp;</td>
                                                                <td style="color: red"><?php echo $total+2 ?></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td><?php echo $e->order_time ?></td>
                                                    <td><?php echo  date("Y-m-d", strtotime($e->date)) ?></td>
                                                    <!--<td><button  data-panel-id=="<?= $e->id ?>" onclick="selectid4(this)">Accept</button></td>-->
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

</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php base_url()?>js/common_scripts_min.js"></script>
<script src="<?php base_url()?>js/functions.js"></script>
<script src="<?php base_url()?>assets/validate.js"></script>



<!--autocomplete search-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
    $(function x() {
        $( "#skills" ).autocomplete({
            source: '<?php echo base_url(); ?>Admin_menu_attribute/autocomplete'
        });
    });

</script>

<script>
    $(function(){
        $("#srch_menu_attr").autocomplete({
            source: "<?php echo site_url('Admin_menu_attribute/get_search_menu_attr_autocomplete');?>" // path to the get_birds method
        });
    });
</script>


<script>

    var modal3 = document.getElementById('myModal3');
    var span = document.getElementsByClassName("close")[0];

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
                alert(data);
            }

        });

    }
</script>



</body>

</html>
