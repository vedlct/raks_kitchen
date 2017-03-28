<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>


    <!--star rating -->
    <link href="rating.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="rating.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->

</head>

<body>
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
        <input class= "form-control " type= "text" name= "boxdetails"value= "<?php echo $s->box_details ?> " >
    </div>


    <button type="submit" class= "btn btn-success"  >Submit</button>

    <?php } ?>


</form>
</body>