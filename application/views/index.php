<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    
<!--    --><?php //include ('head.php') ?>
    <?php $this->load->view('head') ?>
    <title>RAK - Quality Delivery or Take Away Food</title>

</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
<!--    --><?php //include ('menu.php') ?>
    <?php $this->load->view('menu') ?>
	<!-- End Header =============================================== -->
    
    <!-- SubHeader =============================================== -->
    <section class="header-video">
    <div id="hero_video">
        <div id="sub_content">
            <?php
            foreach($head as $big ){?>
            <h1>
                <?php echo $big['big']; ?></h1>
            <p>

                   <?php echo $big['small']; ?>
            </p>
            <?php } ?>
        </div><!-- End sub_content -->
    </div>
    <img src="<?php echo base_url()?>img/video_fix.png" alt="" class="header-video--media" data-video-src="<?php echo  base_url()?>video/intro" data-teaser-source="<?php echo  base_url()?>video/intro" data-provider="html5" data-video-width="1920" data-video-height="960">
    <div id="count" class="hidden-xs">
        <ul>
            <?php
            foreach($head_res_ad_more as $res_ad_more ){?>
            <li> <?php echo $res_ad_more['resturant']; ?></li>
            <li>
                    <?php echo $res_ad_more['people_served']; ?> </li>
            <li>
                   <?php echo $res_ad_more['registered_user']; ?></li>
            <?php } ?>
        </ul>

    </div>
    <video data-provider="html5" autoplay loop muted id="teaser-video" class="teaser-video"><source src="<?php echo base_url()?>video/intro.mp4" type="video/mp4"><source src="<?php echo base_url()?>video/intro.ogv" type="video/ogg"><source src="<?php echo base_url()?>video/intro.webm" type="video/webm"></video>
    <iframe data-provider="html5" id="video" src="<?php echo base_url()?>video/intro.mp4" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
    </section><!-- End Header video -->
    <!-- End SubHeader ============================================ -->
    
   <!-- Content ================================================== -->

            
    <div class="white_bg">
    <div class="container margin_60">
        
        <div class="main_title">
            <h2 class="nomargin_top">Choose from Most Popular</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>
        
        <div class="row">

                <?php

                foreach ($most_popular as $mp) {

                    $res_id=$mp->res_id;
                    $query=$this->db->query("SELECT * FROM `menu` WHERE id = '$res_id'");
                    if ($query->result() == null) { } else {
                    foreach ($query->result() as $s){}
                    ?>
            <div class="col-md-6">
                <a href="<?php echo base_url()?>Item_Menu/show_menu/<?php echo $res_id?>#<?php echo $s->type_id ?>" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="<?php echo base_url()?>img/<?php echo $s->image?>" alt="item_image">
                        </div>
                        <div class="rating">
                            <?php
                            $query=$this->db->query("SELECT ROUND(AVG(`rating`)) as rat FROM `res_rating` WHERE res_id = '$res_id'");
                            foreach ($query->result() as $r){ $rating_avg = $r->rat;}
                            for ($i=1 ; $i<=$rating_avg; $i++ ) {
                            ?>
                            <i class="icon_star voted"></i>
                            <?php
                            }
                            for ($i=1 ; $i<=(5-$rating_avg); $i++ ) {
                                ?>
                                <i class="icon_star"></i></i>
                                <?php
                            }
                            ?>
                        </div>
                        <h3><?php echo $s->item_name ?></h3>
                        <div class="type">
                            <?php echo $s->item_type ?>
                        </div>


                    </div><!-- End desc-->
                </a>
            </div><!-- End strip_list-->
              <?php } }?>

          <!-- End col-md-6-->

        </div><!-- End row -->   
        
        </div><!-- End container -->
        </div><!-- End white_bg -->
        
       <div class="high_light">
      	<div class="container">

            <?php
            foreach($head_section_4 as $h_s_4 ){?>

      		<h3><?php echo $h_s_4['big']; ?></h3>
            <p><?php echo $h_s_4['small']; ?></p>
            <a href="<?php echo base_url()?>Restaurants">View all Food Items</a>
            <?php }?>
        </div><!-- End container -->
      </div><!-- End hight_light -->


    <?php
    foreach($head_section_5 as $h_s_5 ){?>
    <section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url()?>img/<?php echo $h_s_5['image']; ?>" data-natural-width="1200" data-natural-height="600">
    <div class="parallax-content" style=" background:url(<?php echo base_url()?>img/<?php echo $h_s_5['image']; ?>) fixed; background-size:cover">
        <div class="sub_content">
            <i class="icon_mug"></i>

            <h3><?php echo $h_s_5['big']; ?></h3>
            <p>
                <?php echo $h_s_5['small']; ?>
            </p>
            <?php }?>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End Content =============================================== -->

    
    <!-- Footer ================================================== -->
    <?php include ('footer.php') ?>
    <!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->


    <!-- login/register/forgot_pass ================================================== -->
    <?php include ('login_register_forgotpass.php') ?>
    <!-- login/register/forgot_pass ================================================== -->


<!-- COMMON SCRIPTS -->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>-->
<script src="<?php echo base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>js/validate.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- SPECIFIC SCRIPTS -->
<script src="<?php echo base_url()?>js/video_header.js"></script>

<!--    <script src="//code.jquery.com/jquery-1.12.4.js"></script>-->
<!--    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script>
$(document).ready(function() {
	'use strict';
   	  HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });

});
</script>
<script>
   function hidediv() {
       document.getElementById("alerttext").style.display= 'none'
   }
</script>
<script type="text/javascript">
    function myFunc() {
        //alert("hello0");
       var x = document.getElementById("Username").value;

      // var name = '<?php echo $this->security->get_csrf_token_name();?>'

//        var vaule= '<?php echo $this->security->get_csrf_hash();?>'

        $.ajaxSetup({
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        });

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Registration/check_user/")?>'+x,
            data:{'id':x },
            cache: false,
            success:function(data)
            {
              //  $('#txtHint').html(data);
                if (data == "duplicate"){

                    $("#Username" ).effect( "shake" );
                    $('#Username').css('border-color', 'red');
                    document.getElementById("alerttext").style.display= 'block'
                }
            }

        });
    }
</script>


</body>
</html>