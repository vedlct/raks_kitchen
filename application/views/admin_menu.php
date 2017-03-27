<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

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

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                       Menu Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">


                            <form method="post" action="<?php echo base_url()?>Admin_menu/insert_menu_attr" >

                                <div class="form-group" id="dropdown-style">
                                    <!--<label>Restuarant</label>-->
                                    <?php foreach ($this->data['show_res_content'] as $s){?>
                                    <input class="form-control"type="hidden" id="name" name="name" value="<?php echo $s->name ?>" readonly>

                                    <?php }?>
                                </div>


                                <div class="form-group" id="dropdown-style">
                                    <label>Menu Type</label>

                                    <select class="form-control" name="type" id="type" onchange="selectid10(this)" >
                                        <option selected  >Menu Type</option>
                                        <?php

                                        foreach ($this->data['menutype'] as $e)
                                        {
                                            echo "<option value='" . $e->type . "'>" . $e->type . "</option>";
                                        }

                                        ?>
                                    </select>
                                    <input type="hidden" id="type_id" name="type_id" >
                                </div>
                                <div class="form-group">
                                    <label>Item name</label>
                                    <input class="form-control"type="text" id="Item_name" name="Item_name">
                                </div>
                                <div class="form-group">
                                    <label>Item description</label>
                                    <textarea class="form-control"  name="Item_description"></textarea><br/>
                                    <label>If you want to add some item click </label>
<!--                                    <button data-panel-id="" onclick="selectid2()">Edit</button>-->
                                    <input class="btn btn-success" type="button" name = 'add' value='Add'onclick="selectid2()">

                                </div>
                                <div id="showattr" class="form-group" style="display: none">
                                <div id='TextBoxesGroup' class="form-group">
                                    <div id="TextBoxDiv1" class="form-group">
                                        <label>Size/Extra #1 : </label><input class="form-control" type='textbox' id='textbox1' name="textbox[]" >
                                        <label>Price #1 : </label><input class="form-control" type='textbox' id='textimage1' name="textimage[]">
                                        <label>Serial #1 : </label><input class="form-control" type='textbox' id='textserial1' name="textserial[]">
                                    </div>
                                </div>
                                    <input type='button' value='Add Button' id='addButton'>
                                    <input type='button' value='Remove Button' id='removeButton'>
                                </div>
                                <div id = "Item_price" class="form-group">
                                    <label>Item Price</label>
                                    <input class="form-control"type="text" name="Item_price" >
                                </div>
                                <input class="btn btn-success" type="submit">
                            </form>

                            <div id="myModal5" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">×</span>

                                    <h2>Edit Content</h2>
                                    <form role="form" method="post" action="<?php echo base_url()?>/Admin_menu/insert_menu_type" >
                                        <div class="form-group" id="dropdown-style">
                                            <label>Restuarant</label>
                                                <select class="form-control"  name="name" id="name" onchange="selectid7()" >

                                                <option value="" selected disabled>Res Name</option>

                                                    <?php

                                                    foreach ($show_res_content as $s)
                                                    {
                                                        echo "<option value='" . $s->name . "'>" . $s->name . "</option>";
                                                    }

                                                    ?>
                                            </select>

                                        </div>
                                        <input type="hidden" id="res_id2" name="res_id">

                                        <div class="form-group">
                                            <label>Item type</label>
                                            <input class="form-control" type="text" id="itype" name="itype">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                    </form>
                                    <div id="txtHint"></div>

                                </div>


                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content Visual Instruction</h3></div>
                        <div class="panel-body">
                            <div style="margin-bottom: 10px">

                            </div>
                            <div>
                                <p>
                                    1. You can select any menu name from the "Menu Type" drop-down menu.<br/>
                                    2. Add the item name in the "Item Name" field.<br/>
                                    3. Add some description of the item in the description field.<br/>
                                    4. If you want to add some extra attribute to the item press "Add" button.<br/>
                                        4.1. Add the size of the item.<br/>
                                        4.2. Add the price of the item for the size.<br/>
                                        4.3. Add the serial number.<br/>
                                        4.4. If you want another attribute to add press "Add Button" in below.<br/>
                                        4.5. If you want to remove attribute press the "Remove Button".<br/>
                                    5. If you complete the form, then press the "submit" button to add the item in your menu.<br/>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script>


    // Get the modal
    // var modal = document.getElementById('myModal');
    var modal2 = document.getElementById('myModal2');

    var modal5 = document.getElementById('myModal5');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[1];


    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');

    function selectid2(x) {

        //var x = document.getElementById('Item_name').value;
        //document.getElementById('iname').value = x;

        document.getElementById('showattr').style.display = "block";
        document.getElementById('Item_price').style.display = "none";
        return false;

    }

    function selectid5(x) {


        modal5.style.display = "block";
        //btn1 = document.getElementById('addtype').value;






    }


    function selectid(x) {
        //modal3.style.display = "block";
         btn = document.getElementById('dst').value;
        //alert(btn);
        //btn = $(x).data('panel-id');

        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>/Admin_menu/insert_menu_type'+btn,
            data:{'rname':btn},
            cache: false,
            success:function(data)
            {
                $('#res_id').val(data)

            }

        });
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_menu/getres_idformenu/")?>'+btn,
            data:{'rname':btn},
            cache: false,
            success:function(data)
            {
                //$('#type').val(data)
                //$('#type').html(data)

                //alert(data);
                $('#type').html(data);
            }

        });



    }
    function selectid4(x) {
        //modal3.style.display = "block";
        btn1 = document.getElementById('name').value;
        //alert(btn1);
        //btn = $(x).data('panel-id');
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_menu/getres_id/")?>'+btn1,
            data:{'rname':btn1},
            cache: false,
            success:function(data)
            {
                $('#res_id2').val(data)
                //$('#itemtype').html(data)

                //alert(data);
                //$('#txtHint').html(data);
            }

        });

    }

    function selectid10(x) {

        btn = document.getElementById('type').value;
       // alert(btn);
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_menu/get_menu_type/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#type_id').val(data)
                //$('#itemtype').html(data)

                //alert(data);
                //$('#txtHint').html(data);
            }

        });



    }


    span.onclick = function() {
        modal2.style.display = "none";
    }
    span2.onclick = function() {
        modal5.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }



    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal5) {
            modal5.style.display = "none";
        }
    }

</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

<script type="text/javascript">

    $(document).ready(function(){

        var counter = 2;

        $("#addButton").click(function () {

            if(counter>10){
                alert("Only 10 textboxes allow");
                return false;
            }

            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'TextBoxDiv' + counter);


            newTextBoxDiv.after().html('<label>Size/Extra #'+ counter + ' : </label>' +
                '<input class="form-control" type="text" name="textbox[]' + counter +
                '" id="textbox' + counter + '" value="" >' + '<label>Price #'+ counter + ' : </label>' +
                '<input class="form-control" type="text" name="textimage[]' + counter +
                '" id="textimage' + counter + '" value="" >' + '<label>Serial #'+ counter + ' : </label>' +
                '<input class="form-control" type="text" name="textserial[]' + counter +
                '" id="textimage' + counter + '" value="" >'
            );



            newTextBoxDiv.appendTo("#TextBoxesGroup");



            counter++;
        });

        $("#removeButton").click(function () {
            if(counter==1){
                alert("No more textbox to remove");
                return false;
            }

            counter--;

            $("#TextBoxDiv" + counter).remove();

        });

        $("#getButtonValue").click(function () {

            var msg = '';
            for(i=1; i<counter; i++){
                msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val()+"\n Textimage #" + i + " : " + $('#textimage' + i).val();
            }
            alert(msg);
        });
    });
</script>
</body>

</html>
