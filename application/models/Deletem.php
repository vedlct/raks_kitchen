<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Deletem extends CI_Model
{
    public function delete_menu_type($type_id){

        // $this->db->where('id', $id);
        // $this->db->delete('menu');
        //print_r($id);

        $this->db->query("DELETE FROM `menu_type` WHERE `id`= '$type_id'");
        $this->db->query("DELETE FROM `menu_attribute` WHERE `type_id`= '$type_id'");
        $this->db->query("DELETE FROM `menu` WHERE `type_id`= '$type_id'");
        //return $query->result();



    }
    public function delete_res_menu($id){

        // $this->db->where('id', $id);
        // $this->db->delete('menu');
        //print_r($id);

       // $this->db->query("DELETE FROM `menu_type` WHERE `id`= '$type_id'");
        //$this->db->query("DELETE FROM `menu_attribute` WHERE `type_id`= '$type_id'");
        $this->db->query("DELETE FROM `menu` WHERE `id`= '$id'");
        //return $query->result();



    }

    public function delete_res_menu_attribute($id){

        // $this->db->where('id', $id);
        // $this->db->delete('menu');
        //print_r($id);

        // $this->db->query("DELETE FROM `menu_type` WHERE `id`= '$type_id'");
        $this->db->query("DELETE FROM `menu_attribute` WHERE `id`= '$id'");
        //$this->db->query("DELETE FROM `menu` WHERE `id`= '$id'");
        //return $query->result();



    }
    public function delete_about_feature($id){

        $this->db->query("DELETE FROM `about_us_feature` WHERE `id`= '$id'");

    }
}