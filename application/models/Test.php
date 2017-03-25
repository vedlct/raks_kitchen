<?php
class Test extends CI_Model
{
    public function headercall(){

        $query=$this->db->query("SELECT DISTINCT(`header`) FROM `faq`");
        return $query->result();

    }

    public function subheadercall($new){

        $query=$this->db->query("SELECT * FROM `faq` WHERE `header` = '$new'");
        return $query->result();

    }

}
