<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin_head');?>

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
                       Faq Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3>Texual instruction for "FAQ" page</h3></div>
                    <div class="panel-body">

                        <div>
                            <p>
                                1. By clicking the "Add New" Button at the top of the Main Content You can add a new section in the FAQ page. <br/><br/>
                                2. IF you want to add a new section click the add new button.<br/>
                                    2.1. A pop up window will appear.<br/>
                                    2.2. In the Label "Header" add the head of the section you want.<br/>
                                    2.3. In the Label "Sub Header" add the sub head of the section you want.<br/>
                                    2.4. In the Label "Details" add the details of the section you want.<br/>
                                    2.5. Finally click the submit button to add your desired section.<br/><br/>
                                3. IF you want to edit on a existing section click the add Edit button on that section table.<br/>
                                    3.1. A pop up window will appear.<br/>
                                    3.2. In the Label "Header" your existing header will appear on the text field. Edit the desired part of the head of the section you want.<br/>
                                    3.3. In the Label "Sub Header" your existing sub header will appear on the text field. Edit the desired part of the sub header of the section you want.<br/>
                                    3.4. In the Label "Details" your existing details will appear on the text field. Edit the desired part of the details of the section you want.<br/>
                                    3.5. If you don't want to edit, simply close the pop up window.<br/>
                                    3.6. Finally click the submit button to change your desired section.<br/>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">
                            <div style="float: right;>
                                <a href="#"> <button class="btn btn-success" onclick="selectid2(this)">Add New</button></a><br><br>
                            </div>

                            <?php
                            foreach ($show_faq_content as $s){
                                $header = $s->header;?>
                                <h4 style="font-weight: bold"><?php echo $header;?></h4><?php
                                $query=$this->db->query("SELECT * FROM `faq` WHERE `header`= '$s->header'");
                                foreach ($query->result() as $q){?>
                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th style="width: 150px">Sub Header</th>
                                               <th>Details</th>
                                               <th style="width: 100px;">Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                           <tr>
                                               <td><?php echo $q->sub_header?></td>
                                               <td><?php echo $q->details?></td>
                                               <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?= $q->id ?>" onclick="selectid(this)">Edit</button></td>
                                           </tr>
                                       </tbody>
                                   </table>
                            <?php
                                }
                            }
                            ?>


                            <div id="myModal2" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content" style="padding: 35px; width: 50%; margin: 0 auto">
                                    <span class="close">×</span>



                                    <h2>Add Content</h2>
                                    <form role="form" method="post" action="<?php echo base_url()?>Admin_Faq/insert_faq" >
                                    <div class="form-group">
                                        <label>Header</label>
                                        <input class="form-control" type="text" name="header">
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Header</label>
                                        <input class="form-control"type="text" name="sub_header">
                                    </div>
                                    <div class="form-group">
                                        <label>Details</label>
                                        <textarea class="form-control" id="summernote" name="details"></textarea>
                                        <!--<textarea class="form-control"  id="summernote" name="details" ></textarea>-->
                                    </div>
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        <input class="btn btn-success" type="submit">
                                    </form>

                                </div>

                            </div>


                            <div id="myModal3" class="modal" >

                                <!-- Modal content -->
                                <div class="modal-content"  style="padding: 35px; width: 50%; margin: 0 auto">
                                    <span class="close">×</span>



                                    <h2>Edit Content</h2>
                                    <div id="txtHint"></div>

                                </div>


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
    var modal3 = document.getElementById('myModal3');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[1];
    var span1 = document.getElementsByClassName("close")[0];


    // When the user clicks the button, open the modal
    // btn = $(x).data('panel-name');

    function selectid2(x) {
        modal2.style.display = "block";
    }

    function selectid(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_faq/showedit/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }


    span1.onclick = function() {
        modal2.style.display = "none";
    }
    /*
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
    */

    span.onclick = function() {
        modal3.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
        else if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }

</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>



</body>

</html>
