<!DOCTYPE html>
<html lang="en">

<head>
        
        <!-- Title -->
        <title>RAK</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="<?php echo base_url()?>assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title">RAK</span>

                        </div>


                        

                    </div>
                </nav>
            </header>



            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
<!--                            <img src="assets/images/afra.png" class="circle" alt="" >-->
                            <br>
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Admin<i class="material-icons right">arrow_drop_down</i></p>

                            </a>
                        </div>

                    </div>
                    <div class="sidebar-account-settings">
                        <ul>

                            <li class="divider"></li>
                            <li class="no-padding">
                                <a href="logout.php" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                <ul  class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active"><a class="waves-effect waves-grey " href="admin_home.php"><i class="material-icons">settings_input_svideo</i>Home</a></li>
                    <li class="no-padding">
                        <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>New Barcode</a>

                    </li>
                    <li class="no-padding">
                        <a  href="adduser.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>Add New User</a>

                    </li>

                </ul>
                <div class="footer">
                    <p class="copyright">Tech Cloud Ltd. ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">

                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">

                                    <span class="card-title">Home Page Contents</span>


                                    <form method="post" action="<?php echo base_url()?>Admin_Home/insert_main_content">


                                        <?php if ($show_main_content == Null){ ?>

                                            <label>Main Content Big</label>
                                            <input type="text" name="main_content_big"  >
                                            <br>
                                            <label>Main Content Small</label>
<!--                                            <div id="summernote"><p>Hello Summernote</p></div>-->

                                            <input type="text" name="main_content_small" ></input>
                                            <br>

                                            <input type="submit">
                                        <?php }else{
                                            foreach ($show_main_content as $s){
                                            ?>


                                            <label>Main Content Big</label>
                                            <input type="text" name="main_content_big" value="<?php echo $s->big?>" >
                                            <br>
                                            <label>Main Content Small</label>
                                            <input type="text" name="main_content_small" value="<?php echo $s->small?>" >
                                            <br>
                                                <input type="submit">
                                        <?php } }?>
                                    </form>
                                    <form method="post" action="<?php echo base_url()?>Admin_Home/insert_resturant_content">
                                    <h1><label>Resturant Content And More</label></h1>
                                        <?php if ($show_resturant_content == Null){ ?>

                                        <label>Resturant Content</label>
                                        <input type="text" name="resturant1">
                                            <label>People Served</label>
                                            <input type="text" name="resturant2">
                                            <label>Register User</label>
                                            <input type="text" name="resturant3">
                                        <input type="submit">
                                    <?php }else{

                                        foreach ($show_resturant_content as $s){
                                        ?>

                                            <label>Resturant Content</label>
                                            <input type="text" name="resturant1" value="<?php echo $s->resturant?>">
                                            <label>People Served</label>
                                            <input type="text" name="resturant2" value="<?php echo $s->people_served?>">
                                            <label>Register User</label>
                                            <input type="text" name="resturant3" value="<?php echo $s->registered_user?>">
                                        <input type="submit">
                                        <?php
                                        }}
                                        ?>

                                    </form>
                                    <form method="post" action="<?php echo base_url()?>Admin_Home/insert_how_it_work">
                                        <h1><label>Resturant Content And More</label></h1>
                                        <?php if ($show_howitwork_content == Null){ ?>

                                            <label>How it works big</label>
                                            <input type="text" name="hiw_big">
                                            <label>How it works small</label>
                                            <input type="text" name="hiw_small">
                                            <label>Step one Big</label>
                                            <input type="text" name="hiw_one_big">
                                            <label>Step one small</label>
                                            <input type="text" name="hiw_one_big">
                                            <label>Step two Big</label>
                                            <input type="text" name="hiw_two_big">
                                            <label>Step two Small</label>
                                            <input type="text" name="hiw_two_small">
                                            <label>Step three Big</label>
                                            <input type="text" name="hiw_three_big">
                                            <label>Step three Small</label>
                                            <input type="text" name="hiw_three_small">
                                            <label>Step four Big</label>
                                            <input type="text" name="hiw_four_big">
                                            <label>Step four Small</label>
                                            <input type="text" name="hiw_four_small">

                                            <input type="submit">
                                        <?php }else{

                                            foreach ($show_howitwork_content as $s){
                                                ?>


                                                <label>How it works big</label>
                                                <input type="text" name="hiw_big" value="<?php echo $s->big?>">
                                                <label>How it works small</label>
                                                <input type="text" name="hiw_small" value="<?php echo $s->small?>">
                                                <label>Step one Big</label>
                                                <input type="text" name="hiw_one_big" value="<?php echo $s->one_big?>">
                                                <label>Step one small</label>
                                                <input type="text" name="hiw_one_big" value="<?php echo $s->one_small?>">
                                                <label>Step two Big</label>
                                                <input type="text" name="hiw_two_big" value="<?php echo $s->two_big?>">
                                                <label>Step two Small</label>
                                                <input type="text" name="hiw_two_small" value="<?php echo $s->two_small?>">
                                                <label>Step three Big</label>
                                                <input type="text" name="hiw_three_big" value="<?php echo $s->three_big?>">
                                                <label>Step three Small</label>
                                                <input type="text" name="hiw_three_small" value="<?php echo $s->three_small?>">
                                                <label>Step four Big</label>
                                                <input type="text" name="hiw_four_big" value="<?php echo $s->four_big?>">
                                                <label>Step four Small</label>
                                                <input type="text" name="hiw_four_small" value="<?php echo $s->four_small?>">

                                                <input type="submit">
                                                <?php
                                            }}
                                        ?>

                                    </form>
                                    <form method="post" action="<?php echo base_url()?>Admin_Home/insert_resturant_content">
                                        <h1><label>Resturant Content And More</label></h1>
                                        <?php if ($show_resturant_content == Null){ ?>

                                            <label>Resturant Content</label>
                                            <input type="text" name="resturant1">
                                            <label>People Served</label>
                                            <input type="text" name="resturant2">
                                            <label>Register User</label>
                                            <input type="text" name="resturant3">
                                            <input type="submit">
                                        <?php }else{

                                            foreach ($show_resturant_content as $s){
                                                ?>

                                                <label>Resturant Content</label>
                                                <input type="text" name="resturant1" value="<?php echo $s->resturant?>">
                                                <label>People Served</label>
                                                <input type="text" name="resturant2" value="<?php echo $s->people_served?>">
                                                <label>Register User</label>
                                                <input type="text" name="resturant3" value="<?php echo $s->registered_user?>">
                                                <input type="submit">
                                                <?php
                                            }}
                                        ?>
                                    </form>
                                    <form method="post" action="<?php echo base_url()?>Admin_Home/insert_section_four">
                                        <h1><label>Resturant Content And More</label></h1>
                                        <?php if ($show_sectionfour_content == Null){ ?>

                                            <label>Section four Big</label>
                                            <input type="text" name="sfourbig">
                                            <label>Section four Small</label>
                                            <input type="text" name="sfoursmall">

                                            <input type="submit">
                                        <?php }else{

                                            foreach ($show_sectionfour_content as $s){
                                                ?>

                                                <label>Section four Big</label>
                                                <input type="text" name="sfourbig" value="<?php echo $s->big?>">
                                                <label>Section four Small</label>
                                                <input type="text" name="sfoursmall" value="<?php echo $s->small?>">
                                                <input type="submit">
                                                <?php
                                            }}
                                        ?>

                                    </form>
                                    <form method="post" action="<?php echo base_url()?>Admin_Home/insert_section_five" enctype="multipart/form-data">
                                        <h1><label>Resturant Content And More</label></h1>
                                        <?php if ($show_sectionfive_content == Null){ ?>

                                            <label>Section five Big</label>
                                            <input type="text" name="sfivebig">
                                            <label>Section five Small</label>
                                            <input type="text" name="sfivesmall">
                                            <label>Section five backgroud Image</label>
                                            <input type="file" name="sfiveimage">

                                            <input type="submit">
                                        <?php }else{

                                            foreach ($show_sectionfive_content as $s){
                                                ?>

                                                <label>Section five Big</label>
                                                <input type="text" name="sfivebig" value="<?php echo $s->big?>">
                                                <label>Section five Small</label>
                                                <input type="text" name="sfivesmall" value="<?php echo $s->small?>">
                                                <label>Section five backgroud Image</label>
                                                <input type="file" name="sfiveimage" value="<?php echo $s->image?>">

                                                <input type="submit">
                                                <?php
                                            }}
                                        ?>

                                    </form>
                                    <form method="post" action="<?php echo base_url()?>Admin_Home/insert_section_six" enctype="multipart/form-data">
                                        <h1><label>Resturant Content And More</label></h1>
                                        <?php if ($show_sectionsix_content == Null){ ?>

                                                <label>Section six Big</label>
                                                <input type="text" name="ssixbig">
                                                <label>Section six Small</label>
                                                <input type="text" name="ssixsmall">
                                                <label>Section six box Image</label>
                                                <input type="file" name="ssiximage" >
                                                <label>Section six Inside box Big</label>
                                                <input type="text" name="sboxbig">
                                                <label>Section six Inside Box Small</label>
                                                <input type="text" name="sboxsmall">
                                                <label>Section six Inside Box details</label>
                                                <input type="text" name="sboxdetails">


                                            <input type="submit">
                                        <?php }else{

                                            foreach ($show_sectionsix_content as $s){
                                                ?>

                                                <label>Section six Big</label>
                                                <input type="text" name="ssixbig" value="<?php echo $s->big?>">
                                                <label>Section six Small</label>
                                                <input type="text" name="ssixsmall" value="<?php echo $s->small?>">
                                                <label>Section six Image</label>
                                                <input type="file" name="ssiximage" value="<?php echo $s->image?>">
                                                <label>Section six Inside box Big</label>
                                                <input type="text" name="sboxbig" value="<?php echo $s->submit_big?>">
                                                <label>Section six Inside Box Small</label>
                                                <input type="text" name="sboxsmall" value="<?php echo $s->submit_small?>">
                                                <label>Section six Inside Box details</label>
                                                <input type="text" name="sboxdetails" value="<?php echo $s->submit_details?>">



                                                <input type="submit">
                                                <?php
                                            }}
                                        ?>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                    </div>
                    <div class="footer-r white">&nbsp;</div>

                </div>
            </div>
        </div>

        
        
        <!-- Javascripts -->
        <script src="<?php echo base_url()?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<!--        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>-->
<!--        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>-->
<!--        <script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>-->
<!--        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>-->
<!--        <script src="assets/plugins/chart.js/chart.min.js"></script>-->
<!--        <script src="assets/plugins/flot/jquery.flot.min.js"></script>-->
<!--        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>-->
<!--        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>-->
<!--        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>-->
<!--        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>-->
<!--        <script src="assets/plugins/curvedlines/curvedLines.js"></script>-->
<!--        <script src="assets/plugins/peity/jquery.peity.min.js"></script>-->
        <script src="<?php echo base_url()?>assets/js/alpha.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/dashboard.js"></script>

<!--<script>-->
<!---->
<!--    if(confirm("Are you sure you want to delete this?"))-->
<!--    {-->
<!--        window.location="delectbarcode.php?id="-->
<!---->
<!--    }-->
<!--</script>-->

        <script>
        function deletedc(x1) {

        if(confirm("Are you sure you want to delete this?"))
        {
        btn2 = $(x1).data('panel-id');

        $.ajax({
        url:"delectbarcode.php",
        method:"POST",
        data:{id:btn2},
        dataType:"text",
        success:function(data){
        alert(data);
        window.location="admin_home.php"
        }
        });


        }
        }
        </script>
<script>

    $(function() {

        var pgurl = window.location.href.
        substr(window.location.href.lastIndexOf("/")+1);

        $(".sidebar-menu li").each(function(){

            if(pgurl==''){
                $(".sidebar-menu li:eq(1)").addClass("active");
            }else
            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')
                $(this).addClass("active");
        })
    });
</script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
    </body>
</html>

