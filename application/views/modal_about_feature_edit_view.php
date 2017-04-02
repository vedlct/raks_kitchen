<!DOCTYPE html>
<html lang="en">

<head>



    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>




</head>

<body>

<script>
    $(document).ready(function() {
        $('#summernote3').summernote();
    });
    function myfunc() {
        var x = document.getElementById("dst").value;
        document.getElementById("icon").className = x;
    }

</script>

<?php foreach ($this->data['about_us_feature_content'] as $s ){?>

<form method= "post"  action="<?php base_url()?>Admin_aboutus/update_about_us_feature_content/<?php echo $s->id?> ">

   <!-- <input class= "form-control " type= "text" name= "id " value= "<?php echo $s->id ?> ">-->

    <div class="form-group" >

        <label>Big</label>
        <input class= "form-control " type= "text" name= "big" value= "<?php echo $s->big ?> ">
    </div>

    <div class="form-group" >
        <label>Small</label>
        <input class= "form-control " type= "text" name= "small" value= "<?php echo $s->small ?>">
    </div>

    <div class="form-group" >
        <label>Box Header</label>

        <input class= "form-control " type= "text" name= "boxheader" value= "<?php echo $s->box_header ?> ">
    </div>

    <div class="form-group" >
        <label>Box details</label>
       <!-- <input class= "form-control " type= "text" name= "boxdetails"value= "<?php echo $s->box_details ?> " >-->
        <textarea class= "form-control "  id="summernote3" type= "text" name= "boxdetails" ><?php echo $s->box_details ?></textarea>
    </div>

    <div class="form-group" >
        <label>Icon</label>
        <!-- <input class= "form-control " type= "text" name= "boxdetails"value= "<?php echo $s->box_details ?> " >-->

        <select class="form-control"  name="icon" id="dst" onchange="myfunc()">

            <option value="<?php echo $s->box_icon ?>" selected disabled><?php echo $s->box_icon ?></option>

            <?php

            foreach ($icon as $i)
            {
                echo "<option  value='" . $i->icon_name . "'>" . $i->icon_name . "</option>";
            }

            ?>
        </select>
    </div>




    <button type="submit" class= "btn btn-success"  >Submit</button>



    <?php } ?>


</form>

</body>