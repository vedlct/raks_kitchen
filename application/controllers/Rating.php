<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends CI_Controller
{
    public function index()
    {
        $this->load->model('Ratingm');
        $this->data['rating'] = $this->Ratingm->show_rating();;
        $this->load->view('rating',$this->data);

    }

    public function insert_rating()
    {
        $this->id = $this->input->post('postID');
        $this->load->model('Ratingm');
        $this->Ratingm->insert_rating($this->id);
        redirect(Admin_Restaurant);
    }
}