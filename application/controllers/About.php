<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


    public function index()
    {
        $this->load->model('Aboutusm');
        $this->data['aboutusSmall']= $this->Aboutusm->show_about_us_content();
        $this->data['aboutUs']= $this->Aboutusm->show_about_us_banner_content();
        $this->data['aboutUsDetails'] = $this->Aboutusm->show_about_us_details_content();
        $this->data['aboutUsfeature']=$this->Aboutusm->show_about_us_feature_content();
        $this->load->view('about', $this->data);
        //print_r($data['aboutUsfeature']);
        //echo "Hello dolly";
    }
}
