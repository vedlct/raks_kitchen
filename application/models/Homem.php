<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Homem extends CI_Model
{


    public function show_main_content(){

        $query=$this->db->query("SELECT * FROM `home_main_content` ORDER by id DESC LIMIT 1");
        return $query->result();

    }
    public function show_resturant_content(){

        $query=$this->db->query("SELECT * FROM `home_resturant_andmore_content` ORDER by id DESC LIMIT 1");
        return $query->result();

    }
    public function show_howitwork_content(){

        $query=$this->db->query("SELECT * FROM `home_howitworks_content` ORDER by id DESC LIMIT 1");
        return $query->result();

    }
    public function show_sectionfour_content(){

        $query=$this->db->query("SELECT * FROM `home_section_4` ORDER by id DESC LIMIT 1");
        return $query->result();

    }
    public function show_sectionfive_content(){

        $query=$this->db->query("SELECT * FROM `home_section_5` ORDER by id DESC LIMIT 1");
        return $query->result();

    }
    public function show_sectionsix_content(){

        $query=$this->db->query("SELECT * FROM `home_section_6` ORDER by id DESC LIMIT 1");
        return $query->result();

    }

///insert function
    function insert_main_content(){
        $big = $this->input->post('main_content_big');
        $small  = $this->input->post('main_content_small');

        $data = array(
            'big' => $big,
            'small' => $small,

        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('home_main_content',$data);
    }

    function insert_resturant_andmore_content(){
        $resturent = $this->input->post('resturant1');
        $people  = $this->input->post('resturant2');
        $register = $this->input->post('resturant3');
        $data = array(
            'resturant' => $resturent,
            'people_served' => $people,
            'registered_user' => $register

        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('home_resturant_andmore_content',$data);
    }

    function insert_howitwork_content(){
        $hiwbig = $this->input->post('hiw_big');
        $hiwsmall  = $this->input->post('hiw_small');
        $steponebig = $this->input->post('hiw_one_big');
        $steponesmall = $this->input->post('hiw_one_big');
        $steptwobig  = $this->input->post('hiw_two_big');
        $steptwosmall = $this->input->post('hiw_two_small');
        $stepthreebig = $this->input->post('hiw_three_big');
        $stepthreesmall= $this->input->post('hiw_three_small');
        $stepfourbig= $this->input->post('hiw_four_big');
        $stepfoursmall= $this->input->post('hiw_four_small');

        $data = array(

            'big' => $hiwbig,
            'small' => $hiwsmall,
            'one_big' => $steponebig,
            'one_small' => $steponesmall,
            'two_big' => $steptwobig,
            'two_small' => $steptwosmall,
            'three_big' => $stepthreebig,
            'three_small' => $stepthreesmall,
            'four_big' => $stepfourbig,
            'four_small' => $stepfoursmall
        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('home_howitworks_content',$data);
    }

    function insert_sectionfour_content(){
        $big = $this->input->post('sfourbig');
        $small  = $this->input->post('sfoursmall');

        $data = array(
            'big' => $big,
            'small' => $small,

        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('home_section_4',$data);
    }

    function insert_sectionfive_content(){

        $big = $this->input->post('sfivebig');
        $small  = $this->input->post('sfivesmall');

        $fileName = $_FILES["sfiveimage"]["name"];
        move_uploaded_file($_FILES["sfiveimage"]["tmp_name"], "img/" . $fileName);

        $data = array(
            'big' => $big,
            'small' => $small,
            'image'=> $fileName

        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('home_section_5',$data);
    }

    function insert_sectionsix_content(){

        $big = $this->input->post('ssixbig');
        $small  = $this->input->post('ssixsmall');
        $sboxbig= $this->input->post('sboxbig');
        $sboxsmall= $this->input->post('sboxsmall');
        $sboxdetails= $this->input->post('sboxdetails');

        $fileName = $_FILES["ssiximage"]["name"];
        move_uploaded_file($_FILES["ssiximage"]["tmp_name"], "img/" . $fileName);
        $data = array(
            'big' => $big,
            'small' => $small,
            'submit_big' => $sboxbig,
            'submit_small' => $sboxsmall,
            'submit_details' => $sboxdetails,
            'image'=> $fileName


        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('home_section_6',$data);
    }

}


?>