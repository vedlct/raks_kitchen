<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Profilem extends CI_Model
{
    public function getuser($username){

        $query=$this->db->query("SELECT * FROM `user` WHERE `username`= '$username'");
        return $query->result();
    }

    public function updateuser($id,$name,$email,$username,$password,$address,$city,$state,$postcode,$country){



        $data = array(
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'full_address' => $address,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'country' => $country);

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}