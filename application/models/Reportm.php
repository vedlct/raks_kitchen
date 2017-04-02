<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Reportm extends CI_Model
{

    public function show_Sales_review_by_date($date_from,$date_to)
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,`item_attr`,`item_name`, SUM(`quantity`) as qun , SUM(`price`) as price FROM `order` WHERE `date` BETWEEN STR_TO_DATE('$date_from', '%m/%d/%Y') AND STR_TO_DATE('$date_to', '%m/%d/%Y') GROUP  BY `item_name`");
        return $query->result();
    }

    public function show_Sales_review_date()
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,`item_attr`,`item_name`, SUM(`quantity`) as qun , SUM(`price`) as price FROM `order` WHERE DATE(`date`)=CURDATE() GROUP  BY `item_name`");
        return $query->result();
    }
    public function show_Sales_review_by_week()
    {
        $query = $this->db->query("SELECT MONTH(`date`) FROM `order` GROUP by MONTH(`date`)");
        return $query->result();
        /*foreach ($query->result() as $m){
            $month= $m['MONTH(`date`)'];

            $query=$this->db->query("SELECT * FROM `order` WHERE ( EXTRACT(month FROM `date`))='$month'");
            return $query->result();
            //return $month;
        }*/
    }

    public function gettotaltrans($date_from,$date_to)
    {


       /* $this->db->select_sum('price');

        $this->db->from('order');
        //$this->db->where('email',$login_email);
        $this->db->order_by('date', 'ASC');
        $query = $this->db->get();

        // Return the results.
        return $query->result();*/
        $query = $this->db->query("SELECT SUM(`price`) as total FROM `order` WHERE `date` BETWEEN STR_TO_DATE('$date_from', '%m/%d/%Y') AND STR_TO_DATE('$date_to', '%m/%d/%Y')");
        return $query->result();

    }
    public function gettotal()
    {


        /* $this->db->select_sum('price');

         $this->db->from('order');
         //$this->db->where('email',$login_email);
         $this->db->order_by('date', 'ASC');
         $query = $this->db->get();

         // Return the results.
         return $query->result();*/
        $query = $this->db->query("SELECT SUM(`price`) as total FROM `order` WHERE DATE(`date`)=CURDATE()");
        return $query->result();

    }
}