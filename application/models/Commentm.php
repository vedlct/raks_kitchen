<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Commentm extends CI_Model
{
    public function insert_comment($username)
    {
        $review = $this->input->post('review_text');
        $res_id = $this->input->post('res_id');
        //$re_id = $this->input->post('re_id');

        $data = array(
            'res_id' => $res_id,
            'username'=>$username,
            'comment' => $review,
        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('res_comment',$data);
    }

    public function get_comment($type_id)
    {
        $query = $this->db->query("SELECT * FROM `res_comment` WHERE `res_id` = '$type_id'");
        return $query->result();
    }
}
?>