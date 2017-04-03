<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registrationm extends CI_Model
{
    public function insert_registeruser($name,$emailto,$username,$full_address,$phone_no,$city,$postal_code,$state,$country,$password2){
        $data = array(
            'name' => $name,
            'email' => $emailto,
            'username' => $username,
            'password' => $password2,
            'phone'=>$phone_no,
            'full_address'=>$full_address,
            'city'=>$city,
            'state'=>$state,
            'postcode'=>$postal_code,
            'country'=>$country
        );
        $data = $this->security->xss_clean($data);
            $this->db->insert('user', $data);

            $data2 = array(

                'username' => $username,
                'password' => $password2,
                'type'     => 'User'

            );

        $data = $this->security->xss_clean($data);
            $this->db->insert('login', $data2);

    }
    public function getregisteruser($name,$email,$username,$password1){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/

        $query = $this->db->get_where('registration', array('username' => $username,'email'=>$email,'name'=>$name,'password'=>$password1));
        return $query->result();

    }

    public function check_username($username){

        $this->db->where('username', $username);
        return $this->db->get('user')->row();
    }
}