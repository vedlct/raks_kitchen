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
    <img src="<?php echo base_url()?>img/video_fix.png" alt="" class="header-video--media" data-video-src="<?php echo  base_url()?>video/intro" data-teaser-source="<?php echo  base_url()?>video/intro" data-provider="Vimeo" data-video-width="1920" data-video-height="960">
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
    <video autoplay loop muted id="teaser-video" class="teaser-video"><source src="<?php echo base_url()?>video/intro.mp4" type="video/mp4"><source src="<?php echo base_url()?>video/intro.ogv" type="video/ogg"></video>
    <iframe id="video" src="<?php echo base_url()?>video/intro.mp4" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
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
                <a href="<?php echo base_url()?>Item_Menu/show_menu/<?php echo $res_id?>" class="strip_list">
                <div class="ribbon_1">Popular</div>
                    <div class="desc">
                        <div class="thumb_strip">
                            <img src="img/thumb_restaurant.jpg" alt="">
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

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="<?php echo base_url()?>Home/login" class="popup-form" id="myLogin" method="post">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Username" name="username" >
					<input type="password" class="form-control form-white" placeholder="Password" name="password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="<?php echo base_url()?>Registration" class="popup-form" id="myRegister" method="post">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Name" name="Name">

                    <input type="email" class="form-control form-white" placeholder="Email" name="Email">
                    <input type="text" class="form-control form-white" id="Username" placeholder="UserName" name="UserName" onclick="hidediv()" onfocusout="myFunc()">
                    <div style="display: none" id="alerttext"><span style="color: red"> UserName Already Taken</span></div>

                    <input type="text" class="form-control form-white" placeholder=" Your full address" name="full_address"  >
                    <input type="text" class="form-control form-white" placeholder=" Your phone number" name="phone_number"  >
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text"  name="city" class="form-control form-white" placeholder="Your city">

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text"  name="postal_code" class="form-control form-white" placeholder="Your postal code">

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text"  name="state" class="form-control form-white" placeholder="State">

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text"  name="country" class="form-control form-white" placeholder="Country">

                        </div>
                    </div>

                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1"name="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2"name="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit" name="confirmregistration">Register</button>
				</form>
			</div>
		</div>
	</div><!-- End Register modal -->

<!-- COMMON SCRIPTS -->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>-->
<script src="<?php echo base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>assets/validate.js"></script>

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
<script>
    function myFunc() {
        //alert("hello0");
       var x = document.getElementById("Username").value;




        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Registration/check_user/")?>'+x,
            data:{'id':x},
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