<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index(){
        $this->load->view('user_profile');
    }

    public function showuser($username)
    {
        $this->load->model('Profilem');
        $this->data['profile'] = $this->Profilem->getuser($username);


        $this->load->view('user_profile', $this->data);

    }

    public function update_user(){

       /* $email=$this->input->post('email');
        print_r($email);*/

        $id =$this->input->post('id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $address=$this->input->post('address');
        $city=$this->input->post('city');
        $state=$this->input->post('state');
        $postcode=$this->input->post('postcode');
        $country=$this->input->post('country');

        //print_r($email);
        $this->load->model('Profilem');
        $this->Profilem->updateuser($id,$name,$email,$username,$password,$address,$city,$state,$postcode,$country);
        redirect( base_url());
    }



}