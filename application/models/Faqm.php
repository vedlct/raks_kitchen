
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Faqm extends CI_Model
{

    public function show_faq_content(){

        $query=$this->db->query("SELECT DISTINCT(header) FROM `faq` ");
        return $query->result();

    }
    public function insert_faq(){
        $header = $this->input->post('header');
        $sub_header  = $this->input->post('sub_header');
        $details  = $this->input->post('details');

        $data = array(
            'header' => $header,
            'sub_header' => $sub_header,
            'details'=>$details

        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('faq',$data);

    }

    public function showedit($id){

        $query=$this->db->query("SELECT * FROM faq WHERE `id`= '$id'");
        return $query->result();

    }

    function edit($id){

        $header = $this->input->post('header');
        $sub_header  = $this->input->post('sub_header');
        $details  = $this->input->post('details');

        $data = array(
            'header' => $header,
            'sub_header' => $sub_header,
            'details'=>$details

        );

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id);
        $this->db->update('faq', $data);

    }

    public function show_faq()
    {
        $query=$this->db->query("SELECT * FROM `faq` GROUP by `header`");
        return $query->result();
    }

}