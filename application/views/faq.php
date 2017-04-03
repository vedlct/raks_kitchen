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
<section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
            <h1>Frequently asked questions</h1>
            <p>Qui debitis meliore ex, tollit debitis conclusionemque te eos.</p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="<?php echo base_url()?>Home">Home</a></li>
            <li><a href="<?php echo base_url()?>Faq">FAQ</a></li>
            <li>Page active</li>
        </ul>
    </div>
</div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">

        <div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
                <div class="box_style_1" id="faq_box">
                    <ul id="cat_nav">
                        <?php
                        foreach ($show_faq as $s) {
                            ?>
                            <li><a href="#<?php echo $s->id?>" class="active"><?php echo $s->header?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- End box_style_1 -->
            </div><!-- End theiaStickySidebar -->
        </div><!-- End col-md-3 -->

        <div class="col-md-9">
            <?php foreach ($show_faq as $s) {?>
            <h3 class="nomargin_top"><?php echo $s->header?></h3>

                <?php $query=$this->db->query("select * from `faq` WHERE `header`= '$s->header'");
                 foreach ($query->result() as $r){
                ?>

                 <div class="panel-group" id="<?php echo $s->id?>">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#<?php echo $s->id?>"
                                   href="#<?php echo $r->id?>"><?php echo $r->sub_header?><i class="indicator icon_plus_alt2 pull-right"></i></a>
                            </h4>
                        </div>
                        <div id="<?php echo $r->id?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $r->details?>
                            </div>
                        </div>
                    </div>
                </div><!-- End panel-group -->

                <?php
            } }
            ?>


        </div><!-- End col-md-9 -->
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
            <form action="#" class="popup-form" id="myLogin">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <input type="text" class="form-control form-white" placeholder="Username">
                <input type="text" class="form-control form-white" placeholder="Password">
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
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
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
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
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

 SPECIFIC SCRIPTS
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>
<script>
    $('#faq_box a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 120
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
</script>

</body>
</html>