<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>




<?php foreach ($this->data['edit'] as $e) {?>
<form  method="post" action="<?php echo base_url()?>Restaurant_menu/edit_res_menu/<?php echo $e->id?>" >

    <div class="form - group">
    <label>Item Type :</label>
    <?php echo$e->item_type ?>
    </div>
    <div class="form-group">
        <label>Item Name</label>
        <input class="form-control" type="text" name="Item_name" value=" <?php echo$e->item_name?> ">
    </div>
    <div class="form-group">
        <label>Item Description</label>

        <textarea class="form-control"  cols="150" rows="6" name="textbox" ><?php echo $e->item_description?></textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input class="form-control" type="text" name="Item_price" value=" <?php echo$e->item_price?> ">
    </div>

    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
    <input class="btn btn-success" type="submit">
</form>

<?php } ?>


</body>
