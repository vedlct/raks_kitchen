
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>

    <?php include ('head.php') ?>
    <![endif]-->    <title>RAK - Quality Delivery or Take Away Food</title>


    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

</head>
<!-- Custom CSS -->


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
<!-- Header ================================================== -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="index.php" id="logo">
                    <img src="<?php echo base_url() ?>img/logo.png" width="190" height="23" alt="" data-retina="true" class="hidden-xs">
                    <img src="<?php echo base_url() ?>img/logo_mobile.png" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <!-- Header ================================================== -->
                <?php include ('menu.php') ?>
                <!-- End Header =============================================== -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
</header>
<!-- End Header =============================================== -->	<!-- End Header =============================================== -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
    <div id="subheader">
        <div id="sub_content">
            <div id="thumb"><img src="<?php echo base_url() ?>img/thumb_restaurant.jpg" alt=""></div>
            <div class="rating">
                <?php
                foreach ($rating_avg as $r){ $rating_avg = $r->rat;}
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
                 ( <small><a href="#0">98 reviews</a></small> )</div>
            <h1><?php foreach ($details_head as $s){?>
                    <?php echo $s->name ?>
                </h1>
            <div><input type="hidden" name="<?php echo $s->res_id ?>" id="res_id" value="<?php echo $s->res_id ?>" style="color: black"></div>
            <div><em><?php echo $s->type ?></em></div>
            <div><i class="icon_pin"></i> <?php echo $s->address ?> ,<?php echo $s->city ?>-<?php echo $s->postal_code ?> ,<?php echo $s->country ?>- <strong>Delivery charge:</strong> $10, free over $15.</div>
            <?php }?>
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

<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">

        <div class="col-md-4">
            <p>
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
            </p>
            <div class="box_style_2">
                <h4 class="nomargin_top">Opening time <i class="icon_clock_alt pull-right"></i></h4>
                <ul class="opening_list">
                    <?php foreach ($details as $e){?>
                        <?php echo $e->time ?>
                    <?php }?>
                </ul>
            </div>
            <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box_style_2">
                <h2 class="inner">Description</h2>

                <?php foreach ($details as $e){?>
                <?php //echo $e->description;
                    //echo $this->session->userdata['username'];?>
                    <?php }?>




                <div id="summary_review">
                    <div id="general_rating">
                        11 Reviews



                    </div>
                    <div class="rating">



                        <?php
                        if ($this->session->userdata('username') != null){
                        if ($res_rating == null){
                            ?>
                            <img src="<?php echo base_url()?>img/blank.png" id="imgA" class="img-responsive"  onclick="myfuncA()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgB" class="img-responsive"  onclick="myfuncB()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgC" class="img-responsive"  onclick="myfuncC()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgD" class="img-responsive"  onclick="myfuncD()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgE" class="img-responsive"  onclick="myfuncE()" width="60px" style="float: left">

                        <?php }
                        foreach ($res_rating as $r) {
                            $rating2 = $r->rating;

                            echo $rating2;
                            echo "<div style='color: black'><h3>Your Last Rating</h3></div>";

                        if ($rating2 == 1){?>
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgA" class="img-responsive"  onclick="myfuncA()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgB" class="img-responsive"  onclick="myfuncB()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgC" class="img-responsive"  onclick="myfuncC()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgD" class="img-responsive"  onclick="myfuncD()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgE" class="img-responsive"  onclick="myfuncE()" width="60px" style="float: left">
                        <?php } else if( $rating2 == 2) {?>
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgA" class="img-responsive"  onclick="myfuncA()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgB" class="img-responsive"  onclick="myfuncB()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgC" class="img-responsive"  onclick="myfuncC()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgD" class="img-responsive"  onclick="myfuncD()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgE" class="img-responsive"  onclick="myfuncE()" width="60px" style="float: left">


                        <?php } else if( $rating2 == 3) { ?>
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgA" class="img-responsive"  onclick="myfuncA()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgB" class="img-responsive"  onclick="myfuncB()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgC" class="img-responsive"  onclick="myfuncC()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgD" class="img-responsive"  onclick="myfuncD()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgE" class="img-responsive"  onclick="myfuncE()" width="60px" style="float: left">

                        <?php  } else if( $rating2 == 4) { ?>
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgA" class="img-responsive"  onclick="myfuncA()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgB" class="img-responsive"  onclick="myfuncB()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgC" class="img-responsive"  onclick="myfuncC()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgD" class="img-responsive"  onclick="myfuncD()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/blank.png" id="imgE" class="img-responsive"  onclick="myfuncE()" width="60px" style="float: left">

                        <?php    } else if( $rating2 == 5) { ?>
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgA" class="img-responsive"  onclick="myfuncA()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgB" class="img-responsive"  onclick="myfuncB()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgC" class="img-responsive"  onclick="myfuncC()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgD" class="img-responsive"  onclick="myfuncD()" width="60px" style="float: left">
                            <img src="<?php echo base_url()?>img/yellow.png" id="imgE" class="img-responsive"  onclick="myfuncE()" width="60px" style="float: left">

                        <?php }} }else {}
                        ?>

                    </div>

                    <div class="row" id="rating_summary">


                    </div><!-- End row -->
                    <hr class="styled">
                    <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Leave a review</a>
                </div><!-- End summary_review -->



                    <?php foreach($comments as $c){  ?>

                <div class="review_strip_single">
                    <?php
                    $username=$c->username;
                    $query =$this->db->query(" select name from user WHERE `username`= '$username'");
                    foreach ($query->result() as $r ){$name=$r->name;}
                    ?>
                    <h4><?php echo $name ?> said</h4>
                    <p>
                         <?php echo $c->comment ?>
                        <small> at - <?php echo $c->Date ?>-</small>
                    </p>


                </div><!-- End review strip -->
                    <?php } ?>

                <!--
                <div class="review_strip_single">
                    <img src="<?php echo base_url() ?>img/avatar3.jpg" alt="" class="img-circle">
                    <small> - 25 March 2015 -</small>
                    <h4>Markus Schulz</h4>
                    <p>
                        "At sed dico invenire facilisis, sed option sapientem iudicabit ad, sea idque doming vituperatoribus at. Duo ut inani tantas scaevola. Commodo oblique at cum. Duo id vide delectus. Vel et doctus laoreet minimum, ei feugait pertinacia usu.
                    </p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            </div>
                            Food Quality
                        </div>
                        <div class="col-md-3">
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            </div>
                            Price
                        </div>
                        <div class="col-md-3">
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                            </div>
                            Punctuality
                        </div>
                        <div class="col-md-3">
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                            </div>
                            Courtesy
                        </div>
                    </div><!-- End row
                </div><!-- End review strip -->



            </div><!-- End box_style_1 -->
        </div>
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
<!-- Footer ================================================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Secure payments with</h3>
                <p><img src="<?php echo base_url() ?>img/cards.png" alt="" class="img-responsive"></p>

            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="faq.php">Faq</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#login_2">Admin Login</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                    <li><a href="#0">Terms and conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3"  id="newsletter">
                <h3>Newsletter</h3>
                <p>Join our newsletter to keep be informed about offers and news.</p>
                <div id="message-newsletter_2"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                    <div class="form-group">
                        <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                    </div>
                    <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                </form>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-instagram"></i></a></li>
                        <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© <b>R A K</b> - 2017</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer>
<!-- End Footer =============================================== --><!-- End Footer =============================================== -->

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

<!-- Register modal -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>

            <form method="post" action="<?php echo base_url() ?>Admin_Res_Details/insert_comment/" name="review" id="review" class="popup-form">
                <div class="login_icon"><i class="icon_comment_alt"></i></div>
                <?php foreach ($res_details as $e){?>

                <input name="restaurant_name" id="restaurant_name" type="hidden" value="Mexican Taco Mex">
                <input name="re_id" id="re_id" type="hidden" value="<?php echo $e->res_id ?>" style="color: black">

                <?php }?>


                <textarea name="review_text" id="review_text" class="form-control form-white" style="height:100px" placeholder="write review" ></textarea>
                <input type="text" name="verify_review" id="verify_review" class="form-control form-white" placeholder="Are you human? 3 + 1 =">
                <input type="submit" value="Submit" class="btn btn-submit" id="submit-review">
            </form>
            <div id="message-review"></div>
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
<script src="<?php echo base_url()?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>

<script src="<?php echo base_url()?>js/map_single.js"></script>
<script src="<?php echo base_url()?>js/infobox.js"></script>

<script src="<?php echo base_url()?>js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function( $ ) {
        $( '#Img_carousel' ).sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>

    var count =0;
    var res_id = document.getElementById("res_id").value;

    $("document").ready(function () {
        $("#imgA").mouseover(function () {
            this.src = "<?php echo base_url()?>img/yellow.png"
        }).mouseout(function () {
            if (count = 1) {
            } else
                this.src = "<?php echo base_url()?>img/blank.png"
        });

        $("#imgB").mouseover(function () {
            this.src = "<?php echo base_url()?>img/yellow.png";
            document.getElementById("imgA").src = "<?php echo base_url()?>img/yellow.png";
        }).mouseout(function () {

            this.src = "<?php echo base_url()?>img/blank.png"
            document.getElementById("imgA").src = "<?php echo base_url()?>img/blank.png";
        });

        $("#imgC").mouseover(function () {
            this.src = "<?php echo base_url()?>img/yellow.png"
            document.getElementById("imgB").src = "<?php echo base_url()?>img/yellow.png";
            document.getElementById("imgA").src = "<?php echo base_url()?>img/yellow.png";
        }).mouseout(function () {

            this.src = "<?php echo base_url()?>img/blank.png"
            document.getElementById("imgB").src = "<?php echo base_url()?>img/blank.png";
            document.getElementById("imgA").src = "<?php echo base_url()?>img/blank.png";
        });

        $("#imgD").mouseover(function () {
            this.src = "<?php echo base_url()?>img/yellow.png"
            document.getElementById("imgC").src = "<?php echo base_url()?>img/yellow.png";
            document.getElementById("imgB").src = "<?php echo base_url()?>img/yellow.png";
            document.getElementById("imgA").src = "<?php echo base_url()?>img/yellow.png";

        }).mouseout(function () {

            this.src = "<?php echo base_url()?>img/blank.png"
            document.getElementById("imgC").src = "<?php echo base_url()?>img/blank.png";
            document.getElementById("imgB").src = "<?php echo base_url()?>img/blank.png";
            document.getElementById("imgA").src = "<?php echo base_url()?>img/blank.png";

        });

        $("#imgE").mouseover(function () {
            this.src = "<?php echo base_url()?>img/yellow.png"
            document.getElementById("imgD").src = "<?php echo base_url()?>img/yellow.png";
            document.getElementById("imgC").src = "<?php echo base_url()?>img/yellow.png";
            document.getElementById("imgB").src = "<?php echo base_url()?>img/yellow.png";
            document.getElementById("imgA").src = "<?php echo base_url()?>img/yellow.png";

        }).mouseout(function () {

            this.src = "<?php echo base_url()?>img/blank.png"
            document.getElementById("imgD").src = "<?php echo base_url()?>img/blank.png";
            document.getElementById("imgC").src = "<?php echo base_url()?>img/blank.png";
            document.getElementById("imgB").src = "<?php echo base_url()?>img/blank.png";
            document.getElementById("imgA").src = "<?php echo base_url()?>img/blank.png";

        });

    });



    function myfuncA() {
        count =1;

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count,
            data:{'rating':count,'r_id':res_id},
            cache: false,
            success:function(data)
            {
                alert("You have successfully gave rating rating 1");
            }

        });


    }
    function myfuncB() {
        count =2;



        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count,
            data:{'rating':count,'r_id':res_id},
            cache: false,
            success:function(data)
            {
                alert("You have successfully gave rating rating 2");
            }

        });

    }
    function myfuncC() {
        count =3;

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count,
            data:{'rating':count,'r_id':res_id},
            cache: false,
            success:function(data)
            {
                //$('#myReview').html(data);
                alert("You have successfully gave rating rating 3");
            }

        });

    }
    function myfuncD() {
        count =4;

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count,
            data:{'rating':count,'r_id':res_id},
            cache: false,
            success:function(data)
            {
                //alert(data);
                alert("You have successfully gave rating rating 4");
            }

        });

    }
    function myfuncE() {
        count =5;



        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count,
            data:{'rating':count,'r_id':res_id},
            cache: false,
            success:function(data)
            {
                alert("You have successfully gave rating rating 5");
            }

        });


    }
</script>
</body>
</html>