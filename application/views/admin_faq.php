<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/modal.css" rel="stylesheet">
    <!-- Custom CSS -->
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
        <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                       Faq Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3>Texual instruction for "FAQ" page</h3></div>
                    <div class="panel-body">

                        <div>
                            <p>
                                1. By clicking the "Add New" Button at the top of the Main Content You can add a new section in the FAQ page. <br/><br/>
                                2. IF you want to add a new section click the add new button.<br/>
                                    2.1. A pop up window will appear.<br/>
                                    2.2. In the Label "Header" add the head of the section you want.<br/>
                                    2.3. In the Label "Sub Header" add the sub head of the section you want.<br/>
                                    2.4. In the Label "Details" add the details of the section you want.<br/>
                                    2.5. Finally click the submit button to add your desired section.<br/><br/>
                                3. IF you want to edit on a existing section click the add Edit button on that section table.<br/>
                                    3.1. A pop up window will appear.<br/>
                                    3.2. In the Label "Header" your existing header will appear on the text field. Edit the desired part of the head of the section you want.<br/>
                                    3.3. In the Label "Sub Header" your existing sub header will appear on the text field. Edit the desired part of the sub header of the section you want.<br/>
                                    3.4. In the Label "Details" your existing details will appear on the text field. Edit the desired part of the details of the section you want.<br/>
                                    3.5. If you don't want to edit, simply close the pop up window.<br/>
                                    3.6. Finally click the submit button to change your desired section.<br/>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">
                            <div style="float: right;>
                                <a href="#"> <button class="btn btn-success" onclick="selectid2(this)">Add New</button></a><br><br>
                            </div>

                            <?php
                            foreach ($show_faq_content as $s){
                                $header = $s->header;?>
                                <h4 style="font-weight: bold"><?php echo $header;?></h4><?php
                                $query=$this->db->query("SELECT * FROM `faq` WHERE `header`= '$s->header'");
                                foreach ($query->result() as $q){?>
                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th style="width: 150px">Sub Header</th>
                                               <th>Details</th>
                                               <th style="width: 100px;">Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                           <tr>
                                               <td><?php echo $q->sub_header?></td>
                                               <td><?php echo $q->details?></td>
                                               <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?= $q->id ?>" onclick="selectid(this)">Edit</button></td>
                                           </tr>
                                       </tbody>
                                   </table>
                            <?php
                                }
                            }
                            ?>

                            <div id="myModal2" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content" style="padding: 35px; width: 50%; margin: 0 auto">
                                    <span class="close">×</span>

                                    <h2>Add Content</h2>
                                    <form role="form" method="post" action="<?php echo base_url()?>Admin_Faq/insert_faq" >
                                    <div class="form-group">
                                        <label>Header</label>
                                        <input class="form-control" type="text" name="header">
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Header</label>
                                        <input class="form-control"type="text" name="sub_header">
                                    </div>
                                    <div class="form-group">
                                        <label>Details</label>
                                        <textarea class="form-control"  name="details"></textarea>
                                    </div>
                                        <input class="btn btn-success" type="submit">
                                    </form>

                                </div>

                            </div>

                            <div id="myModal3" class="modal" >

                                <!-- Modal content -->
                                <div class="modal-content"  style="padding: 35px; width: 50%; margin: 0 auto">
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
<script>
    // Get the modal
    // var modal = document.getElementById('myModal');
    var modal2 = document.getElementById('myModal2');
    var modal3 = document.getElementById('myModal3');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[1];
    var span1 = document.getElementsByClassName("close")[0];


    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');

    function selectid2(x) {
        modal2.style.display = "block";
    }

    function selectid(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_faq/showedit/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }


    span1.onclick = function() {
        modal2.style.display = "none";
    }
    /*
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
    */

    span.onclick = function() {
        modal3.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
        else if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }

</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>

</html>
