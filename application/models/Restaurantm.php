<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Restaurantm extends CI_Model
{

    public function show_restuarant_content(){

    $query=$this->db->query("SELECT * FROM `restaurant`");
    return $query->result();


}

    public function show_resturant($usename){

        $query=$this->db->query("SELECT * FROM `restaurant` WHERE `username`='$usename'");
        //$query=$this->db->query("SELECT * FROM `restaurant`,`menu` WHERE `restaurant`.`username`='$usename' GROUP  BY `name`");
        return $query->result();


    }
    public function show_resturant_item_type($id){

        $query=$this->db->query("SELECT * FROM `menu_type` WHERE `res_id`='$id'");
        //$query=$this->db->query("SELECT * FROM `restaurant`,`menu` WHERE `restaurant`.`username`='$usename' GROUP  BY `name`");
        return $query->result();


    }

    public function show_resuarant_type(){

        $query=$this->db->query("SELECT * FROM `restaurant` GROUP BY `type` ");
        return $query->result();


    }

    public function show_restuarant_by_type($id){


        $query=$this->db->query("SELECT * FROM `restaurant` WHERE `res_id` = '$id'");
        //$query=$this->db->query(" select * from restaurant where match($type) against (type)");
        return $query->result();




    }

    public function get_submitted_restaurant(){

        $query=$this->db->query("SELECT * FROM `res_request`");
        return $query->result();


    }

    public function submit_restuarant_content(){
        $name = $this->input->post('name');
        $type  = $this->input->post('type');
        //$itemDescription = $this->input->post('address');
        //$price  = $this->input->post('Item_price');

        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $state= $this->input->post('state');
        $postal_code  = $this->input->post('postal_code');
        $country = $this->input->post('country');
        $time  = $this->input->post('time');
        $username= $this->input->post('username');
        $password= $this->input->post('password');
        $vat= $this->input->post('vat');
        $status  = $this->input->post('status');
        $phone = $this->input->post('phone_number');
        $website = $this->input->post('website');
        $email = $this->input->post('email');

        $fileName = $_FILES["res_image"]["name"];
        move_uploaded_file($_FILES["res_image"]["tmp_name"], "img/" . $fileName);

        $data = array(
            'name' => $name,
            'type' => $type,
            'address' => $address,
            'phone' =>$phone,
            'website' => $website,
            'email' =>$email,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'time' => $time,
            'postal_code' => $postal_code,
            'username' => $username,
            'password' => $password,
            'vat' => $vat,
            'status' => $status,
            'Image' => $fileName,

        );

        $this->db->insert('res_request',$data);
    }

    public function insert_restuarant_content(){
        $name = $this->input->post('name');
        $type  = $this->input->post('type');
        //$itemDescription = $this->input->post('address');
        //$price  = $this->input->post('Item_price');

        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $state= $this->input->post('state');
        $postal_code  = $this->input->post('postal_code');
        $country = $this->input->post('country');
        $time  = $this->input->post('time');
        $username= $this->input->post('username');
        $password= $this->input->post('password');
        $vat= $this->input->post('vat');
        $status  = $this->input->post('status');
        $image = $this->input->post('image');
        $website = $this->input->post('website');
        $email = $this->input->post('email');

        $fileName = $_FILES["res_image"]["name"];
        move_uploaded_file($_FILES["res_image"]["tmp_name"], "img/" . $fileName);

        $data = array(
            'name' => $name,
            'type' => $type,
            'address' => $address,
            'website' => $website,
            'email' =>$email,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'time' => $time,
            'postal_code' => $postal_code,
            'username' => $username,
            'password' => $password,
            'vat' => $vat,
            'status' => $status,
            'Image' => $fileName,

        );

        $this->db->insert('restaurant',$data);
    }

    public function edit_res($id){
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

    public function showedit($id){

    $query=$this->db->query("SELECT *  FROM  restaurant WHERE `res_id`= '$id'");
    return $query->result();
    }

    public function show_res_request($id){

        $query=$this->db->query("SELECT *  FROM  res_request WHERE `res_id`= '$id'");
        return $query->result();
    }

    public function restaurant_details_description($id){

        $query = $this->db->get_where('restaurant_details', array('res_id' => $id));
        return $query->result();

    }

    public function restaurant_details_head($id){



        $query = $this->db->get_where('restaurant', array('res_id' => $id));
        return $query->result();

    }
    /*public function restaurant_details(){



        $query = $this->db->get('restaurant_details');
        return $query->result();


    }*/
    public function restaurant_details(){



        /*$query = $this->db->get_where('restaurant_details', array('res_id' => $id));
        return $query->result();*/

        $query=$this->db->query("SELECT * FROM`restaurant`,`restaurant_details` WHERE `restaurant`.`res_id`=`restaurant_details`.`res_id`");
        return $query->result();

    }
    public function editadddetails($id){

        $query = $this->db->get_where('restaurant_details', array('res_id' => $id));
        return $query->result();
    }
    public function add_new_res_details($id,$description,$time){



        $data = array(


            'description' => $description,
            'time'=>$time,
        );
        $this->db->where('res_id', $id);
        $this->db->update('restaurant_details', $data);


    }


    public function get_rating(){

        $res_id=$this->uri->segment(3);
        $username=$this->session->userdata['username'];
        $query=$this->db->query("SELECT *  FROM  res_rating WHERE `res_id`= '$res_id' AND `username` = '$username' ORDER BY `id` DESC LIMIT 1");
        return $query->result();
    }

    public function get_rating_avg(){

        $res_id=$this->uri->segment(3);
        $query=$this->db->query("SELECT ROUND(AVG(`rating`)) as rat FROM `res_rating` WHERE res_id = '$res_id'");
        return $query->result();

    }

    public function get_rating_avg_without(){

        //$res_id=$this->uri->segment(3);
        $query=$this->db->query("SELECT `res_id`, ROUND(AVG(`rating`)) as rat FROM `res_rating` GROUP by `res_id`");
        return $query->result();

    }
    public function edit_res_details($id){

        //$res_id=$this->uri->segment(3);
        $query=$this->db->query("SELECT * FROM `restaurant`,`restaurant_details` WHERE `restaurant`.`res_id`=`restaurant_details`.`res_id` and `restaurant`.`res_id`='$id' ");
        return $query->result();

    }
    public function accept_res($id){



        $query = $this->db->get_where('res_request', array('id' => $id));
        //return $query->result();

        foreach ($query->result() as $e){

            $data=array(
                'name'=>$e->name,
                'type'=>$e->type,
                'address'=>$e->address,
                'website'=>$e->website,
                'email'=>$e->email,
                'city'=>$e->city,
                'state'=>$e->state,
                'postal_code'=>$e->postal_code,
                'country'=>$e->country,
                'time'=>$e->time,
                'username'=>$e->username,
                'password'=>$e->password,
                'vat'=>$e->vat,
                'status'=>$e->status,
                'image'=>$e->image,

            );
            $data1= array(
                'username'=>$e->username,
                'password'=>$e->password,
                'type'=>'Res'

            );
            $this->db->insert('restaurant', $data);
            $this->db->insert('login', $data1);

        }
        $this->db->delete('res_request', array('id' => $id));

    }

    public function delete_res($id){

        $this->db->delete('res_request', array('id' => $id));


    }


}