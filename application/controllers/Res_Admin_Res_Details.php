<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Res_Admin_Res_Details extends CI_Controller {

    public function index()
{
    /*if ($this->session->userdata('type') == "Res") {
    $this->load->model('Res_Admin_m');
    $this->data['res_details']= $this->Res_Admin_m->restaurant_details();




    $this->load->view('res_add_res_details',$this->data);



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
            $this->data['res_details'] = $this->Res_Admin_m->restaurant_details($id);
            $this->load->view('res_add_res_details', $this->data);
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
    public function showdetails($id)
    {
        if ($this->session->userdata('type') == "Res") {
            $this->load->model('Restaurantm');
            $this->data['details'] = $this->Restaurantm->restaurant_details_description($id);
            $this->data['details_head'] = $this->Restaurantm->restaurant_details_head($id);
            $this->data['res_rating'] = $this->Restaurantm->get_rating();
            $this->data['rating_avg'] = $this->Restaurantm->get_rating_avg();
            //print_r($this->data);
            $this->load->view('admin_res_datails', $this->data);
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
    public function editadddetail()
    {
        if ($this->session->userdata('type') == "Res") {
            $id = $this->input->post('id');
            $this->load->model('Restaurantm');
            $this->data['editadddetails'] = $this->Restaurantm->editadddetails($id);
            foreach ($this->data['editadddetails'] as $e) {

                echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Res_Admin_Res_Details/add_new_res_details/$e->res_id\" >
                                        <div class=\"form-group\">
                                            <label>Restaurant ID</label>
                                            <input class=\"form-control\" type=\"text\" name=\"res_id\" value=\" $e->res_id \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>rating</label>
                                            <input class=\"form-control\" type=\"text\" name=\"rating\" value=\" $e->rating \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Description</label>
                                            <input class=\"form-control\" type=\"text\" name=\"description\" value=\" $e->description \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Time</label>
                                            <input class=\"form-control\" type=\"text\" name=\"time\" value=\" $e->time \">
                                        </div>
                                       
                                        
                                        <input class=\"btn btn - success\" type=\"submit\">
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
    public function add_new_res_details()

    {
        /*if ($this->session->userdata('type') == "Res") {

            //$id = $this->input->post('res_id');
            //$rating = $this->input->post('rating');
            $description = $this->input->post('description');
            $time = $this->input->post('time');

            $this->load->model('Res_Admin_m');
            $this->Res_Admin_m->add_new_res_details($id, $description, $time);
            redirect(Res_Admin_Res_Details);
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

                $description = $this->input->post('description');
                $time = $this->input->post('time');
                $this->load->model('Res_Admin_m');
                $this->Res_Admin_m->add_new_res_details($id,$description, $time);
                redirect(Res_Admin_Res_Details);


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

    public function insert_rating()
    {
        //redirect(Home);
        //$this->id=$this->input->post('id');
        //$this->res_id=$this->input->post('res_id');
        //$this->user_id=$this->input->post('user_id');
        if ($this->session->userdata('type') == "Res") {
            $this->load->model('Ratingm');
            $this->load->model('Restaurantm');
            $this->data['res_rating'] = $this->Restaurantm->get_rating();
            $this->rating = $this->input->post('rating');
            $this->res_id = $this->input->post('r_id');

            $this->Ratingm->insert_rating($this->rating, $this->r_id);
            echo $this->rating;
            //redirect(Home);
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

    public function insert_comment()
    {
        if ($this->session->userdata('type') == "Res") {
            $this->load->model('Commentm');
            $review = $this->input->post('review_text');
            $res_id = $this->input->post('restaurant_name');
            $this->Commentm->insert_comment($review, $res_id);
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