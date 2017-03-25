<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


    public function index()
    {
        $this->load->model('Contactm');
        $this->data['info'] = $this->Contactm->show_customer_service_content();
        $this->data['details'] = $this->Contactm->show_resturant_service_content();
        $this->data['contacts']= $this->Contactm->show_contact_content();
        //print_r($data['info']);

        $this->load->view('contacts', $this->data);
    }
}
