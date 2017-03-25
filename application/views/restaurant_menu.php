<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rak</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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
                    Restaurant MENU
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">



                <div class="panel panel-success">
                    <div class="panel-heading"><h3>Restaurant MENU Contents</h3></div>
                    <div class="panel-body">


                        <form method="post" action="<?php echo base_url()?>Restaurant_menu">
                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input name="serch_res" type="text" class=" search-query" placeholder="Search Restaurant">
                                    <span class="input-group-btn">
                        <input type="submit" class="btn_search"  value="submit" name="btnsearch">
                        </span>
                                </div>
                            </div>
                        </form><br><br>
                        <?php if($this->input->post('btnsearch')){ ?>

                        <div>


                            <div class="table-responsive">
                                <table class=" table table-bordered">
                                    <thead>
                                        <tr>

                                            <th >Rsetaurant Name</th>
                                            <th >Item Type</th>
                                            <th >Item Name</th>
                                            <th >Item Description</th>
                                            <th >Item Price</th>
                                            <th colspan="2">Action</th>

                                        </tr>
                                    </thead>

                                    <form method="post" action="<?php echo base_url()?>Restaurant_menu/editmenu"  >

                            <?php foreach ($this->data['te'] as $e) { ?>
                                    <tbody>
                                        <tr>

                                            <td><?php echo $e->res_name; ?></td>
                                            <td> <?php echo $e->item_type; ?></td>
                                            <td><?php echo $e->item_name; ?></td>
                                            <td><?php echo $e->item_description; ?></td>
                                            <td><?php echo $e->item_price; ?></td>

                                            <td ><input class="btn btn-warning" type="button"  name="btnedit" value="Edit" data-panel-id="<?php echo $e->id ?>" onclick="selectid(this)"/></td>
                                            <td ><button class="btn btn-danger" type="submit"  formaction="<?php echo base_url()?>Restaurant_menu/delete/<?php echo $e->id ?>" onclick="return confirm('Are you confirm to delete this menu?')" >Delete</button></td>

                                        </tr>
                                    </tbody>

                                    </form>
                                    <?php }} ?>
                                </table>
                            </div>

                        </div>

                     </div>




                    </div>
                <div id="myModal" class="modal">

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
    <script>


        // Get the modal
        // var modal = document.getElementById('myModal');
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        //var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];


        // When the user clicks the button, open the modal
        // btn = $(x).data('panel-name');

        function selectid(x) {
            modal.style.display = "block";
            //btn = document.getElementById('edit').value;
            btn = $(x).data('panel-id');

           // alert(btn);

            $.ajax({
                type:'POST',
                //url:"/rak/Resataurant/editmenumodel"
                url:'<?php echo base_url("Restaurant_menu/editmenumodal/")?>'+btn,
                data:{'id':btn},
                cache: false,
                success:function(data)
                {

                    $('#txtHint').html(data);
                }

            });




        }

</script>



</body>