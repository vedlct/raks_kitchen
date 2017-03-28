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
        $this->load->model('Aboutusm');
        $this->Aboutusm->insert_about_us_feature_content();
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

    public function update_about_us_feature_content(){

        $id = $this->input->post('id');
        $big = $this->input->post('big');
        $small = $this->input->post('small');
        $boxheader = $this->input->post('boxheader');
        $boxdetails = $this->input->post('boxdetails');
        $box_icon = $this->input->post('box_icon');
        $this->load->model('Aboutusm');

        $this->Aboutusm->update_about_us_feature_content($id,$big,$small,$boxheader,$boxdetails,$box_icon);


    }
    
    
    public function edit_about_us_feature_content()
    {


        $id = $this->input->post('id');



        $this->load->model('Aboutusm');

        $this->data['about_us_feature_content'] = $this->Aboutusm->get_about_us_feature_content($id);


        //echo $id;

        foreach ($this->data['about_us_feature_content'] as $s) {


            echo "
                            
                                <div class=\"panel-body\">
                                <form method=\"post\" action=\"http://localhost/Rak/Admin_aboutus/update_about_us_feature_content\"
                                    <div class=\"form-group\">
                                        <label>Big</label>
                                        <input class=\"form-control\" type=\"text\" name=\"big\" value=\"$s->big\">
                                    </div>
                                    
                                    <div class=\"form - group\">
                                        
                                        <input class=\"form - control\" type=\"hidden\" name=\"id\" value=\"$s->id\"value=\"$s->id\">
                                    </div>

                                    <div class=\"form-group\">
                                        <label>Small</label>
                                        <input class=\"form-control\" type=\"text\" name=\"small\" value=\"$s->small\">
                                    </div>

                                    <div class=\"form-group\">
                                        <label>Box Header</label>
                                        <input class=\"form-control\" type=\"text\" name=\"boxheader\" value=\"$s->box_header\">
                                    </div>

                                    <div class=\"form-group\">
                                        <label>Box details</label>
                                        <input class=\"form-control\" type=\"text\" name=\"boxdetails\"value=\"$s->box_details\" >
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label>Icon</label>
                                        
                                        <input class=\"form - control\" type=\"text\" name=\"box_icon\"value=\"$s->box_icon\" readonly>
 
                                    </div>
                                    
                                    <input class=\"btn btn-success\" type=\"submit\">
                                    
                                    </div>



                                
                               
                                    
                                   

           
           
           ";


            //redirect(Admin_aboutus);

        }
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