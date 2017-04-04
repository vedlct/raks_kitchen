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
                        Contact Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Contact</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_contact/insert_main_content" enctype="multipart/form-data">

                                <?php if ($show_contact_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Contact small</label>
                                        <input class="form-control" type="text" name="csmall">
                                    </div>

                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_contact_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Contact small</label>
                                            <input class="form-control" type="text" name="csmall" value="<?php echo $s->small?>">
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
                        <div class="panel-heading"><h3>Contact Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">
                                <a target="_blank" href="<?php echo base_url()?>img/rak-screen-short-desing/contact1.JPG"><img class="img-responsive" src="<?php echo base_url()?>img/rak-screen-short-desing/contact1.JPG"></a>
                            </div>
                            <div>
                                <p>This is some textual instructions...</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Customer Service</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_contact/insert_customer_service_content" enctype="multipart/form-data">

                                <?php if ($show_customer_content == Null){ ?>

                                    <div class="form-group summer">
                                        <label>Details</label>
                                        <textarea  id="summernote" name="details"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" >
                                    </div>


                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_customer_content as $s){
                                        ?>

                                        <div class="form-group summer">
                                            <label>Details</label>
                                            <!--                                            <input class="form-control" type="text" name="details" value="--><?php //echo $s->details?><!--">-->
                                            <textarea  id="summernote" name="details" value="<?php echo $s->details?>"><?php echo $s->details?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="text" name="phone" value="<?php echo $s->phone?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email"  value="<?php echo $s->email?>">
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
                        <div class="panel-heading"><h3>Customer Service Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">
                                <a target="_blank" href="<?php echo base_url()?>img/rak-screen-short-desing/customercontact2.JPG"><img class="img-responsive" src="<?php echo base_url()?>img/rak-screen-short-desing/customercontact2.JPG"></a>
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
                            <h3>Resturant Service</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_contact/insert_resturant_service_content" enctype="multipart/form-data">

                                <?php if ($show_resturant_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Details</label>
                                        <!--<input class="form-control" type="text" name="details">-->
                                        <textarea  class="form-control" id="summernote1" name="details" type="text"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" >
                                    </div>


                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_resturant_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Details</label>
                                            <!--<input class="form-control" type="text" name="details" value="<?php echo $s->details?>">-->
                                            <textarea  class="form-control" id="summernote1" name="details" type="text" ><?php echo $s->details?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="text" name="phone" value="<?php echo $s->phone?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email"  value="<?php echo $s->email?>">
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
                        <div class="panel-heading"><h3>Resturant Service Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">
                                <a target="_blank" href="<?php echo base_url()?>img/rak-screen-short-desing/rescontact2.JPG"><img class="img-responsive" src="<?php echo base_url()?>img/rak-screen-short-desing/rescontact2.JPG"></a>
                            </div>
                            <div>
                                <p>This is some textual instructions...</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




                </div>
            </div>

            <!-- /.row -->

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
    });
</script>



</body>

</html>
