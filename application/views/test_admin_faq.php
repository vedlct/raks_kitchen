<?php foreach ($this->data['edit'] as $e) {?>

<form role="form" method="post" action="<?php base_url()?>Admin_Faq/editcontent/<?php echo $e->id ?>" >
    <div class="form-group">
        <label>Header</label>
        <input class="form-control" type="text" name="header" value=" <?php echo $e->header ?> ">
    </div>
    <div class="form-group">
        <label>Sub Header</label>
        <input class="form-control"type="text" name="sub_header" value=" <?php echo $e->sub_header ?> ">
    </div>
    <div class="form-group">
        <label>Details</label>
        <textarea class="form-control"  name="details" value=" <?php echo $e->details?> "><?php echo$e->details ?></textarea>
    </div>
    <input class="btn btn-success" type="submit">
</form>


<?php }?>