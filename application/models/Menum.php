<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menum extends CI_Model
{

    public function show_menu_type()
    {
        $query = $this->db->query("SELECT * FROM `menu_type`");
        return $query->result();
    }
    public function get_menu_type($id)
    {
        $query = $this->db->query("SELECT * FROM `menu_type` WHERE `type`= '$id'");
        return $query->result();
    }
    public function showadd($id){

        $query=$this->db->query("SELECT * FROM `menu_attribute` WHERE `id`= '$id'");
        return $query->result();

    }
    public function insert_menu_content(){
        $name = $this->input->post('name');
        $type  = $this->input->post('Item_type');
        $itemDescription = $this->input->post('Item_description');
        $price  = $this->input->post('Item_price');
        $item_name = $this->input->post('Item_name');

        $data = array(
            'res_name' => $name,
            'item_type' => $type,
            'item_name' => $item_name,
            'item_description' => $itemDescription,
            'item_price' => $price,

        );

        $this->db->insert('menu',$data);
    }

    public function insert_menu_attr(){
        //extract($_POST);

        $type_id = $this->input->post('type_id');
        $iname = $this->input->post('Item_name');
        $res_name = $this->input->post('name');
        $itype = $this->input->post('type');
        $idescription = $this->input->post('Item_description');
        // $iattribute = $this->input->post('textbox[]');
        $price  = $this->input->post('Item_price');
        $textbox = $this->input->post('textbox[]');
        $textimage = $this->input->post('textimage[]');

        $textserial= $this->input->post('textserial[]');

        if(array_filter($textbox)==null && array_filter($textimage) ==null) {
            $menudata = array(
                'type_id' => $type_id,
                'res_name' => $res_name,
                'item_type' => $itype,
                'item_name' => $iname,
                'item_description' => $idescription,
                'item_price' => $price,
            );
            $this->db->insert('menu', $menudata);
        }
        else{
            for($i = 0; $i<count($textbox);$i++) {
                $data = array(
                    'type_id' => $type_id,
                    'item_name' => $iname,
                    'item_attribute	' => $textbox[$i],
                    'price' => $textimage[$i],
                    'serial' => $textserial[$i]
                );
                /*$menudata = array(
                    'res_id' => $res_id,
                    'res_name' => $res_name,
                    'item_type' => $itype,
                    'item_name' => $iname,
                    'item_description' => $idescription,
                );*/
                //$this->db->insert('menu', $menudata);
                $this->db->insert('menu_attribute', $data);
            }
            $menudata = array(
                'type_id' => $type_id,
                'res_name' => $res_name,
                'item_type' => $itype,
                'item_name' => $iname,
                'item_description' => $idescription,
            );
            $this->db->insert('menu', $menudata);
        }

    }
    public function getres_id($rname){

        $query=$this->db->query("SELECT * FROM `restaurant` WHERE `name`= '$rname'");
        return $query->result();
    }
    public function showsearch($text){

        $this->db->select('*');
        $this->db->from('menu');
        $this->db->like('res_name',$text,'after');
        $query = $this->db->get();
        return $query->result();
    }

    public function showsearch_menu_attribute($text){


        $this->db->select('*');
        $this->db->from('menu_attribute');
        $this->db->like('item_name',$text,'after');
        $query = $this->db->get();
        return $query->result();
    }

    public function menuedit($id){

        $item_name = $this->input->post('item_name');

        $item_type = $this->input->post('item_type');
        $item_desc = $this->input->post('item_desc');
        $item_price = $this->input->post('item_price');

        $data = array(


            'item_type' => $item_type,
            'item_name' => $item_name,
            'item_description' => $item_desc,
            'item_price' => $item_price,

        );


        $this->db->where('res_id', $id);
        $this->db->update('menu', $data);





    }
    public function deletemenu($id){

       // $this->db->where('id', $id);
       // $this->db->delete('menu');
        //print_r($id);

        $this->db->query("DELETE FROM `menu` WHERE `id`= '$id'");
        //return $query->result();



    }
    public function getall($id){


        $query=$this->db->query("SELECT * FROM `menu` WHERE `id`= '$id'");
        return $query->result();

    }
    public function show_menu_item_content($id){

        $query=$this->db->query("SELECT * FROM `menu_type` WHERE `res_id`= '$id' GROUP  BY `type` ");
        return $query->result();


    }

    public function show_menu($type_id){
        $query=$this->db->query("SELECT * FROM `menu` WHERE `type_id`= '$type_id'");
        return $query->result();
    }
    public function get_id($tname)
    {
        $query=$this->db->query("SELECT * FROM `menu` WHERE `res_name`= '$tname'");
        return $query->result();
    }

    public function show_menu_additem_content($id){

        $query=$this->db->query("SELECT * FROM `menu` WHERE `id`= '$id'");
        return $query->result();


    }
    public function insert_menu_type(){

        $type= $this->input->post('type');
        $details = $this->input->post('details');

        $fileName = $_FILES["menu_type_image"]["name"];
        move_uploaded_file($_FILES["menu_type_image"]["tmp_name"], "img/" . $fileName);

        $data = array(
            'type' => $type,
            'details' => $details,
            'image' => $fileName,

        );

        $this->db->insert('menu_type',$data);
    }

    public function show_type($type_id){
        $query=$this->db->query("SELECT * FROM `menu` WHERE `type_id`= '$type_id' GROUP by item_type");
        return $query->result();
    }
    public function show_menu_attr($type_id){

        $query=$this->db->query("SELECT * FROM `menu_attribute` WHERE  `type_id`= '$type_id' ");
        return $query->result();
    }
    public function get_pro_cart($id){

        $query=$this->db->query("SELECT * FROM `menu_attribute` WHERE  `id`= '$id' ");
        return $query->result();
    }
    public function get_pro_cart_withoutattr($id){

        $query=$this->db->query("SELECT * FROM `menu` WHERE `id`= '$id' ");
        return $query->result();
    }
    public function showedit($id){

        $query=$this->db->query("SELECT *  FROM  `menu_attribute` WHERE `id`= '$id'");
        return $query->result();

    }
    public function showedit_for_menu($id){

        $query=$this->db->query("SELECT *  FROM  `menu` WHERE `id`= '$id'");
        return $query->result();

    }

    public function edit_res($id){
        $iname = $this->input->post('Item_name');
        $iattribute = $this->input->post('textbox');
        $price  = $this->input->post('Item_price');
        $serial = $this->input->post('serial');

        $data = array(
            'item_name' => $iname,
            'item_attribute' => $iattribute,
            'price' => $price,
            'serial' => $serial,

        );
        $this->db->where('id', $id);
        $this->db->update('menu_attribute', $data);

    }

    public function edit_res_menu($id){
        $iname = $this->input->post('Item_name');
        $idescription = $this->input->post('textbox');
        $price  = $this->input->post('Item_price');
        //$itype = $this->input->post('Item_type');

        $data = array(
            'item_name' => $iname,
            'item_description' => $idescription,
            'item_price' => $price,


        );
        $this->db->where('id', $id);
        $this->db->update('menu', $data);

    }

    function get_search_menu_attr_autocomplete($q,$id)
    {

        $this->db->distinct('item_name');
        $this->db->select('item_name');

        $this->db->select('item_name');
        $this->db->where('res_id', $id);

        $this->db->like('item_name', $q,'after');
        $query = $this->db->get('menu_attribute');
        // $query=$this->db->query("SELECT * FROM `products` WHERE `product_name` LIKE "%$q%" ");
        // return $query->result();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = htmlentities(stripslashes($row['item_name'])); //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    public function getres(){
        $query=$this->db->query("SELECT * FROM `restaurant` GROUP BY `name`");
        return $query->result();
    }

    public function show_item_type(){
        $query=$this->db->query("SELECT * FROM `menu_type` GROUP by `type`");
        return $query->result();

    }
    public function show_item_type_from_menu(){
        $query=$this->db->query("SELECT * FROM `menu` GROUP by `item_type`");
        return $query->result();

    }

}
