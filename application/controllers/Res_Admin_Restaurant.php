<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Res_Admin_Restaurant extends CI_Controller
{
    public function index()
    {
       /* if ($this->session->userdata('type') == "Res") {
            $this->load->model('Restaurantm');
            $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
            $this->load->view('res_admin_restaurant', $this->data);

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

        }*/

        if ($this->session->userdata('type') == "Res") {
            $usename = $this->session->userdata('username');
            //print_r($usename);
            $this->load->model('Restaurantm');
            $this->data['show_resturant'] = $this->Restaurantm->show_resturant($usename);
            foreach ($this->data['show_resturant'] as $e) {

                //print_r($e->res_id);
                $id = $e->res_id;
                $this->load->model('Res_Admin_m');
                $this->data['show_res_content'] = $this->Res_Admin_m->show_restuarant_content_for_resadmin($id);
                $this->load->view('res_admin_restaurant', $this->data);
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

    public function insert_res()
    {
        if ($this->session->userdata('type') == "Res") {

            $id=$this->input->post('res_id');
            //print_r($id);
            $this->load->model('Res_Admin_m');
            $this->Res_Admin_m->insert_restuarant_content();
            redirect(Res_Admin_Restaurant);
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

            $this->load->model('Restaurantm');
            $this->Restaurantm->edit_res($id);
            redirect(Res_Admin_Restaurant);
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
            $this->load->model('Restaurantm');
            $this->data['edit'] = $this->Restaurantm->showedit($id);
            // print_r($this->data['edit']);
            foreach ($this->data['edit'] as $e) {
                echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Res_Admin_Restaurant/edit_res/$e->res_id\" >
                                        <div class=\"form-group\">
                                            <label>Name</label>
                                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\" $e->name \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Type</label>
                                            <input class=\"form-control\" type=\"text\" name=\"type\" value=\" $e->type \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Address</label>
                                            <input class=\"form-control\" type=\"text\" name=\"address\" value=\" $e->address \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>City</label>
                                            <input class=\"form-control\" type=\"text\" name=\"city\" value=\" $e->city \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>State</label>
                                            <input class=\"form-control\" type=\"text\" name=\"state\" value=\" $e->state \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Postal Code</label>
                                            <input class=\"form-control\" type=\"text\" name=\"postal_code\" value=\" $e->postal_code \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Country</label>
                                            <input class=\"form-control\" type=\"text\" name=\"country\" value=\" $e->country \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Time</label>
                                            <input class=\"form-control\" type=\"text\" name=\"time\" value=\" $e->time \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Username</label>
                                            <input class=\"form-control\" type=\"text\" name=\"username\" value=\" $e->username \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>password</label>
                                            <input class=\"form-control\" type=\"text\" name=\"password\" value=\" $e->password \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>VAT</label>
                                            <input class=\"form-control\" type=\"text\" name=\"vat\" value=\" $e->vat \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Status</label>
                                            <input class=\"form-control\" type=\"text\" name=\"status\" value=\" $e->status \">
                                        </div>
                                        <div class=\"form - group\">
                                            <label>Image</label>
                                            <input class=\"form - control\" type=\"file\" name=\"res_image\" value=\" $e->Image \">
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