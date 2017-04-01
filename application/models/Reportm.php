<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Reportm extends CI_Model
{

    public function show_Sales_review_by_date()
    {
        $query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
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

    public function gettotaltrans()
    {


        $this->db->select_sum('price');

        $this->db->from('order');
        //$this->db->where('email',$login_email);
        $this->db->order_by('date', 'ASC');
        $query = $this->db->get();

        // Return the results.
        return $query->result();

    }
}