<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->load->model('Userm');
            $this->data['show_all_user'] = $this->Userm->get_all_user();
//            $this->data['show_resturant_content'] = $this->Homem->show_resturant_content();
//            $this->data['show_howitwork_content'] = $this->Homem->show_howitwork_content();
//            $this->data['show_sectionfour_content'] = $this->Homem->show_sectionfour_content();
//            $this->data['show_sectionfive_content'] = $this->Homem->show_sectionfive_content();
//            $this->data['show_sectionsix_content'] = $this->Homem->show_sectionsix_content();

            $this->load->view('admin_get_all_user', $this->data);
        }
        else{
            $this->load->model('viewall');
            $data['head']=$this->viewall->show_main_content();
            // print_r($data);
            $data['head_res_ad_more']=$this->viewall->home_resturant_andmore_content();
            //print_r($data['head_res_ad_more']);
            $data['head_how_itworks']=$this->viewall->show_howitwork_content();
            $data['head_section_4']=$this->viewall->show_sectionfour_content();
            $data['head_section_5']=$this->viewall->show_sectionfive_content();
            $data['head_section_6']=$this->viewall->show_sectionsix_content();
            $this->load->view('index',$data);

        }

    }
}