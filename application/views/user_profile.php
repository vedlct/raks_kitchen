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
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo base_url()?>img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
            <h1>Your Profile</h1>
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

    </div>
</div><!-- Position -->



<div class="container margin_60">


    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <?php foreach ($this->data['profile'] as $p) {?>
                <form method = "post" action = "<?php echo base_url()?>Profile/update_user" enctype = "multipart/form-data" >



                <div class="row" >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group" >
                            <input type="hidden" name="id" value="<?php echo $p->id?>">
                            <label > Name</label >
                            <input type = "text" class="form-control" id = "name" name = "name" value="<?php echo $p->name ?>">
                        </div >
                    </div >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group" >
                            <label > Email </label >
                            <input type = "text" class="form-control" id = "email" name = "email" value="<?php echo $p->email; ?>" >
                        </div >
                    </div >
                </div >
                <div class="row" >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group" >
                            <label > Username</label >
                            <input type = "text" id = "address" name = "username" class="form-control "value="<?php echo $p->username ?>" readonly>
                        </div >
                    </div >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group" >
                            <label > Password</label >
                            <input type = "text" id = "website" name = "password" class="form-control" value="<?php echo $p->password ?>" >
                        </div >
                    </div >
                </div >
                <div class="row" >
                    <div class="col-md-6" >
                        <div class="form-group" >
                            <label > Address</label >
                            <input type = "text" id = "email" name = "address" class="form-control" value="<?php echo $p->full_address ?>" >
                        </div >
                    </div >
                    <div class="col-md-6" >
                        <div class="form-group" >
                            <label > City</label >
                            <input type = "text" id = "city" name = "city" class="form-control" value="<?php echo $p->city ?>" >
                        </div >
                    </div >
                </div ><!--End row-->
                <div class="row" >
                    <div class="col-md-6" >
                        <div class="form-group" >
                            <label > State</label >
                            <input type = "text" id = "state" name = "state" class="form-control" value="<?php echo $p->state ?>" >
                        </div >
                    </div >
                    <div class="col-md-6" >
                        <div class="form-group" >
                            <label > Postal code </label >
                            <input type = "text" id = "postcode" name = "postcode" class="form-control" value="<?php echo $p->postcode; ?>" >
                        </div >
                    </div >
                </div ><!--End row-->
                <div class="row" >
                    <div class="col-md-6" >
                        <div class="form-group" >
                            <label > Country</label >
                            <input type = "text" class="form-control"   id = "country" name = "country" value="<?php echo $p->country ?>" >
                        </div >
                    </div >


                <div id = "pass-info" class="clearfix" ></div >
                <div class="row" >
                    <div class="col-md-6" >
                        <label ><input name = "mobile" type = "checkbox" value = "" class="icheck" checked > Accept <a href = "#0" > terms and conditions </a >.</label >
                    </div >
                </div ><!--End row-->
                <hr style = "border-color:#ddd;" >

                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                <div class="text-center" ><button class="btn_full_outline" type = "submit" > Update</button ></div >
            </form >
           <?php } ?>
        </div>
        </div><!-- End col  -->
    </div><!-- End row  -->
</div><!-- End container  -->

<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
<?php include ('footer.php') ?>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->





<!-- COMMON SCRIPTS -->
<script src="<?php echo  base_url() ?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo  base_url() ?>js/common_scripts_min.js"></script>
<script src="<?php echo  base_url() ?>js/functions.js"></script>
<script src="<?php echo  base_url() ?>assets/validate.js"></script>

</body>
</html>