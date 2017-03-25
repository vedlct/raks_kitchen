<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Restaurant_Req extends CI_Controller
{
    public function index()
    {
        /*
        $this->load->model('Restaurantm');
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_requested_restaurant', $this->data );
        */

        $this->load->model('Restaurantm');
        $this->data['req_restaurant']=$this->Restaurantm->get_submitted_restaurant();
        $this->load->view('admin_requested_restaurant', $this->data );

    }

    public function insert_res(){

        $this->load->model('Restaurantm');
        $this->load->model('Login');

        $id = $this->input->post('id');
        $this->data['res_app']=$this->Restaurantm->show_res_request($id);

        foreach ($this->data['res_app'] as $s){

            $username=$s->username;
            $password=$s->password;
            $name = $s->name;
            $type  = $s->type;
            $address = $s->address;
            $city = $s->city;
            $state= $s->state;
            $postal_code  = $s->postal_code;
            $country = $s->country;
            $time  = $s->time;
            $vat= $s->vat;
            $status  = $s->status;
            $image = $s->image;
            $website =$s->website;
            $email = $s->email;

        }
        $this->Login->insert_res($username,$password);
        $this->Restaurantm->insert_restuarant_req_content($name,$type,$address,$city,$state,$postal_code,$country,$time,$vat,$status,$image,$website,$email,$username,$password);
        $this->Restaurantm->del_res_req($id);
        redirect(Admin_Restaurant_Req);
    }

    public function edit_res($id){

        $this->load->model('Restaurantm');
        $this->Restaurantm->edit_res($id);
        redirect(Admin_Restaurant_Req);
        /*
        $this->load->model('Menum');
        $this->Menum->menuedit($id);
        redirect(Restaurant_menu);
        */
    }

    public function accept_res($id){

        $this->load->model('Restaurantm');
        $this->Restaurantm->accept_res($id);
        redirect(Admin_Restaurant_Req);
        /*
        $this->load->model('Menum');
        $this->Menum->menuedit($id);
        redirect(Restaurant_menu);
        */
    }

    public function delete_res($id){

        $this->load->model('Restaurantm');
        $this->Restaurantm->delete_res($id);
        redirect(Admin_Restaurant_Req);
        /*
        $this->load->model('Menum');
        $this->Menum->menuedit($id);
        redirect(Restaurant_menu);
        */
    }

    public function showedit(){

        $id = $this->input->post('id');
        $this->load->model('Restaurantm');
        $this->data['edit'] = $this->Restaurantm->show_res_request($id);
        // print_r($this->data['edit']);
        foreach ($this->data['edit'] as $e) {
            echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_Restaurant_Req/edit_res/$e->res_id\" >
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
                                        <div class=\"form - group\">
                                            <label>Address</label>
                                            <input class=\"form - control\" type=\"text\" name=\"website\" value=\" $e->website \">
                                        </div>
                                        <div class=\"form - group\">
                                            <label>Address</label>
                                            <input class=\"form - control\" type=\"text\" name=\"email\" value=\" $e->email \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Time</label>
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

}