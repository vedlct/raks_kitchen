<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Res_Admin_menu_attribute extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('type') == "Res") {
            $usename=$this->session->userdata('username');
            //print_r($usename);
            $this->load->model('Restaurantm');
            $this->data['show_resturant']=$this->Restaurantm->show_resturant($usename);
            foreach ($this->data['show_resturant'] as $e) {

                //print_r($e->res_id);
                $id = $e->res_id;
                if (!$this->input->post('btn_search_menu_attr')) {
                    $this->load->model('Res_Admin_m');
                    $this->data['mattribute'] = $this->Res_Admin_m->showadd($id);
                    //print_r($this->data['mattribute']);
                    $this->data['te'] = '';
                    $this->load->view('res_menu_attribute', $this->data);

                }
                else {
                    $text = $this->input->post('search_menu_att');

                    $this->load->model('Res_Admin_m');
                    $this->data['mattribute'] = $this->Res_Admin_m->showadd($id);
                    $this->data['te'] = $this->Res_Admin_m->showsearch_menu_attribute($text,$id);
                    //print_r($this->data['te']);
                    $this->load->view('res_menu_attribute', $this->data);


                }
            }



            /*if (!$this->input->post('btn_search_menu_attr')) {
            $this->load->model('Menum');
            $this->data['mattribute'] = $this->Menum->show_menu_attribute();
            //print_r($this->data['mattribute']);
            $this->data['te'] = '';
            $this->load->view('res_menu_attribute', $this->data);
        } else {
            $text = $this->input->post('search_menu_att');
            $this->load->model('Menum');
            $this->data['mattribute'] = $this->Menum->show_menu_attribute();
            $this->data['te'] = $this->Menum->showsearch_menu_attribute($text);
            $this->load->view('res_menu_attribute', $this->data);


        }*/
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

    public function get_search_menu_attr_autocomplete()
    {

        if ($this->session->userdata('type') == "Res") {

            $usename = $this->session->userdata('username');
            //print_r($usename);
            $this->load->model('Res_Admin_m');
            $this->data['show_resturant'] = $this->Res_Admin_m->show_resturant($usename);
            foreach ($this->data['show_resturant'] as $e) {

                //print_r($e->res_id);
                $id = $e->res_id;

                $this->load->model('Res_Admin_m');
                if (isset($_GET['term'])) {
                    $q = strtolower($_GET['term']);
                    $this->Res_Admin_m->get_search_menu_attr_autocomplete($q,$id);
                }
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

        if ($this->session->userdata('type') == "Res") {

            $this->load->model('Res_Admin_m');
            $this->Res_Admin_m->edit_res($id);
            redirect('Res_Admin_menu_attribute');
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

        if ($this->session->userdata('type') == "Res") {

            $id = $this->input->post('id');
            $this->load->model('Menum');
            $this->data['edit'] = $this->Menum->showedit($id);
            foreach ($this->data['edit'] as $e) {
                echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Res_Admin_menu_attribute/edit_res/$e->id\" >
                                        <div class=\"form-group\">
                                                                      
                                            
                                            <input class=\"form-control\" type=\"hidden\" name=\"id\" value=\" $e->id \" readonly>
                                        </div>
                                        <div class=\"form-group\">
                                           
                                            <input class=\"form-control\" type=\"hidden\" name=\"res_id\" value=\" $e->res_id \" readonly>
                                        </div>
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