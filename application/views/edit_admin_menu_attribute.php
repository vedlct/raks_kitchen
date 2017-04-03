
<?php foreach ($this->data['edit'] as $e) {?>
    
<form role="form" method="post" action="<?php echo base_url()?>Admin_menu_attribute/edit_res/<?php echo$e->id?>" >

    <div class="form-group">
        <label>Item Name</label>
        <input class="form-control" type="text" name="Item_name" value="<?php echo$e->item_name?> ">
    </div>
    <div class="form-group">
        <label>Item attribute</label>
        <input class="form-control" type="text" name="textbox" value=" <?php echo$e->item_attribute?> ">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input class="form-control" type="text" name="Item_price" value=" <?php echo$e->price?> ">
    </div>
    <div class="form-group">
        <label>Serial</label>
        <input class="form-control" type="text" name="serial" value=" <?php echo$e->serial?> ">
    </div>
    <input class="btn btn-success" type="submit">
</form>
<?php } ?>