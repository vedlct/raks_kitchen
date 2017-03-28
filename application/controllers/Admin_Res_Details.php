<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Res_Details extends CI_Controller {

    public function index()
    {
    $this->load->model('Restaurantm');
    $this->data['res_details']= $this->Restaurantm->restaurant_details();


   /* $this->data['res_rating']= $this->Restaurantm->get_rating();
    $this->data['rating_avg']= $this->Restaurantm->get_rating_avg();*/

    $this->load->view('add_res_details',$this->data);



    }
    public function showdetails($id)
    {
        $this->load->model('Restaurantm');
        $res_id = $id;
        $this->data['details']= $this->Restaurantm->restaurant_details_description($id);
        $this->data['details_head']= $this->Restaurantm->restaurant_details_head($id);
        $this->data['res_rating']= $this->Restaurantm->get_rating($res_id);
        $this->data['rating_avg']= $this->Restaurantm->get_rating_avg($res_id);
        //print_r($this->data);
        $this->load->view('admin_res_datails',$this->data);
    }
    public function editadddetail()
    {
        $id = $this->input->post('id');
        $this->load->model('Restaurantm');
        $this->data['editadddetails'] = $this->Restaurantm->editadddetails($id);
        foreach ($this->data['editadddetails'] as $e) {

            echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_Res_Details/add_new_res_details/$e->res_id\" >
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
    public function add_new_res_details()

    {
        $id=$this->input->post('res_id');
        //print_r($id);

        $description = $this->input->post('description');
        $time = $this->input->post('time');

        $this->load->model('Restaurantm');
        $this->Restaurantm->add_new_res_details($id,$description,$time);
        redirect('Admin_Res_Details');
    }

    public function insert_rating(){


        if ($this->session->userdata('username') != null) {
            $this->load->model('Ratingm');
            $rating = $this->input->post('rating');
            $res_id = $this->input->post('r_id');
            $username = $this->session->userdata('username');
            $this->Ratingm->insert_rating($rating, $res_id, $username);


        }


    }

    public function insert_comment()
    {
        $this->load->model('Commentm');
        //$review = $this->input->post('review_text');
        //$res_id = $this->input->post('restaurant_name');
        $username = $this->session->userdata('username');
        $this->Commentm->insert_comment($username);
        redirect(Admin_Res_Details::get_instance());
    }

    public function editresdetails()
    {
        $id=$this->input->post('id');
        $this->load->model('Restaurantm');
        $this->data['t']=$this->Restaurantm->edit_res_details($id);
        foreach ($this->data['t'] as $e){

            echo "
                    
                    <form role=\"form\" method=\"post\" action=\"http:/Rak/Admin_Res_Details/add_new_res_details\" >
                                        
                                        <input class=\"form - control\"type=\"hidden\" name=\"res_id\" value=\"$e->res_id\">
                                        <div class=\"form-group\">
                                            <label>Description</label>
                                            <input class=\"form-control\"type=\"text\" name=\"description\" value=\"$e->description\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Time</label>
                                            <input class=\"form-control\"type=\"text\" name=\"time\" value=\"$e->time\">
                                        </div>
                                        <input class=\"btn btn-success\" type=\"submit\">
                                    </form>
            
            ";
        }


    }

    public function edit_res_details()
    {
        $name=$this->input->post('name');
        $description=$this->input->post('description');
        $time=$this->input->post('time');


        $this->load->model('Restaurantm');
        $this->Restaurantm->edit_res_details($name,$description,$time);
        redirect('Admin_Res_Details');


    }

}