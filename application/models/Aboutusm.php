<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutusm extends CI_Model
{

    public function show_about_us_content(){

        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
        return $query->result();

    }
    public function show_about_us_details_content(){

        $query=$this->db->query("SELECT * FROM `about_us_details` ORDER by id DESC LIMIT 1");
        return $query->result();

    }
    public function show_about_us_feature_content(){

        $query=$this->db->query("SELECT * FROM `about_us_feature` ");
        return $query->result();

    }
    public function show_about_us_banner_content(){

        $query=$this->db->query("SELECT * FROM `about_us_banner` ");
        return $query->result();

    }
    public function show_icon(){

        $query=$this->db->query("SELECT * FROM `icon` ");
        return $query->result();

    }


    function insert_about_us_content(){
        $small = $this->input->post('asmall');
        // $small  = $this->input->post('main_content_small');

        $data = array(

            'small' => $small

        );

        $this->db->insert('about_us',$data);
    }
    function insert_about_us_details_content(){

        $header = $this->input->post('header');
        $details  = $this->input->post('details');

        $data = array(
            'header' => $header,
            'details' => $details,

        );
        $data = $this->security->xss_clean($data);

        $this->db->insert('about_us_details',$data);
    }
    function insert_about_us_feature_content(){
        $big = $this->input->post('details');
        $small  = $this->input->post('phone');
        $box_header = $this->input->post('boxheader');
        $box_details = $this->input->post('boxdetails');
        $icon = $this->input->post('icon');
        $data = array(
            'big' => $big,
            'small' => $small,
            'box_header' => $box_header,
            'box_details' => $box_details,
            'box_icon' => $icon
        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('about_us_feature',$data);
    }

    function get_about_us_feature_content($id){
       /* $query = $this->db->get_where('about_us_feature', array('id' => $id));
        return $query->result();*/

        $query=$this->db->query("SELECT * FROM `about_us_feature` WHERE `about_us_feature`.`id`='$id' ");
        return $query->result();

    }
    function update_about_us_feature_content($id,$big,$small,$boxheader,$boxdetails,$box_icon){
        /* $query = $this->db->get_where('about_us_feature', array('id' => $id));
         return $query->result();*/

        $data = array(
            'big' => $big,
            'small' => $small,
            'box_header' => $boxheader,
            'box_details' => $boxdetails,
            'box_icon' => $box_icon
        );


        $this->db->where('id',$id);
        $this->db->insert('about_us_feature',$data);




    }

    function insert_about_us_banner_content(){
        $details = $this->input->post('details');
        $phone  = $this->input->post('phone');
        $email = $this->input->post('email');
        $data = array(
            'details' => $details,
            'phone' => $phone,
            'email' => $email
        );

        $this->db->insert('about_us_banner',$data);
    }
}
?>