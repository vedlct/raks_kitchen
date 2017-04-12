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



    <!-- login/register/forgot_pass ================================================== -->
    <?php include ('login_register_forgotpass.php') ?>
    <!-- login/register/forgot_pass ================================================== -->
    

    
<!-- COMMON SCRIPTS -->
<script src="<?php echo base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>js/validate.js"></script>
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