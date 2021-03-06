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
<!---->
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
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url()?>img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
    <div id="subheader">
        <div id="sub_content">
            <?php foreach ($this->data['details_head'] as $s){?>
                <div id="thumb"><img src="<?php echo base_url()?>img/<?php echo $s->Image ?>" alt="Resturant Image" ></div>
            <?php } ?>
            <div class="rating">

                <?php $query5 =$this->db->query(" select `id` from `restaurant` ");
                foreach ($query5->result() as $v ){$id1=$v->id;}
                ?>

                <small><a href="<?php echo base_url()?>Restaurants/showdetails/<?php echo $id1?>">Resturant reviews</a></small>
                </div>
            <h1><?php foreach ($this->data['details_head'] as $s){?>
                <?php echo $s->name ?>
            </h1>
            <div><input type="hidden" name="<?php echo $s->id ?>" id="res_id" value="<?php echo $s->id ?>" style="color: black"></div>
            <div><em><?php echo $s->type ?></em></div>
            <div><i class="icon_pin"></i> <?php echo $s->address ?> ,<?php echo $s->city ?>-<?php echo $s->postal_code ?> ,<?php echo $s->country ?>- <strong>Delivery charge:</strong> $10, free over $15.</div>
        <?php }?>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<?php $segment= $this->uri->segment(3);
    $this->session->set_userdata('page_id', $segment); ?>

<div id="position">
    <div class="container">
        <ul>
            <li><a href="<?php echo base_url()?>Home">Home</a></li>
            <li><a href="<?php echo base_url()?>Restaurants">RAK's Dishes</a></li>
            <li><a href="<?php echo base_url()?>Item_Menu/show_menu/9">Item Menu</a></li>
            <li>Page active</li>
        </ul>

    </div>
</div><!-- Position -->

<!-- Content ================================================== -->
<div class="container-fluid margin_60_35">
    <div class="row">

        <div class="col-md-1"></div>
        <div class="col-md-2">
            <p><a href="list_page.php" class="btn_side">Back to search</a></p>
            <div class="box_style_1">
                <ul id="cat_nav">
                    <?php foreach ($show_item_type as $s){?>
                        <li><a href="#<?php echo $s->id?>" class="active"><?php echo $s->type?></a></li>
                    <?php } ?>
                </ul>
            </div><!-- End box_style_1 -->

            <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </div><!-- End col-md-3 -->




        <div class="col-md-5">
            <div class="box_style_2" id="main_menu">
                <h2 class="inner">Menu</h2>

                <?php

                foreach ($show_item_type as $s){
                ?>
                    <table class="table table-striped cart-list">
                <h3 class="nomargin_top" id="<?php echo $s->id?>"><?php echo $s->type?></h3>
                <p>
                    <?php echo $s->details?>
                </p>

                    <thead>
                    <tr>
                        <th>
                            Item
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Order
                        </th>
                    </tr>
                    </thead>
                    <?php
                   // $res_id=$s->res_id;
                   $item_type=$s->type;
                  //  $item_name=$s->item_name;
                    $query1=$this->db->query("SELECT * FROM `menu` WHERE `item_type` ='$item_type'");
                    $counter=0;
                     foreach ($query1->result() as $q) {
                         $item_name=$q->item_name;

                         $string = preg_replace('/[^a-zA-Z0-9-]/', '', $item_name);
                         ?>

                         <tr>
                             <td>

                                 <figure class="thumb_menu_list"><img src="<?php echo base_url() ?>img/<?php echo $q->image ?>"
                                                                      alt="thumb"></figure>
                                 <h5><?php echo $q->item_name?></h5>
                                 <p>
                                     <?php echo $q->item_description?>
                                 </p>
                               <?php
                                 $type_id=$q->id;
                                 $query4=$this->db->query("SELECT COUNT(`username`) as review , ROUND(AVG(`rating`)) as rat FROM `res_rating` WHERE res_id = '$type_id'");

                                 foreach ($query4->result() as $r){ $rating_avg = $r->rat; $review = $r->review;} ?>

                                 <div style="margin-bottom: 30px" >

                                     <?php
                                     switch ($rating_avg) {
                                         case 1:
                                             ?>
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgA<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncA(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgB<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"  onclick="myfuncB(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgC<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"onclick="myfuncC(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgD<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncD(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgE<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncE(this)" width="20px" style="float: left">
                                            (<?php echo $review." reviews"?>)
                                            <?php
                                             break;
                                         case 2:
                                             ?>
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgA<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncA(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgB<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"  onclick="myfuncB(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgC<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"onclick="myfuncC(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgD<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncD(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgE<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncE(this)" width="20px" style="float: left">
                                             (<?php echo $review." reviews"?>)
                                             <?php
                                             break;
                                         case 3:
                                             ?>
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgA<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncA(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgB<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"  onclick="myfuncB(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgC<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"onclick="myfuncC(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgD<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncD(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgE<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncE(this)" width="20px" style="float: left">
                                             (<?php echo $review." reviews"?>)
                                             <?php
                                             break;
                                         case 4:
                                             ?>
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgA<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncA(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgB<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"  onclick="myfuncB(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgC<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"onclick="myfuncC(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgD<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncD(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgE<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncE(this)" width="20px" style="float: left">
                                             (<?php echo $review." reviews"?>)
                                             <?php
                                             break;
                                         case 5:
                                             ?>
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgA<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncA(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgB<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"  onclick="myfuncB(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgC<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"onclick="myfuncC(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgD<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncD(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/yellow.png" id="imgE<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncE(this)" width="20px" style="float: left">
                                             (<?php echo $review." reviews"?>)
                                             <?php
                                             break;
                                         default:
                                             ?>
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgA<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncA(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgB<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"  onclick="myfuncB(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgC<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>"onclick="myfuncC(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgD<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncD(this)" width="20px" style="float: left">
                                             <img src="<?php echo base_url()?>img/blank.png" id="imgE<?= $q->id ?>" class="img-responsive" data-panel-id="<?= $q->id ?>" onclick="myfuncE(this)" width="20px" style="float: left">
                                             (<?php echo $review." reviews"?>)
                                             <?php

                                     }

                                     ?>


                                 </div>

<!--                            <input name="item_id" id="item_id" type="text" value="--><?php //echo $q->id ?><!--" style="color: black">-->


                             </td>
                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
                         <script type="text/javascript">


//                             var x = '<?//= $q->id ?>//';
//
//                             imgA = ("imgA" + x).toString();
//                             imgB = ("imgB" + x).toString();
//                             imgC = ("imgC" + x).toString();
//                             imgD = ("imgD" + x).toString();
//                             imgE = ("imgE" + x).toString();

                            $("document").ready(function () {

                                $("#imgA<?= $q->id ?>").mouseover(function () {
                                    this.src = "<?php echo base_url()?>img/yellow.png"
                                }).mouseout(function () {
                                    if (count = 1) {
                                    } else
                                        this.src = "<?php echo base_url()?>img/blank.png"
                                });

                                $("#imgB<?= $q->id ?>").mouseover(function () {
                                    this.src = "<?php echo base_url()?>img/yellow.png";
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                }).mouseout(function () {

                                    this.src = "<?php echo base_url()?>img/blank.png"
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                });

                                $("#imgC<?= $q->id ?>").mouseover(function () {
                                    this.src = "<?php echo base_url()?>img/yellow.png"
                                    document.getElementById("imgB<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                }).mouseout(function () {

                                    this.src = "<?php echo base_url()?>img/blank.png"
                                    document.getElementById("imgB<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                });

                                $("#imgD<?= $q->id ?>").mouseover(function () {
                                    this.src = "<?php echo base_url()?>img/yellow.png"
                                    document.getElementById("imgC<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                    document.getElementById("imgB<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";

                                }).mouseout(function () {

                                    this.src = "<?php echo base_url()?>img/blank.png"
                                    document.getElementById("imgC<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                    document.getElementById("imgB<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";

                                });

                                $("#imgE<?= $q->id ?>").mouseover(function () {
                                    this.src = "<?php echo base_url()?>img/yellow.png"
                                    document.getElementById("imgD<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                    document.getElementById("imgC<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                    document.getElementById("imgB<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/yellow.png";

                                }).mouseout(function () {

                                    this.src = "<?php echo base_url()?>img/blank.png"
                                    document.getElementById("imgD<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                    document.getElementById("imgC<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                    document.getElementById("imgB<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";
                                    document.getElementById("imgA<?= $q->id ?>").src = "<?php echo base_url()?>img/blank.png";

                                });

                            });
                        </script>
                         <td>
                                 <strong><?php
                                     if ($q->item_price == null){

                                         //$item_name = addslashes(addslashes($item_name));
                                        // echo $string;
                                         $query3=$this->db->query("SELECT * FROM `menu_attribute` WHERE  `item_name` = '$string'  LIMIT 1");
                                        // $this->db->where('item_name', $item_name);
                                         //$query3 = $this->db->get('menu_attribute');
                                        // print_r($query3);


                                         foreach ($query3->result() as $s) { echo $s->price;}
                                     }
                                     echo $q->item_price?></strong>
                             </td>
                             <td class="options">
                                 <div class="dropdown dropdown-options">
                                    </a>
                                     <?php

                                     //$res_id=$s->res_id;
                                     $item_name=$q->item_name;

                                     $id=$q->id;
                                     $query2=$this->db->query("SELECT * FROM `menu_attribute` WHERE  item_name = '$string'");

                                     if ($query2->num_rows() < 1){ ?>
                                         <a href="#0"> <i class="icon_plus_alt2"  data-panel-id="<?= $id ?>" onclick="addcart(this)"></i></a>

                                     <?php } else {    ?>
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i
                                                 class="icon_plus_alt2"></i>
                                         <div class="dropdown-menu">
                                             <h5>Select an option</h5>
                                             <?php
                                             foreach ($query2->result() as $m) {
                                             ?>
                                             <label>
                                                 <input type="checkbox" id="check1" value="<?php echo $m->id?>" class="chk" name="options_1"><?php echo $m->item_attribute ?>
                                                 <span>+ <?php echo $m->price ?></span>
                                             </label>

                                             <?php } ?>
                                             <a href="#0" class="add_to_basket" onclick="myfunc()">Add to cart</a>
                                         </div>

                                 </div>

                             </td>

                         </tr>

                         <?php
                     }
                         $counter++;
                     }

                    ?>
                </table>
                    <hr>
                <?php

                } ?>
                <hr>
            </div><!-- End box_style_1 -->
        </div><!-- End col-md-6 -->

        <div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
                <div id="cart_box" >
                    <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>

                    <table id="cart_table" class="table table_summary">

                        <tbody>
                        <?php
                        $total = 0;
                        foreach ($this->cart->contents() as $c) {

                            ?>


                            <tr>

<!--                                    <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a>  <input type='button' value='-' class='qtyminus' field='--><?php //echo $c['id']?><!--' />-->
<!--                                    <input type='text' name='--><?php //echo $c['id']?><!--' value="--><?php //echo $c['qty']?><!--" class='qty' style="width: 20px" />-->
<!--                                    <input type='button' onclick="plus()" value='+' class='qtyplus' field='--><?php //echo $c['id']?><!--' /> --><?php //echo $c['name'];?>

                                <td>
                                    <input type="button"  class="btn btn-default" style="background:#ec008c; text-align: center; width:19px; color: #fff; font-weight: bold; padding:6px 0px;  border-radius:0px; float: left" data-panel-id="<?= $c['rowid'] ?>" onclick="minus(this)" value="-"/>
                                    <input type="text"  name="qty" id="<?php echo $c['rowid']?>" class="form-control" style="text-align: center; border-right:none; border-left:none; border-radius:0px; width: 20px; padding:6px 2px; height:auto; float: left" value="<?php echo $c['qty']?>"/>
                                        <input type="hidden" name="res_id" class="form-control"  value="<?php echo $c['id']?>"/>
                                        <input type="hidden" name="row_id" class="form-control"  value="<?php echo $c['rowid']?>"/>
                                        <input type="hidden" name="item_name" class="form-control"  value="<?php echo $c['name']?>"/>
                                        <input type="hidden" name="price" class="form-control"  value="<?php echo $c['price']*$c['qty'];?>"/>
                                    <input type="button" class="btn btn-default" data-panel-id="<?= $c['rowid'] ?>" onclick="plus(this)" style="background:#ec008c; font-weight: bold; color: #fff; text-align: center; border-radius:0px; width: 19px; padding: 6px 0px; float: left" value="+">
                                </td>

                                <td>
                                    <?php echo $c['name']?>
                                </td>

                                <td>
                                    <?php echo $c['options']['Size']?>
                                </td>
                                <td>
                                    <strong class="pull-right"><span id="update_price"><?php echo $c['subtotal'];?></span></strong>
                                </td>
                            </tr>
                            <?php
                            $total = $total+$c['subtotal'];

                        }
                        ?>
                        </tbody>
                    </table>

                    <hr>
                    <div class="row" id="options_2">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                            <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                            <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
                        </div>
                    </div><!-- Edn options 2 -->

                    <hr>
                    <table class="table table_summary" id="total_table">
                        <tbody>
                        <tr>
                            <td>

                                Subtotal <span class="pull-right"><?php echo $total ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Delivery fee <span class="pull-right"><?php echo $del_free=2?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="total">
                                TOTAL <span class="pull-right"><?php echo $total+$del_free?></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                    <hr>
                    <!--<a class="btn_full" href="cart.php">Order now</a>-->
                    <a class="btn_full" href="<?php echo base_url("Order/")?>">Order now</a>

                </div><!-- End cart_box -->
            </div><!-- End theiaStickySidebar -->
        </div><!-- End col-md-3 -->

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

<!--<!-- SPECIFIC SCRIPTS
<script  src="<?php echo base_url()?>js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>
<script src="<?php echo base_url()?>js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>-->
<script>
    $('#cat_nav a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 70
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
</script>
<script>

    $.ajaxSetup({
        data: {
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
        }
    });

    function addcart(x) {

        btn = $(x).data('panel-id');

      // alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Item_Menu/insert_cart_withoutattr/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
              //alert(data);
            }

        });

        $('#cart_table').load(document.URL +  ' #cart_table');
        $('#total_table').load(document.URL +  ' #total_table');

    }
</script>


<script>

    $.ajaxSetup({
        data: {
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
        }
    });

    function myfunc() {
        var chkArray = [];
        var i;
        /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
        $(".chk:checked").each(function () {
            chkArray.push($(this).val());
        });
        for (i = 0; i < chkArray.length; i++) {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("Item_Menu/inser_cart/")?>' + chkArray[i],
                data: {'id': chkArray[i]},
                cache: false,
                success: function (data) {
                     // $('#txt').html(data);
                    //alert(data);

                    }

            });
        //alert(chkArray[i]);
          // $("#cart_box").load(location.href + " #cart_box");
            //$("#cart_boxt").load('detail_page.php');
            $('#cart_table').load(document.URL +  ' #cart_table');
            $('#reload').load(document.URL +  ' #reload');
            $('#total_table').load(document.URL +  ' #total_table');


        }
        $("input:checkbox").attr('checked', false);


    }


</script>

<script>

    $.ajaxSetup({
        data: {
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
        }
    });

    function plus(x) {

        var btn = $(x).data('panel-id');
        var x = parseInt(document.getElementById(btn).value);
        var newx= x+1;

        document.getElementById(btn).value = newx;
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("Item_Menu/update_add_cart/")?>' + btn,
            data: {'id':btn, 'amount':newx },
            cache: false,
            success: function (data) {
                // $('#txt').html(data);


            }

        });

        $('#cart_table').load(document.URL +  ' #cart_table');
        $('#total_table').load(document.URL +  ' #total_table');
    }

    function minus(x) {

        var btn = $(x).data('panel-id');
        var x = parseInt(document.getElementById(btn).value);
        var newx= x-1;

        document.getElementById(btn).value = newx;

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("Item_Menu/update_add_cart/")?>' + btn,
            data: {'id':btn, 'amount':newx },
            cache: false,
            success: function (data) {
                // $('#txt').html(data);
                //  alert(data);

            }

        });
        $('#cart_table').load(document.URL +  ' #cart_table');
        $('#total_table').load(document.URL +  ' #total_table');
    }

</script>

<script type="text/javascript">

    $.ajaxSetup({
        data: {
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
        }
    });

    var count =0;
   // var item_id = document.getElementById("item_id").value;

    var x = '<?php echo $counter?>';
  //  alert(x);






    function myfuncA(x) {
        btn = $(x).data('panel-id');
        count =1;
        //alert(btn);
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+btn+count,
            data:{'rating':count,'r_id':btn},
            cache: false,
            success:function(data)
            {
                alert("You have successfully gave rating rating 1");
                location.reload();
                //alert(data);
            }

        });


    }
    function myfuncB(x) {
        count =2;
        btn = $(x).data('panel-id');

        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count+btn,
            data:{'rating':count,'r_id':btn},
            cache: false,
            success:function(data)
            {
                alert("You have successfully gave rating rating 2");
                location.reload();
            }

        });

    }
    function myfuncC(x) {
        count =3;
        btn = $(x).data('panel-id');
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count+btn,
            data:{'rating':count,'r_id':btn},
            cache: false,
            success:function(data)
            {
                //$('#myReview').html(data);
                alert("You have successfully gave rating rating 3");
                location.reload();
            }

        });

    }
    function myfuncD(x) {
        count =4;
        btn = $(x).data('panel-id');

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count+btn,
            data:{'rating':count,'r_id':btn},
            cache: false,
            success:function(data)
            {
               // alert(data);
                alert("You have successfully gave rating rating 4");
                location.reload();
            }

        });

    }
    function myfuncE(x) {
      
        count =5;

        btn = $(x).data('panel-id');
        //alert(btn);
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Res_Details/insert_rating/")?>'+count+btn,
            data:{'rating':count,'r_id':btn},
            cache: false,
            success:function(data)
            {
                alert("You have successfully gave rating rating 5");
                location.reload();
            }

        });


    }
</script>

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