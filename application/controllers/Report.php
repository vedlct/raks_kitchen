<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Report extends CI_Controller {


    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            /*$this->load->model('Faqm');
            $this->data['show_faq_content'] = $this->Faqm->show_faq_content();
            $this->load->view('admin_faq', $this->data);*/
            $this->load->model('Reportm');
            $this->data['show_Sales_review_by_date'] = $this->Reportm->show_Sales_review_by_date();
            $this->data['gettotaltrans'] = $this->Reportm->gettotaltrans();
            //print_r($this->data['gettotaltrans']);
            $this->load->view('report',$this->data);

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
    public function by_week()
    {
        if ($this->session->userdata('type') == "Admin") {
            /*$this->load->model('Faqm');
            $this->data['show_faq_content'] = $this->Faqm->show_faq_content();
            $this->load->view('admin_faq', $this->data);*/
            $this->load->model('Reportm');
            $this->data['show_Sales_review_by_week'] = $this->Reportm->show_Sales_review_by_week();

            foreach ($this->data['show_Sales_review_by_week'] as $m) {
                $month = $m['MONTH(`date`)'];
                /*$this->data['gettotaltrans'] = $this->Reportm->gettotaltrans();
                //print_r($this->data['gettotaltrans']);
                $this->load->view('report_by_week',$this->data);*/

                print_r($month);
            }
        //print_r($this->data['show_Sales_review_by_week']);
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