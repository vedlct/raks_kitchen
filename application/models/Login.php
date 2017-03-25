<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Model {

    public function validate_user($data) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->db->where('username', $username);
            $this->db->where('password', $password);

        return $this->db->get('login')->row();
    }

    public function insert_user($req_data) {


        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
            'password' => $password,
            'type'      => 'User'
        );

        $this->db->insert('login',$data);
    }

    public function insert_res($username,$password){

        $data = array(
            'username' => $username,
            'password' => $password,
            'type'      => 'Res'
        );

        $this->db->insert('login',$data);
    }
}


?>