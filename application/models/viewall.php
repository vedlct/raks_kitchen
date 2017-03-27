<?php
/**
 * Created by PhpStorm.
 * User: TCL
 * Date: 3/5/2017
 * Time: 2:52 PM
 */
class Viewall extends CI_Model
{
    public function show_main_content(){

    $this->db->order_by("id", "desc");
    $this->db->limit(1);

    $query = $this->db->get('home_main_content');
    return $query->result_array();

}
    public function home_resturant_andmore_content(){

        $this->db->order_by("id", "desc");
        $this->db->limit(1);

        $query = $this->db->get('home_resturant_andmore_content');
        return $query->result_array();

    }
    public function show_howitwork_content(){

        $this->db->order_by("id", "desc");
        $this->db->limit(1);

        $query = $this->db->get('home_howitworks_content');
        return $query->result_array();

    }
    public function show_sectionfour_content(){

    $this->db->order_by("id", "desc");
    $this->db->limit(1);

    $query = $this->db->get('home_section_4');
    return $query->result_array();

}
    public function show_sectionfive_content()
    {

        $this->db->order_by("id", "desc");
        $this->db->limit(1);

        $query = $this->db->get('home_section_5');
        return $query->result_array();


    }

    public function show_sectionsix_content(){

        $this->db->order_by("id", "desc");
        $this->db->limit(1);

        $query = $this->db->get('home_section_6');
        return $query->result_array();

    }


    public function most_popular()
    {
        $query=$this->db->query("SELECT * FROM `res_rating` GROUP by `res_id` ORDER BY `rating` DESC LIMIT 6");
        return $query->result();

    }
    /*public function most_popular()
    {
        $query=$this->db->query("SELECT * FROM `menu` GROUP by `item_type` ORDER BY `item_type` DESC LIMIT 6");
        return $query->result();

    }*/

}