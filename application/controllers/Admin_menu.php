<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            /*$this->load->model('Restaurantm');
            $this->load->model('Menum');
            $data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
            $data['mattribute'] = $this->Menum->show_menu_attribute();
            $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();

            $this->load->view('admin_menu', $this->data);*/
            $this->load->model('Restaurantm');
            $this->load->model('Menum');

            $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
            $this->data['menutype'] = $this->Menum->show_menu_type();


            $this->load->view('admin_menu', $this->data);


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


        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Menum');
            $this->Menum->insert_menu_content();
            //redirect(Admin_Restaurant);
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

    function test()
    {

        if ($this->session->userdata('type') == "Admin") {
            extract($_POST);

            //print_r($textbox);

            for ($i = 0; $i < count($textbox); $i++) {
                echo $textbox[$i] . "<br>";
                echo $textimage[$i] . "<br>";
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
    function insert_menu_attr()
    {


        //$textbox = $this->input->post('textbox[]');
        //$textimg = $this->input->post('textimage[]');
        //$price  = $this->input->post('Item_price');

        //if (count($textbox)<1){ print_r($textbox );}else{echo "variable is not empty";}

        //print_r($price);

        if ($this->session->userdata('type') == "Admin") {


            $this->load->model('Menum');
            $this->Menum->insert_menu_attr();
            //$this->load->view('admin_faq');

            redirect('Admin_menu');
           // $rimage=  $_FILES["file"]["name"];
            //print_r($rimage);
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

    function insert_menu_type()
    {

        if ($this->session->userdata('type') == "Admin") {
            /*$this->load->model('Menum');
            $this->Menum->insert_menu_type();
            //$this->load->view('admin_faq');

            redirect(Admin_menu);*/

            $this->load->model('Menum');
            $this->load->model('Restaurantm');

            $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
            $this->data['menutype'] = $this->Menum->show_menu_type();
            $this->load->view('admin_menu_type');


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

    function get_menu_type()
    {

        if ($this->session->userdata('type') == "Admin") {

            $id=$this->input->get('id');
            $this->load->model('Menum');
            $this->data['menu_type']=$this->Menum->get_menu_type($id);
            foreach ($this->data['menu_type'] as $m){

                $m_id=$m->id;
                echo $m_id;
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


    function insert_menu_type1()
    {

        if ($this->session->userdata('type') == "Admin") {
            /*$this->load->model('Menum');
            $this->Menum->insert_menu_type();
            //$this->load->view('admin_faq');

            redirect(Admin_menu);*/
            //$this->load->view('admin_add_menu_type');

            $this->load->model('Menum');
            $this->Menum->insert_menu_type();
            redirect(base_url("Admin_menu/insert_menu_type/"));



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

    function getres_id()
    {
        if ($this->session->userdata('type') == "Admin") {

            $rname = $this->input->post('rname');
            $this->load->model('Menum');
            $this->data['edit'] = $this->Menum->getres_id($rname);
            foreach ($this->data['edit'] as $s) {
                echo $s->res_id;
                /*$id=$s->res_id;
                $this->data['show_menu_item_content'] = $this->Menum->show_menu_item_content($id);
                foreach ($this->data['show_menu_item_content'] as $e) {
                    echo $e->item_type;
                }*/
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

        function getres_idformenu()
        {


            if ($this->session->userdata('type') == "Admin") {
                $rname = $this->input->post('rname');
                $this->load->model('Menum');
                //print_r($rname);
                $this->data['edit'] = $this->Menum->getres_id($rname);
                foreach ($this->data['edit'] as $s) {
                    echo $s->res_id;
                    $id = $s->res_id;
                    $this->data['show_menu_item_content'] = $this->Menum->show_menu_item_content($id);
                    // print_r($this->data['show_menu_item_content']);
                    foreach ($this->data['show_menu_item_content'] as $e) {
                        //echo $e->item_type;
                        echo "<option value='" . $e->type . "'>" . $e->type . "</option>";
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






    function showadd()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $this->load->model('Menum');
            $this->data['edit'] = $this->Menum->showedit($id);
            foreach ($this->data['edit'] as $e) {
                echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_menu/editcontent/$e->id\" >
                                    <div class=\"form-group\">
                                        <label>Resturant name</label>
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
    function insertmenuitem()
    {

        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Menum');
            $this->Menum->insertmenuitem();
            //$this->load->view('admin_faq');

            redirect('Admin_menu');
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