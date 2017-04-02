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
        $('#summernote1').summernote();
    });
</script>

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
        <textarea class="form-control"  id="summernote1" name="details" value=" <?php echo $e->details?> "><?php echo$e->details ?></textarea>
        <!--<textarea class="form-control"  name="details" value=" <?php echo $e->details?> "><?php echo$e->details ?></textarea>-->
    </div>
    <input class="btn btn-success" type="submit">
</form>


<?php }?>



</body>
