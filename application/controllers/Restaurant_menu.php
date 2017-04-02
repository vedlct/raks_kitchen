<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant_menu extends CI_Controller
{
    public function index()
    {
        /*$this->load->model('Restaurantm');
        $this->load->model('Menum');
        $data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $data['mattribute'] = $this->Menum->show_menu_attribute();
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_menu',$this->data);*/


        /*if ($this->session->userdata('type') == "Admin") {
            if (!$this->input->post('btnsearch')) {

                $this->data['te'] = '';
                $this->load->view('restaurant_menu', $this->data);
            } else {
                $text = $this->input->post('serch_res');
                $this->load->model('Menum');
                $this->data['te'] = $this->Menum->showsearch($text);
                $this->load->view('restaurant_menu', $this->data);


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

        }*/
        if ($this->session->userdata('type') == "Admin") {

            $this->load->model('Menum');
            //$this->data['mattribute'] = $this->Menum->show_menu_attribute();
            $this->data['te'] = '';
            //$this->data['resname']= $this->Menum->getres();
            $this->data['show_item_type_from_menu']=$this->Menum->show_item_type_from_menu();
            $this->load->view('restaurant_menu', $this->data);

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

    public function editmenu($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Menum');
            $this->Menum->menuedit($id);
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

    public function delete($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Menum');
            $this->Menum->deletemenu($id);
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

    public function editmenumodal()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $this->load->model('Menum');
            $this->data['te'] = $this->Menum->getall($id);
            foreach ($this->data['te'] as $e) {
                echo "
                    <form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Restaurant_menu/editmenu/$e->res_id\"
                                <div class=\"form-group\">
                                        <label> Rsetaurant Name</label>
                                            $e->res_name 
                                            </div>
                                             <div class=\"form-group\">
                                        <label>Item Type</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_type\" value=\" $e->item_type \">
                                            </div>
                                            
                                            <div class=\"form - group\">
                                        <label>Item Name</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_name\" value=\" $e->item_name \">
                                            </div>
                                    
                                    
                                    <div class=\"form - group\">
                                        <label>Item Description</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_desc\" value=\" $e->item_description \">
                                            </div>
                                    <div class=\"form - group\">
                                        <label>Item Price</label>
                                        <input class=\"form - control\"type=\"text\" name=\"item_price\" value=\" $e->item_price \">
                                            </div>
                                            
                                            <input type=\"hidden\" name=\"res_id\" value=\"<?php echo $e->res_id; ?>\"/>
                                    
                                    
                                   <input class=\"btn btn - success\" type=\"submit\">
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

    public function showedit()
    {


        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $this->load->model('Menum');
            $this->data['edit'] = $this->Menum->showedit_for_menu($id);

            $this->load->view('edit_restaurant_menu',$this->data);


            //echo $id;
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

    public function edit_res_menu($id)
    {

        if ($this->session->userdata('type') == "Admin") {

            $this->load->model('Menum');
            $this->Menum->edit_res_menu($id);
            redirect('Restaurant_menu');
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
}