<?php


foreach ($show_type as $s){?>




<table border="1">
    <h3> <?php echo $s->item_type;?></h3>
    <?php
    $res_id=$s->res_id;
    $item_type=$s->item_type;
    $query1=$this->db->query("SELECT * FROM `menu` WHERE `res_id`= '$res_id' AND item_type='$item_type'");
    ?>
    <tr>
        <td>item</td>
        <td>price</td>
        <td>order</td>
    </tr>

        <?php foreach ($query1->result() as $q) {?>
    <tr>
        <td><?php echo $q->item_name?></td>
        <td><?php echo $q->item_description?></td>
        <td><?php echo $q->item_price?></td>
    </tr>
        <?php } ?>

</table>

<?php

}
?>
