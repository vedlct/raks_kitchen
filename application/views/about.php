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
                        <a href="#" data-toggle="modal" data-target="#forgot_pass" onclick="forgot_pass()">Forgot Password?</a>
                    </div>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div><!-- End modal -->
    <!-- forgot pass modal -->
    <div class="modal fade" id="forgot_pass" tabindex="-1" role="dialog" aria-labelledby="forgot_password" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form action="<?php echo base_url()?>Home/forgot_pass" class="popup-form" id="forgot_pass" method="post">
                    <div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <label ><h3 style="color: white">Please Enter Your Email Address<h3></label>
                    <input type="email" class="form-control form-white" placeholder="Email" name="email">
                    <div class="text-left">
                    </div>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function forgot_pass() {
            document.getElementById("login_2").style.display = 'none';
        }
    </script>

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
            <div class="features img-responsive">
                <img src="<?php echo base_url() ?>img/<?php echo $ausdtls->image?>" style="height: 400px ; width: 1000px" class="img-responsive">
                <!--<div class="features-img">
                </div>-->
            </div>
        </div>
        <div class="col-md-6 nopadding">
            <div class="features-content embed-responsive" style="text-align: justify">
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
    

    
<!-- COMMON SCRIPTS-->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="js/validate.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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