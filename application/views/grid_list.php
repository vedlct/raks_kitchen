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

<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo base_url()?>img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">




    <div id="subheader">
        <div id="sub_content">
            <div id="thumb"><img src="<?php echo base_url()?>img/thumb_restaurant.jpg" alt=""></div>
            <h1>Choose Your Desired Food Type</h1>
            <div><i class="icon_zoom-in_alt"></i> &nbsp;We have over 125 food items of different categories for you</div>
        </div><!-- End sub_content -->

    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="<?php echo base_url()?>Home">Home</a></li>

            <li><a href="<?php echo base_url()?>Restaurants">RAK's Dishes</a></li>

            <li>Page active</li>
        </ul>

    </div>
</div><!-- Position -->

<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->


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

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">

        <div class="col-md-12">

            <div id="tools">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="styled-select">
                            <select name="sort_rating" id="sort_rating">
                                <option value="" selected>Sort by ranking</option>
                                <option value="lower">Lowest ranking</option>
                                <option value="higher">Highest ranking</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 hidden-xs">
                        <a href="#" class="bt_filters"><i class="icon-list"></i></a>
                    </div>
                </div>
            </div><!--End tools -->
            <div class="row">
                <?php foreach ($show_item_type as $s) { ?>
                    <div class="col-md-4 col-sm-4 wow zoomIn dish_type" data-wow-delay="0.1s" style="height: 360px">
                        <a class="strip_list grid" href="<?php echo base_url()?>Item_Menu/show_menu/<?php echo $s->id?>#<?php echo $s->id?>">
                            <!--                        <div class="ribbon_1">Popular</div>-->
                            <div class="desc">
                                <div class="thumb_strip">
                                    <div id="thumb"><img src="<?php echo base_url() ?>img/<?php echo $s->image?>" alt=""></div>
                                </div>
                                <div class="rating">
                                    <?php
                                    //$res_id=$s->res_id;
                                    $query=$this->db->query("SELECT ROUND(AVG(`rating`)) as rat FROM `res_rating` ");
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
                                <h3><?php echo $s->type ?></h3>
                                <div class="type">
                                    <?php echo $s->details ?>
                                </div>
                                <!--                            <div class="location">-->
                                <!--                                --><?php //echo $s->address ?><!--. <br><span class="opening">Opens at 17:00.</span>-->
                                <!--                                Minimum order: $15-->
                                <!--                            </div>-->
                                <!--                            <ul>-->
                                <!--                                <li>Take away<i class="icon_check_alt2 ok"></i></li>-->
                                <!--                                <li>Delivery<i class="icon_check_alt2 ok"></i></li>-->
                                <!--                            </ul>-->
                            </div>
                        </a><!-- End strip_list-->
                    </div><!-- End col-md-6-->
                    <!-- End col-md-6-->
                    <!-- End row-->
                    <?php
                }
                ?>
            </div>
            <!-- End row-->
            <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Load more...</a>
        </div><!-- End col-md-9-->

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
<script src="<?php echo base_url()?>assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<!--<script  src="--><?php //echo base_url()?><!--js/cat_nav_mobile.js"></script>-->
<!--<script>$('#cat_nav').mobileMenu();</script>-->
<!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>-->
<!--<script src="--><?php //echo base_url()?><!--js/map.js"></script>-->
<!--<script src="--><?php //echo base_url()?><!--js/infobox.js"></script>-->
<!--<script src="--><?php //echo base_url()?><!--js/ion.rangeSlider.js"></script>-->

<!--<script>-->
<!---->
<!--    $(function () {-->
<!--        'use strict';-->
<!--        $("#range").ionRangeSlider({-->
<!--            hide_min_max: true,-->
<!--            keyboard: true,-->
<!--            min: 0,-->
<!--            max: 15,-->
<!--            from: 0,-->
<!--            to:5,-->
<!--            type: 'double',-->
<!--            step: 1,-->
<!--            prefix: "Km ",-->
<!--            grid: true-->
<!--        });-->
<!--    });-->
<!--</script>-->

<script>
    function selectid(x) {
        btn = $(x).data('panel-id');
        // alert(btn);
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Restaurants/show_restuarant_by_type/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                alert(data);
                // $('#txtHint').html(data);
            }
        });
    }
</script>
</body>
</html>