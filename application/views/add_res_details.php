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
                        Restaurant Details Page Contents
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">




                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Restaurant Details Content</h3></div>
                        <div class="panel-body">

                            <form method="post" action="<?php echo base_url()?>Admin_Res_Details/edit_res_details" >
                            <?php foreach ($res_details as $s){?>



                        <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Description</label>
                                <!--<input class="form-control"type="text" name="description" value="<?php echo $s->description ?>">-->
                                <textarea class= "form-control "  id="summernote"type="text"  name="description" ><?php echo $s->description ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" >
                            <div class="form-group">
                                <label>Time</label>
                                <input class="form-control"type="text" name="time" value="<?php echo $s->time ?>">
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
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

<!-- jQuery -->

<script>
    $(document).ready(function() {
        $('#summernote').summernote();


    });
</script>

</body>

</html>
