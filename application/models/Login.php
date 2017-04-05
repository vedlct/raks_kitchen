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

        $data = $this->security->xss_clean($data);
        $this->db->insert('login',$data);
    }

    public function insert_res($username,$password){

        $data = array(
            'username' => $username,
            'password' => $password,
            'type'      => 'Res'
        );

        $data = $this->security->xss_clean($data);
        $this->db->insert('login',$data);
    }

    public function check_email($email){
        $this->db->where('email', $email);
        return $this->db->get('user')->row();

    }

    public function get_password($email){
        $query= $this->db->query("select password from user WHERE `email`= '$email'");
        return $query->result();

    }
}


?>