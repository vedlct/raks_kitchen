<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rak</title>

    <!--autocomplete search-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- search box-->
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
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
                        Menu Attribute Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">

                    <!--                search                  -->

                    <form method="post" action="<?php echo base_url()?>Res_Admin_menu_attribute">
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" name="search_menu_att" class=" search-query" placeholder="Search item" id="srch_menu_attr" >
                                <span class="input-group-btn">
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        <input type="submit" name="btn_search_menu_attr" class="btn_search" value="Search"><br/><br/><br/><br/>
                                        </span>
                                <br/><br/><br/><br/>
                            </div>
                        </div>
                    </form>

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Menu Attribute Content</h3></div>
                        <div class="panel-body">

                            <?php if($this->input->post('btn_search_menu_attr')){
                            ?>
                            <div class="table-responsive">
                                <table class=" table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Item attribute</th>
                                            <th>Price</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <?php foreach ($this->data['te'] as $e) {?>
                                    <!--<form method="post" action="<?php echo base_url()?>Admin_menu_attribute/edit_res"  >
                                    -->
                                        <tbody>
                                            <tr>
                                                <td><?php echo $e->item_name ?></td>
                                                <td><?php echo $e->item_attribute?></td>
                                                <td><?php echo $e->price?></td>
                                                <td><button  data-panel-id="<?= $e->id ?>" onclick="selectid4(this)">Edit</button></td>
                                            </tr>
                                        </tbody>

                                    <!--</form>-->
                                    <?php }} ?>
                                </table>
                            </div>



                            <?php if(!$this->input->post('btn_search_menu_attr')){
                            $count = 1;
                            ?>

                            <div class="table-responsive">
                                <table class=" table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>Item Name</th>
                                            <th>Item attribute</th>
                                            <th>Price</th>
                                            <th>Serial</th>
                                            <th colspan="2">Action</th>

                                        </tr>
                                    </thead>

                                    <?php
                                    foreach ($mattribute as $s) {
                                        ?>
                                        <tbody>
                                            <tr>

                                                <td><?php echo $s->item_name ?></td>
                                                <td><?php echo $s->item_attribute ?></td>
                                                <td><?php echo $s->price ?></td>
                                                <td><?php echo $s->serial ?></td>
                                                <td>
                                                    <button data-panel-id="<?= $s->id ?>" onclick="selectid(this)">Edit</button>
                                                </td>
                                            </tr>
                                        </tbody>



                                        <?php
                                        $count++;
                                    }}
                                    ?>

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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<script>


    // Get the modal
    // var modal = document.getElementById('myModal');

    var modal3 = document.getElementById('myModal3');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];



    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');




    function selectid(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Res_Admin_menu_attribute/showedit/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid4(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Res_Admin_menu_attribute/showedit/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function ajaxSearch()
    {
        var input_data = $('#search_menu_att').val();

        if (input_data.length === 0)
        {
            $('#suggestions').hide();
        }
        else
        {

            var post_data = {
                'search_menu_att': input_data,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Res_Admin_menu_attribute/autocomplete/",
                data: post_data,
                success: function (data) {
                    // return success
                    if (data.length > 0) {
                        $('#suggestions').show();
                        //$('#autoSuggestionsList').addClass('auto_list');
                        $('#autoSuggestionsList').html(data);
                    }
                }

            });

        }
    }

    //when click on close button close modal
    span.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }


</script>

<!--autocomplete search-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
    $(function x() {
        $( "#skills" ).autocomplete({
            source: '<?php echo base_url(); ?>Res_Admin_menu_attribute/autocomplete'
        });
    });

</script>

<script>
    $(function(){
        $("#srch_menu_attr").autocomplete({
            source: "<?php echo site_url('Res_Admin_menu_attribute/get_search_menu_attr_autocomplete');?>" // path to the get_birds method
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>



</body>

</html>
