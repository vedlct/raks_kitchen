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
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
    <?php include ('menu.php') ?>
	<!-- End Header =============================================== -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Work with us</h1>
         <p>Qui debitis meliore ex, tollit debitis conclusionemque te eos.</p>
         <p></p>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->



<div class="container margin_60">
	 <div class="main_title margin_mobile">
            <h2 class="nomargin_top">Please submit the form below</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
        	<form method="post" action="<?php echo base_url()?>Submit_Restaurant_Request/submit_res" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Type</label>
									<input type="text" class="form-control" id="type" name="type" placeholder="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Address</label>
									<input type="text" id="address" name="address" class="form-control " placeholder="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Website</label>
									<input type="text" id="website" name="website" class="form-control" placeholder="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
                                   <input type="text" id="email" name="email" class="form-control" placeholder="">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
									<label>City</label>
                                   <input type="text" id="city" name="city" class="form-control" placeholder="">
								</div>
							</div>
						</div><!-- End row  -->
                        <div class="row">
							<div class="col-md-6">
								<div class="form-group">
                                	<label>State</label>
                                   <input type="text" id="state" name="state" class="form-control" placeholder="">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
                                	<label>Postal code</label>
                                   <input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="">
								</div>
							</div>
						</div><!-- End row  -->
                        <div class="row">
							<div class="col-md-6">
								<div class="form-group">
                                	<label>Country</label>
                                   <input type="text" class="form-control" placeholder=""  id="country" name="country">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
                                	<label>Time</label>
                                   <input type="text" class="form-control" placeholder=""  id="time" name="time">
								</div>
							</div>
						</div><!-- End row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>User name</label>
                                    <input type="text" class="form-control" placeholder=""  id="password2" name="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" placeholder=""  id="password" name="password">
                                </div>
                            </div>
                        </div><!-- End row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vat</label>
                                    <input type="text" class="form-control" placeholder=""  id="vat" name="vat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control" placeholder=""  id="status" name="status">
                                </div>
                            </div>
                        </div><!-- End row  -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control " placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Image </label>
                                <input class="form-control" type="file" name="res_image" id="res_image" value="res_image" >
                            </div>
                        </div>

                        <div id="pass-info" class="clearfix"></div>
                        <div class="row">
                        	<div class="col-md-6">
									<label><input name="mobile" type="checkbox" value="" class="icheck" checked>Accept <a href="#0">terms and conditions</a>.</label>
							</div>
                            </div><!-- End row  -->
                        <hr style="border-color:#ddd;">
                        <div class="text-center"><button class="btn_full_outline" type="submit">Submit</button></div>
					</form>
        </div><!-- End col  -->
    </div><!-- End row  -->
</div><!-- End container  -->
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
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
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
				<form action="#" class="popup-form" id="myRegister">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
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