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
                       About us Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_content" enctype="multipart/form-data">

                                <?php if ($show_about_us_content == Null){ ?>

                                    <div class="form-group">
                                        <label>About us small</label>
                                        <input class="form-control" type="text" name="asmall">
                                    </div>


                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_about_us_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>About us small</label>
                                            <input class="form-control" type="text" name="asmall" value="<?php echo $s->small?>">
                                        </div>
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>About Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">
                                <a target="_blank" href="<?php echo base_url()?>img/rak-screen-short-desing/about1.JPG"><img class="img-responsive" src="<?php echo base_url()?>img/rak-screen-short-desing/about1.JPG"></a>
                            </div>
                            <div>
                                <p></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About Details</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_details_content" enctype="multipart/form-data">

                                <?php if ($show_about_us_details_content == Null){ ?>

                                    <div class="form-group">
                                        <label>header</label>
                                        <input class="form-control" type="text" name="header">
                                    </div>

                                    <div class="form-group">
                                        <label>details</label>
                                        <!--<input class="form-control" type="text" name="details">-->
                                        <textarea  class="form-control" id="summernote" name="details" type="text" ></textarea>
                                    </div>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_about_us_details_content as $s){
                                        ?>

                                        <div class="form-group">

                                            <label>header</label>
                                            <input class="form-control" type="text" name="header" value="<?php echo $s->header ?>">

                                            <label>Details</label>
                                            <!--<input class="form-control" type="text" name="details" value="<?php echo $s->details?>">-->
                                            <textarea class= "form-control "  id="summernote2"type="text" name="details" ><?php echo $s->details?></textarea>

<<<<<<< HEAD
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
=======
                                        </div>

>>>>>>> 955a415a3532a8b97bc387b16af6d7ed406dc32f
                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>About Details Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">
                                <a target="_blank" href="<?php echo base_url()?>img/rak-screen-short-desing/about2.JPG"><img class="img-responsive" src="<?php echo base_url()?>img/rak-screen-short-desing/about2.JPG"></a>
                            </div>
                            <div>
                                <p></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About Feature</h3>
                        </div>

                        <div class="panel-body">

                            <input class="btn btn-success" type="button" value="ADD" onclick="selectid1(this)" >
                            <!--<form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_feature_content" enctype="multipart/form-data">-->

                                <?php if ($show_about_us_feature_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Big</label>
                                        <input class="form-control" type="text" name="big">
                                    </div>

                                    <div class="form-group">
                                        <label>Small</label>
                                        <input class="form-control" type="text" name="small">
                                    </div>

                                    <div class="form-group">
                                        <label>Box Header</label>
                                        <input class="form-control" type="text" name="boxheader" >
                                    </div>

                                    <div class="form-group">
                                        <label>Box details</label>
                                        <input class="form-control" type="text" name="boxdetails" >

                                    </div>

                                    <div class="form-group">
                                        <label>Icon</label>

                                        <select class="form-control"  name="icon" id="dst" >

                                            <option value="" selected disabled>Icon Name</option>

                                            <?php

                                            foreach ($icon as $i)
                                            {
                                                echo "<option value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
                                            }

                                            ?>
                                        </select>
                                    </div>



                                <?php }else{ ?>



                                    <!--<input class="btn btn-success" type="button" value="ADD">-->

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th style="width: 10%">Big</th>
                                                <th style="width: 10%">Small</th>
                                                <th style="width: 10%">Box Header</th>
                                                <th style="width: 50%">Box details</th>
                                                <th style="width: 20%">Icon</th>
                                                <th style="width: 20%">Icon image</th>
                                                <th style="width: 10%">Action</th>

                                            </tr>
                                        </thead>

                                    <?php
                                    $count=1;
                                    foreach ($show_about_us_feature_content as $s){
                                        ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo $count;?></td>
                                                <td><?php echo $s->big?></td>
                                                <td><?php echo $s->small?></td>
                                                <td><?php echo $s->box_header?></td>
                                                <td><?php echo $s->box_details?></td>
                                                <td id="dropdown-style">
                                                    <select class="form-control"  name="icon" id="dst" onchange="myfunc()">

                                                        <option value="<?php echo $s->box_icon ?>" selected disabled><?php echo $s->box_icon ?></option>

                                                        <?php

                                                        foreach ($icon as $i)
                                                        {
                                                            echo "<option  value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
                                                        }

                                                        ?>
                                                    </select>
                                                </td>
                                                <td ><i id="icon" class="<?php echo $s->box_icon ?>"></i></td>
                                                <td><button data-panel-id="<?= $s->id ?>" onclick="selectid(this)" class="btn btn-warning">Edit</button></td>
                                            </tr>
                                        </tbody>


                                        <?php $count++; } }?>
                                    </table>
                                    <!--<input class="btn btn-success" type="submit">-->
                            <!--</form>-->
                        </div>
                    </div>

                </div>

                <div id="myModal1" class="modal">
                    <br/><br/><br/>

                    <!-- Modal content -->

                    <div class="modal-content" style="padding: 35px; width: 50%; margin: 0 auto">
                        <span class="close">×</span>

                        <h2>Edit Content</h2>



                        <div id="txtHint"></div>

                    </div>



                </div>

                <div id="myModal2" class="modal" >

                    <!-- Modal content -->

                    <div class="modal-content" style="padding: 35px; width: 50%; margin: 0 auto">
                        <span class="close">×</span>

                        <h2>Add Content</h2>

                        <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_feature_content" enctype="multipart/form-data">

                            <?php if ($show_about_us_feature_content != Null){ ?>

                                <div class="form-group">
                                    <label>Big</label>
                                    <input class="form-control" type="text" name="big">
                                </div>

                                <div class="form-group">
                                    <label>Small</label>
                                    <input class="form-control" type="text" name="small">
                                </div>

                                <div class="form-group">
                                    <label>Box Header</label>
                                    <input class="form-control" type="text" name="boxheader" >
                                </div>

                                <div class="form-group">
                                    <label>Box details</label>
                                    <!--<input class="form-control" type="text" name="boxdetails" >-->
                                    <textarea class= "form-control "  id="summernote1" type= "text" name= "boxdetails" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Icon</label>

                                    <select class="form-control"  name="icon" id="dst" >

                                        <option value="" selected disabled>Icon Name</option>

                                        <?php

                                        foreach ($icon as $i)
                                        {
                                            echo "<option value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
                                        }

                                        ?>
                                    </select>
                                </div>



                            <?php }else{ ?>

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th style="width: 10%">Big</th>
                                    <th style="width: 10%">Small</th>
                                    <th style="width: 10%">Box Header</th>
                                    <th style="width: 50%">Box details</th>
                                    <th style="width: 20%">Icon</th>
                                    <th style="width: 20%">Icon image</th>


                                </tr>
                                </thead>

                                <?php
                                $count=1;
                                foreach ($show_about_us_feature_content as $s){
                                    ?>

                                    <tbody>
                                    <tr>
                                        <td><?php echo $count;?></td>
                                        <td><?php echo $s->big?></td>
                                        <td><?php echo $s->small?></td>
                                        <td><?php echo $s->box_header?></td>
                                        <td><?php echo $s->box_details?></td>
                                        <td id="dropdown-style">
                                            <select class="form-control"  name="icon" id="dst" onchange="myfunc()">

                                                <option value="<?php echo $s->box_icon ?>" selected disabled><?php echo $s->box_icon ?></option>

                                                <?php

                                                foreach ($icon as $i)
                                                {
                                                    echo "<option  value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
                                                }

                                                ?>
                                            </select>
                                        </td>
                                        <td ><i id="icon" class="<?php echo $s->box_icon ?>"></i></td>

                                    </tr>
                                    </tbody>


                                    <?php $count++; } }?>
                            </table>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <input class="btn btn-success" type="submit">
                            </form>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>About Feature Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">
                                <a target="_blank" href="<?php echo base_url()?>img/rak-screen-short-desing/about3.JPG"><img class="img-responsive" src="<?php echo base_url()?>img/rak-screen-short-desing/about3.JPG"></a>
                            </div>
                            <div>
                                <p></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>About Banner</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_aboutus/insert_about_us_banner_content" enctype="multipart/form-data">

                                <?php if ($show_about_us_banner_content == Null){ ?>

                                    <div class="form-group">
                                        <label>no Details</label>
                                        <input class="form-control" type="text" name="details">
                                    </div>

                                    <div class="form-group">
                                        <label>image</label>
                                        <input class="form-control" type="text" name="image">
                                    </div>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_about_us_banner_content as $s){
<<<<<<< HEAD
                                        ?>

                                        <div class="form-group">
                                            <label>Details</label>
                                            <!--<input class="form-control" type="text" name="details" value="<?php echo $s->details?>">-->
                                            <textarea class= "form-control "  id="summernote2"type="text" name="details" ><?php echo $s->details?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>image</label>
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        <input class="btn btn-success" type="submit">
                                        <?php
=======
>>>>>>> 955a415a3532a8b97bc387b16af6d7ed406dc32f
                                    }}
                                ?>
                                <div class="form-group">
                                    <label>Details</label>
                                    <!--<input class="form-control" type="text" name="details" value="<?php echo $s->details?>">-->
                                    <textarea  class="form-control" id="summernote" name="details" type="text" ><?php echo $s->details?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>image</label>
                                    <input class="form-control" type="file" name="image">
                                </div>

                                <input class="btn btn-success" type="submit">

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>About Banner Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">
                                <a target="_blank" href="<?php echo base_url()?>img/rak-screen-short-desing/about4.JPG"><img class="img-responsive" src="<?php echo base_url()?>img/rak-screen-short-desing/about4.JPG"></a>
                            </div>
                            <div>
                                <p></p>
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
    $(document).ready(function() {
        $('#summernote').summernote();
        $('#summernote1').summernote();
        $('#summernote2').summernote();

    });

    function myfunc() {
        var x = document.getElementById("dst").value;
        document.getElementById("icon").className = x;
    }
</script>

<script>


    // Get the modal
    // var modal = document.getElementById('myModal');
    var modal1 = document.getElementById('myModal1');
    var modal2 = document.getElementById('myModal2');



    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
    var span1 = document.getElementsByClassName("close")[1];


    function selectid(x) {
        modal1.style.display = "block";

        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>Admin_aboutus/edit_about_us_feature_content/"'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
               // alert(data);
                $('#txtHint').html(data);
            }

        });
    }

    function selectid1(x) {
        modal2.style.display = "block";
    }

    span.onclick = function() {
            modal1.style.display = "none";
    }
    span1.onclick = function() {
        modal2.style.display = "none";
    }



    /*
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
    */

    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
        else if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }



</script>
</body>

</html>
