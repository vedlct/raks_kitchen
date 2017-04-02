<!DOCTYPE html>
<html lang="en">

<head>



    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>





</head>

<body>




<?php foreach ($this->data['edit'] as $e) {?>
<form  method="post" action="<?php echo base_url()?>Restaurant_menu/edit_res_menu/<?php echo $e->id?>" >

    <div class="form - group">
    <label>Item Type</label>
    <input class="form - control" type="text" name="Item_type" value="<?php echo$e->item_type ?> ">
    </div>
    <div class="form-group">
        <label>Item Name</label>
        <input class="form-control" type="text" name="Item_name" value=" <?php echo$e->item_name?> ">
    </div>
    <div class="form-group">
        <label>Item Description</label>
        <!--<input class="form-control" type="text" name="textbox" value=" <?php echo$e->item_description?> ">-->
        <textarea class="form-control" id="summernote" type="text" name="textbox" ><?php echo $e->item_description?></textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input class="form-control" type="text" name="Item_price" value=" <?php echo$e->item_price?> ">
    </div>

    <input class="btn btn-success" type="submit">
</form>

<?php } ?>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

</body>
