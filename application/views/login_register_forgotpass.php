<!-- Login modal -->
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="<?php echo base_url()?>Home/login" class="popup-form" id="myLogin" method="post">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <input type="text" class="form-control form-white" placeholder="Username" name="username" required >
                <input type="password" class="form-control form-white" placeholder="Password" name="password" required>
                <div class="text-left">
                    <a href="#" data-toggle="modal" data-target="#forgot_pass" onclick="forgot_pass()">Forgot Password?</a>
                </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <button type="submit" class="btn btn-submit" value="Submit">Submit</button>
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
                <input type="email" class="form-control form-white" placeholder="Email" name="email" required>
                <div class="text-left">
                </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <button type="submit" class="btn btn-submit" value="Submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    function forgot_pass() {
        document.getElementById("login_2").style.display = 'none';
    }
</script>




<!-- Register modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="<?php echo base_url()?>Registration" class="popup-form" id="myRegister" method="post">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <input type="text" class="form-control form-white" placeholder="Name" name="Name"required>

                <input type="email" class="form-control form-white" placeholder="Email" name="Email"required>
                <input type="text" class="form-control form-white" id="Username" placeholder="UserName" name="UserName" onclick="hidediv()" onfocusout="myFunc()" required>
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

                <input type="text" class="form-control form-white" placeholder="Password"  id="password1"name="password1"required>
                <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2"name="password2"required>
                <div id="pass-info" class="clearfix"></div>
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <button type="submit" class="btn btn-submit" value="Submit" name="confirmregistration">Register</button>
            </form>
        </div>
    </div>
</div><!-- End Register modal -->