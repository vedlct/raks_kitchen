<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Res_Admin_m extends CI_Model
{
    public function showadd($id){

        $query=$this->db->query("SELECT * FROM `menu_attribute`,`restaurant` WHERE `menu_attribute`.`res_id`=`restaurant`.`res_id` AND `restaurant`.`res_id`=$id");
        return $query->result();

    }
    public function showsearch_menu_attribute($text,$id){


        $this->db->select('*');
        $this->db->from('menu_attribute');
        $this->db->join('restaurant', 'menu_attribute.res_id=restaurant.res_id' , 'left');
        $this->db->where('menu_attribute.res_id',$id);
        $this->db->like('item_name',$text,'after');
       // $this->db->where('res_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function show_restuarant_content_for_resadmin($id){

        $query=$this->db->query("SELECT * FROM `restaurant` WHERE `res_id`= $id");
        return $query->result();

    }
    public function insert_restuarant_content(){

        /*$query=$this->db->query("SELECT * FROM `restaurant` WHERE `res_id`= $id");
        return $query->result();*/
        $id=$this->input->post('res_id');
        $rname = $this->input->post('name');
        $rtype = $this->input->post('type');
        $raddress = $this->input->post('address');
        $rcity = $this->input->post('city');
        $rstate = $this->input->post('state');
        $rpostal_code = $this->input->post('postal_code');
        $rcountry = $this->input->post('country');
        $rtime = $this->input->post('time');
        $rusername = $this->input->post('username');
        $rpassword = $this->input->post('password');
        $rvat = $this->input->post('vat');
        $rstatus = $this->input->post('status');
        $rimage = $this->input->post('res_image');
        $website = $this->input->post('website');
        $email = $this->input->post('email');

        $data = array(
            'name' => $rname,
            'type' => $rtype,
            'address' => $raddress,
            'website' => $website,
            'email' =>$email,
            'city' => $rcity,
            'state' => $rstate,
            'postal_code' => $rpostal_code,
            'country' => $rcountry,
            'time' => $rtime,
            'username' => $rusername,
            'password' => $rpassword,
            'vat' => $rvat,
            'status' => $rstatus,
            'Image' => $rimage,
        );
        $this->db->where('res_id', $id);
        $this->db->update('restaurant', $data);

    }
    public function restaurant_details($id){



        /*$query = $this->db->get_where('restaurant_details', array('res_id' => $id));
        return $query->result();*/

        $query=$this->db->query("SELECT * FROM `restaurant`,`restaurant_details` WHERE `restaurant`.`res_id`='$id'");
        return $query->result();

    }
    public function add_new_res_details($id,$description,$time){



        $data = array(

            //'res_name'=>$name,
            'description' => $description,
            'time'=>$time,
        );


        $this->db->update('restaurant_details', $data);

        $this->db->Where('res_id', $id);
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
    public function getres_id($rname){

        $query=$this->db->query("SELECT * FROM `restaurant` WHERE `res_id`= '$rname'");
        return $query->result();
    }

    public function insertmenuitem($id,$itype){

        /*$query=$this->db->query("SELECT * FROM `restaurant` WHERE `res_id`= '$rname'");
        return $query->result();*/

        $data = array(
            'type' => $itype ,
            'res_id' => $id ,

        );

        $this->db->insert('menu_type', $data);
        //$this->db->where('res_id', $id);
    }

    function get_search_menu_attr_autocomplete($q,$id)
    {
        $this->db->distinct('item_name');
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
    public function show_resturant($usename){

        $query=$this->db->query("SELECT * FROM `restaurant` WHERE `username`='$usename'");
        //$query=$this->db->query("SELECT * FROM `restaurant`,`menu` WHERE `restaurant`.`username`='$usename' GROUP  BY `name`");
        return $query->result();


    }

}