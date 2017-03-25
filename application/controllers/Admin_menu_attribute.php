<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu_attribute extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            if (!$this->input->post('btn_search_menu_attr')) {
                $this->load->model('Menum');
                //$this->data['mattribute'] = $this->Menum->show_menu_attribute();
                $this->data['te'] = '';
                $this->data['resname']= $this->Menum->getres();
                $this->data['show_item_type']=$this->Menum->show_item_type();
                $this->load->view('menu_attribute', $this->data);

            } else {
                $text = $this->input->post('search_menu_att');
                $this->load->model('Menum');
               // $this->data['mattribute'] = $this->Menum->show_menu_attribute();
                $this->data['te'] = $this->Menum->showsearch_menu_attribute($text);
                $this->load->view('menu_attribute', $this->data);


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

    public function get_search_menu_attr_autocomplete(){

        if ($this->session->userdata('type') == "Admin") {
        $this->load->model('Menum');
        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->Menum->get_search_menu_attr_autocomplete($q);
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


    public function edit_res($id)
    {

        if ($this->session->userdata('type') == "Admin") {

            $this->load->model('Menum');
            $this->Menum->edit_res($id);
            redirect(Admin_menu_attribute);
            /*
            $this->load->model('Menum');
            $this->Menum->menuedit($id);
            redirect(Restaurant_menu);
            */
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

    public function showedit()
    {


        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $this->load->model('Menum');
            $this->data['edit'] = $this->Menum->showedit($id);
            foreach ($this->data['edit'] as $e) {
                echo "<form role=\"form\" method=\"post\" action=\"http://localhost/raks_kitchen/Admin_menu_attribute/edit_res/$e->id\" >
                   
                                        <div class=\"form-group\">
                                            <label>Item Name</label>
                                            <input class=\"form-control\" type=\"text\" name=\"Item_name\" value=\" $e->item_name \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Item attribute</label>
                                            <input class=\"form-control\" type=\"text\" name=\"textbox\" value=\" $e->item_attribute \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Price</label>
                                            <input class=\"form-control\" type=\"text\" name=\"Item_price\" value=\" $e->price \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Serial</label>
                                            <input class=\"form-control\" type=\"text\" name=\"serial\" value=\" $e->serial \">
                                        </div>                                 
                                        <input class=\"btn btn-success\" type=\"submit\">
                                    </form>
                                    ";
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