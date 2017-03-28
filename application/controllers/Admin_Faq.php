<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_Faq extends CI_Controller {
    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Faqm');
            $this->data['show_faq_content'] = $this->Faqm->show_faq_content();
            $this->load->view('admin_faq', $this->data);
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
    public function insert_faq(){

        if ($this->session->userdata('type') == "Admin") {
        $this->load->model('Faqm');
        $this->Faqm->insert_faq();
        redirect('Admin_Faq');
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
    public function editcontent($id){

        if ($this->session->userdata('type') == "Admin") {
        $this->load->model('Faqm');
        $this->Faqm->edit($id);
        redirect('Admin_Faq');
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
    function showedit()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $this->load->model('Faqm');
            $this->data['edit'] = $this->Faqm->showedit($id);
            foreach ($this->data['edit'] as $e) {
                echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_Faq/editcontent/$e->id\" >
                                    <div class=\"form-group\">
                                        <label>Header</label>
                                        <input class=\"form-control\" type=\"text\" name=\"header\" value=\" $e->header \">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Sub Header</label>
                                        <input class=\"form-control\"type=\"text\" name=\"sub_header\" value=\" $e->sub_header \">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Details</label>
                                        <textarea class=\"form-control\"  name=\"details\" value=\" $e->details \">$e->details</textarea>
                                    </div>
                                        <input class=\"btn btn-success\" type=\"submit\">
                                    </form>";
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
}