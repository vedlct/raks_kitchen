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
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

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
        <!--sidemenu-->
        <?php $this->load->view('adminmenu');?>
        <!--sidemenu-->

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Restaurant Details Page Contents
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">




                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Restaurant Details Content</h3></div>
                        <div class="panel-body">

                            <form method="post" action="<?php echo base_url()?>Res_Admin_Res_Details/add_new_res_details" >


                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control"type="text" name="description">
                                </div>
                                <div class="form-group">
                                    <label>Time</label>
                                    <input class="form-control"type="text" name="time">
                                </div>
                                <input class="btn btn-success" type="submit">
                            </form>



<!--                            <table class=" table table-responsive" border="1">-->
<!--                                <tr>-->
<!--                                    <td>Restaurant Name</td>-->
<!---->
<!--                                    <td>Description</td>-->
<!--                                    <td>Time</td>-->
<!---->
<!---->
<!---->
<!--                                </tr>-->
<!--                                --><?php //foreach ($res_details as $s){?>
<!---->
<!--                                    <tr>-->
<!---->
<!---->
<!--                                        <td>--><?php //echo $s->name ?><!--</td>-->
<!---->
<!--                                        <td>--><?php //echo $s->description ?><!--</td>-->
<!--                                        <td>--><?php //echo $s->time ?><!--</td>-->
<!---->
<!---->
<!---->
<!---->
<!--                                    </tr>-->
<!--                                    --><?php
//
//                                }
//                                ?>
<!---->
<!---->
<!--                            </table>-->
                            <!--<div id="myModal3" class="modal">

                                <!-- Modal content
                                <div class="modal-content">
                                    <span class="close">×</span>

                                    <h2>Edit Content</h2>
                                    <form method="post" action="<?php echo base_url()?>Res_Admin_Res_Details/add_new_res_details" >
                                        <div class="form-group">
                                            <label>Restaurant Name</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control"type="text" name="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input class="form-control"type="text" name="time">
                                        </div>
                                        <input class="btn btn-success" type="submit">
                                    </form>


                                    <div id="txtHint"></div>

                                </div>


                            </div>-->




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
<!--<script>


    // Get the modal
    // var modal = document.getElementById('myModal');
    var modal3 = document.getElementById('myModal3');


    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    //var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[0];


    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');


    function selectid(x) {
        modal3.style.display = "block";
    }

    span2.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }


</script>-->
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>

</html>
