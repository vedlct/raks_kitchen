<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_aboutus extends CI_Controller {

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {


            $this->load->model('Aboutusm');
            $this->data['show_about_us_content'] = $this->Aboutusm->show_about_us_content();
            $this->data['show_about_us_details_content'] = $this->Aboutusm->show_about_us_details_content();
            $this->data['show_about_us_feature_content'] = $this->Aboutusm->show_about_us_feature_content();
            $this->data['show_about_us_banner_content'] = $this->Aboutusm->show_about_us_banner_content();
            $this->data['icon'] = $this->Aboutusm->show_icon();

            $this->load->view('admin_aboutus', $this->data);
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
    public function insert_about_us_content()
    {

        if ($this->session->userdata('type') == "Admin") {

            $this->load->model('Aboutusm');
            $this->Aboutusm->insert_about_us_content();
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
    public function insert_about_us_details_content()
    {

        if ($this->session->userdata('type') == "Admin") {

            $this->load->model('Aboutusm');
            $this->Aboutusm->insert_about_us_details_content();
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
    public function insert_about_us_feature_content(){

        if ($this->session->userdata('type') == "Admin") {
            $big = $this->input->post('big');
            $small  = $this->input->post('small');
            $box_header = $this->input->post('boxheader');
            $box_details = $this->input->post('boxdetails');
            $icon = $this->input->post('icon');
           // print_r($big);
            $this->load->model('Aboutusm');

            $this->Aboutusm->insert_about_us_feature_content($big,$small,$box_header,$box_details,$icon);
            redirect('Admin_aboutus');

       /* $this->Aboutusm->insert_about_us_feature_content();
        redirect('Admin_aboutus');*/

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

    public function update_about_us_feature_content($id){

        //$id = $this->input->post('id');
        $big = $this->input->post('big');
        $small = $this->input->post('small');
        $boxheader = $this->input->post('boxheader');
        $boxdetails = $this->input->post('boxdetails');
        //$box_icon = $this->input->post('box_icon');
       // print_r($big);
        $this->load->model('Aboutusm');

        $this->Aboutusm->update_about_us_feature_content($id,$big,$small,$boxheader,$boxdetails);
        redirect('Admin_aboutus');


    }
    
    
    public function edit_about_us_feature_content()
    {


        $id = $this->input->post('id');



        $this->load->model('Aboutusm');

        $this->data['about_us_feature_content'] = $this->Aboutusm->get_about_us_feature_content($id);


        $this->load->view('test_view',$this->data);





    }





    public function insert_about_us_banner_content()
    {

        if ($this->session->userdata('type') == "Admin") {

            $this->load->model('Aboutusm');
            $this->Aboutusm->insert_about_us_banner_content();
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