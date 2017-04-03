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
                        Restaurant Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">



                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Restaurant Content</h3></div>
                        <div class="panel-body">




                            <form method="post" action="<?php echo base_url()?>Admin_Restaurant/showedit" enctype="multipart/form-data">

                            <?php foreach ($show_res_content as $s){?>
                                <input class="form-control" type="hidden" name="id" value="<?php echo $s->id ?>">
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $s->name ?>">
                            </div>
                            </div>

                            <div class="col-md-6 col-sm-6" >
                                <div class="form-group">
                                <label>Type</label>
                                <input class="form-control"type="text" name="type" value="<?php echo $s->type ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control"type="text" name="address" value="<?php echo $s->address ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Website</label>
                                <input class="form-control"type="text" name="website" value="<?php echo $s->website ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control"type="text" name="email"  value="<?php echo $s->email ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control"type="text" name="city" value="<?php echo $s->city ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>State</label>
                                <input class="form-control"type="text" name="state" value="<?php echo $s->state ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input class="form-control"type="text" name="postal_code" value="<?php echo $s->postal_code ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control"type="text" name="country" value="<?php echo $s->country ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Time</label>
                                <input class="form-control"type="text" name="time" value="<?php echo $s->time ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control"type="text" name="username" value="<?php echo $s->username ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>password</label>
                                <input class="form-control"type="text" name="password" value="<?php echo $s->password ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>VAT</label>
                                <input class="form-control"type="text" name="vat" value="<?php echo $s->vat ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control"type="text" name="status" value="<?php echo $s->status ?>">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6" >

                            <div class="form-group">
                                <label>File input</label>
                                <input type="file" name="Photo" onchange="readURL(this);"
                            </div>
                            </div>
                            <div class="col-md-12 col-sm-12" >
                                <div class="form-group">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <input class="btn btn-success" type="submit">
                                </div>
                            </div>

                            <?php }?>
                            </form>





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
<!--<script>


    // Get the modal
    // var modal = document.getElementById('myModal');
    var modal2 = document.getElementById('myModal2');
    var modal3 = document.getElementById('myModal3');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[1];


    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');

    function selectid2(x) {


        modal2.style.display = "block";

    }




    function selectid(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Restaurant/showedit/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });


    }


    span.onclick = function() {
        modal2.style.display = "none";
    }
    span2.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }


    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }


</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

-->
</body>

</html>
