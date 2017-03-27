<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('head.php') ?>
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
    <link href="css/style.css" rel="stylesheet">



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
        <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Menu Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-3">

                    <div class="theiaStickySidebar">
                        <div class="box_style_1" id="faq_box">
                            <ul id="cat_nav">
                                <?php foreach ($show_item_type_from_menu as $r ) { ?>
                                    <li><a href="#<?php echo $r->type_id ?>" class="active"><?php echo $r->item_type ?></a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div><!-- End box_style_1 -->
                    </div>
                </div>

                <div class="col-lg-9">

                    <!--search-->

                    <!--                    <form method="post" action="--><?php //echo base_url()?><!--Admin_menu_attribute">-->
                    <!--                        <div id="custom-search-input">-->
                    <!--                            <div class="input-group">-->
                    <!--                                <input type="text" name="search_menu_att" class=" search-query" placeholder="Search item" id="srch_menu_attr" >-->
                    <!--                                <span class="input-group-btn">-->
                    <!--                                        <input type="submit" name="btn_search_menu_attr" class="btn_search" value="Search"><br/><br/><br/><br/>-->
                    <!--                                        </span>-->
                    <!--                                <br/><br/><br/><br/>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </form>-->



                    <?php
                    foreach ($show_item_type_from_menu as $e) {
                        $type_id = $e->type_id;
                        $query = $this->db->query("SELECT * FROM `menu` WHERE `type_id`= '$type_id'") ?>

                        <h3 class="nomargin_top"><?php echo $e->item_type ?></h3>

                        <div class="panel-group" id="<?php echo $type_id ?>">

                            <div>
                                <table class=" table table-responsive" border="1">
                                    <tr>
                                        <th>Item Type</th>
                                        <th>Item Name</th>
                                        <th>Item Description</th>
                                        <th>Price</th>


                                        <th colspan="2">Action</th>
                                    </tr>
                                    <?php foreach ($query->result() as $q) { ?>
                                        <!--<form method="post" action="<?php echo base_url() ?>Admin_menu_attribute/edit_res"  >
                                    -->
                                        <tr>
                                            <td><?php echo $q->item_type ?></td>
                                            <td><?php echo $q->item_name ?></td>
                                            <td><?php echo $q->item_description ?></td>
                                            <td><?php echo $q->item_price ?></td>

                                            <td>
                                                <button data-panel-id="<?= $q->id ?>" onclick="selectid4(this)">Edit
                                                </button>
                                            </td>

                                        </tr>
                                        <!--</form>-->
                                    <?php } ?>
                                </table>
                            </div>
                        </div>

                        <?php
                    }
                    ?>









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
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>assets/validate.js"></script>

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
            url:'<?php echo base_url("Admin_menu_attribute/showedit/")?>'+btn,
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
            url:'<?php echo base_url("Restaurant_menu/showedit/")?>'+btn,
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
                url: "<?php echo base_url(); ?>Admin_menu_attribute/autocomplete/",
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
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>
<script>
    $('#faq_box a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 120
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
</script>

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
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>



</body>

</html>
