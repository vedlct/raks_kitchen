<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Res_Admin_Home extends CI_Controller {


    public function index()
    {
        if ($this->session->userdata('type') == "Res") {
            $usename=$this->session->userdata('username');
            //print_r($usename);
            $this->load->model('Restaurantm');
            $this->data['show_resturant']=$this->Restaurantm->show_resturant($usename);
            foreach ($this->data['show_resturant'] as $e){

                //print_r($e->res_id);
                $id=$e->res_id;
                $this->data['show_resturant_item_type']=$this->Restaurantm->show_resturant_item_type($id);
                $this->load->view('res_admin_menu', $this->data);
            }

            //$this->load->view('res_admin_menu', $this->data);

            /*$this->load->model('Homem');
            $this->data['show_main_content'] = $this->Homem->show_main_content();
            $this->data['show_resturant_content'] = $this->Homem->show_resturant_content();
            $this->data['show_howitwork_content'] = $this->Homem->show_howitwork_content();
            $this->data['show_sectionfour_content'] = $this->Homem->show_sectionfour_content();
            $this->data['show_sectionfive_content'] = $this->Homem->show_sectionfive_content();
            $this->data['show_sectionsix_content'] = $this->Homem->show_sectionsix_content();

            $this->load->view('res_admin_menu', $this->data);*/

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

    public function insert_main_content()
    {


        if ($this->session->userdata('type') == "Res") {
            $this->load->model('Homem');
            $this->Homem->insert_main_content();
            $this->Homem->insert_resturant_andmore_content();
            redirect('Admin_Home');

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

    public function insert_resturant_content()
    {

        if ($this->session->userdata('type') == "Res") {

            $this->load->model('Homem');
            $this->Homem->insert_resturant_andmore_content();
            redirect('Admin_Home');

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
    public function insert_how_it_work()
    {

        if ($this->session->userdata('type') == "Res") {

            $this->load->model('Homem');
            $this->Homem->insert_howitwork_content();
            redirect('Admin_Home');

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
    public function insert_section_four()
    {

        if ($this->session->userdata('type') == "Res") {

            $this->load->model('Homem');
            $this->Homem->insert_sectionfour_content();
            redirect('Admin_Home');

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
    public function insert_section_five(){

        if ($this->session->userdata('type') == "Res") {

        $this->load->model('Homem');
        $this->Homem->insert_sectionfive_content();
        redirect('Admin_Home');

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
    public function insert_section_six()
    {

        if ($this->session->userdata('type') == "Res") {

            $this->load->model('Homem');
            $this->Homem->insert_sectionsix_content();
            redirect('Admin_Home');

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

    function getres_idformenu() {
        if ($this->session->userdata('type') == "Res") {
            $rname = $this->input->post('rname');
            $this->load->model('Res_Admin_m');
            $this->data['edit'] = $this->Res_Admin_m->getres_id($rname);
            foreach ($this->data['edit'] as $s) {
                echo "$s->name";

            }
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

    function insertmenuitem()
    {

        if ($this->session->userdata('type') == "Res") {

            $id = $this->input->post('res_id');
            print_r($id);
            $itype = $this->input->post('itype');

            $this->load->model('Res_Admin_m');
            $this->Res_Admin_m->insertmenuitem($id,$itype);
            //$this->load->view('admin_faq');

            redirect('Res_Admin_Home');
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
