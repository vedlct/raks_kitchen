<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    
    <?php include ('head.php') ?>
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
    </div>


    <!-- End Preload -->
    
    <!-- Header ================================================== -->
    <?php include ('menu.php') ?>
	<!-- End Header =============================================== -->

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

    <!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>About us</h1>
            <?php
            foreach ($aboutusSmall as $aussmall) {
            }
            ?>
            <p><?php echo $aussmall->small; ?></p>

        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="<?php echo base_url()?>Home">Home</a></li>
                <li><a href="<?php echo base_url()?>About">About</a></li>
                <li>Page active</li>
            </ul>

        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-4">
			<h3 class="nomargin_top">Some words about us</h3>
            <?php
            foreach ($aboutUsDetails as $aus) {
            }
            ?>
           <h3>
               <?php echo $aus->header; ?>
           </h3>


			<p>
                <?php echo $aus->details; ?>
            </p>

		</div>
		<div class="col-md-7 col-md-offset-1 text-right hidden-sm hidden-xs">
			<img src="img/devices.jpg" alt="" class="img-responsive">
		</div>
	</div><!-- End row -->

	<hr class="more_margin">
    <?php
    foreach ($aboutUsfeature as $ausf) {
    }
    ?>
    <div class="main_title">
            <h2 class="nomargin_top"><?php echo $ausf->big; ?></h2>
            <p>
                <?php echo $ausf->small ?>
            </p>

        <php }?>
        </div>


    <div class="row">
        <?php
    foreach ($aboutUsfeature as $ausf) {

    ?>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
			<div class="feature">
				<i class="<?php echo $ausf->box_icon ?>"></i>
				<h3><span><?php echo $ausf->box_header ?></span></h3>
				<p>
                    <?php echo $ausf->box_details ?></p>
			</div>
		</div>
    <?php } ?>
    </div><!-- End row -->


	<!--</div><!-- End row -->

</div><!-- End container -->

<div class="container-fluid">
	<div class="row">
        <?php
        foreach ($aboutUs as $ausdtls) {
        }
        ?>
        <div class="col-md-6 nopadding">
            <div class="features">
                <img src="<?php echo base_url() ?>img/<?php echo $ausdtls->image?>" style="height: 400px ; width: 800px" class="img-responsive">
                <!--<div class="features-img">
                </div>-->
            </div>
        </div>
        <div class="col-md-6 nopadding">
            <div class="features-content">
                <p>
                    <?php echo $ausdtls->details?>
				</p>

			</div>
		</div>
	</div>
</div><!-- End container-fluid  -->
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
				<form action="#" class="popup-form" id="myLogin">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <input type="text" name="username" class="form-control form-white" placeholder="Username">
                    <input type="password" name="password" class="form-control form-white" placeholder="Password">
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
    
     <!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

</body>
</html>