<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {


    public function index()
    {
        $this->load->model('Faqm');
        $this->data['show_faq'] = $this->Faqm->show_faq();
        $this->load->view('faq' , $this->data);

    }
}
