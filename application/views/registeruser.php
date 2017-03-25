

<form action="<?php echo base_url()?>Registration/confirm"  method="post" id="myform" name="myform">
    <input type="text"  name="Name" value="<?php echo $this->session->userdata('name')?>">
    <input type="text" class="form-control form-white" placeholder="Email"name="Email" value="<?php echo $this->session->userdata('reg_id')?>">

    <input type="text" class="form-control form-white" placeholder="Email"name="Email" value="<?php echo $this->session->userdata('email')?>">
    <input type="text" class="form-control form-white" placeholder="UserName"name="UserName" value="<?php echo $this->session->userdata('username')?>">
    <input type="text" class="form-control form-white" placeholder="Password"  id="password1"name="password1"value="<?php echo $this->session->userdata('password')?>">


<!--    <button type="submit" class="btn btn-submit" name="confirmregistration">Register</button>-->

    <a href="#" onclick="document.myform.submit();"><?php echo base_url()?></a>
</form>







