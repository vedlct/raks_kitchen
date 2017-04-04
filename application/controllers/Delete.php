<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller
{

    public function index()
    {

    }

    function delete_menu_type()
    {

        if ($this->session->userdata('type') == "Admin") {

            $type_id=$this->input->post('type_id');

            //print_r($type_id);
            $this->load->model('Deletem');
            $this->Deletem->delete_menu_type($type_id);
            //$this->load->view('admin_faq');

            redirect('Admin_menu/insert_menu_type/');
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
    function delete_res_menu($id)
    {

        if ($this->session->userdata('type') == "Admin") {

            //$res_menu_id=$this->input->post('res_menu_id');

            //print_r($id);
            $this->load->model('Deletem');
            $this->Deletem->delete_res_menu($id);
            //$this->load->view('admin_faq');

            redirect('Restaurant_menu');
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

    function delete_res_menu_attribute($id)
    {

        if ($this->session->userdata('type') == "Admin") {

            //$res_menu_id=$this->input->post('res_menu_id');

            //print_r($id);
            $this->load->model('Deletem');
            $this->Deletem->delete_res_menu_attribute($id);
            //$this->load->view('admin_faq');

            redirect('Admin_menu_attribute');
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

    function delete_about_feature($id)
    {

        if ($this->session->userdata('type') == "Admin") {

            //$res_menu_id=$this->input->post('res_menu_id');

            //print_r($id);
            $this->load->model('Deletem');
            $this->Deletem->delete_about_feature($id);
            //$this->load->view('admin_faq');

            redirect('Admin_aboutus');
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