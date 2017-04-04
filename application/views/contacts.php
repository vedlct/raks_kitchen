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
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div><!-- End modal -->

    <!-- SubHeader =============================================== -->
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
             <h1>Contacts</h1>
                <?php
                foreach ($contacts as $contact) {
                }
                ?>
             <p><?php echo $contact->small ?></p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="<?php echo base_url()?>Home">Home</a></li>
                <li><a href="<?php echo base_url()?>Contact">Contact Us</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row" id="contacts">
    	<div class="col-md-6 col-sm-6">
        	<div class="box_style_2">
                <?php
                //$showData = $data;
                foreach ($info as $d){

                   // echo $d['details'];

                ?>
            	<h2 class="inner">Customer service</h2>
                <p class="add_bottom_30"><?php echo $d->details ?></p>
                <p><a href="tel://004542344599" class="phone"><i class="icon-phone-circled"></i><?php echo $d->phone?></a></p>
                <p class="nopadding"><a href="mailto:customercare@quickfood.com"><i class="icon-mail-3"></i><?php echo $d->email ?></a></p>
                <?php }?>
            </div>
    	</div>
        <div class="col-md-6 col-sm-6">
        	<div class="box_style_2">
                <?php
                foreach ($details as $dt){
                ?>
            	<h2 class="inner">Restaurant Support</h2>
                <p class="add_bottom_30"><?php echo $dt->details ?></p>
                <p><a href="tel://004542344599" class="phone"><i class="icon-phone-circled"></i><?php echo $dt->phone ?></a></p>
                <p class="nopadding"><a href="mailto:customercare@quickfood.com"><i class="icon-mail-3"></i><?php echo $dt->email ?></a></p>
                <?php }?>
            </div>
    	</div>
    </div><!-- End row -->
</div><!-- End container -->
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
				<form action="<?php echo base_url()?>Home/login" class="popup-form" id="myLogin">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <input type="text" name="username" class="form-control form-white" placeholder="Username">
                    <input type="password" name="password" class="form-control form-white" placeholder="Password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
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
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <button type="submit" class="btn btn-submit" name="confirmregistration">Register</button>
                </form>
            </div>
        </div>
    </div><!-- End Register modal -->
    

    
<!-- COMMON SCRIPTS -->
<script src="<?php echo base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>js/validate.js"></script>

</body>
</html>