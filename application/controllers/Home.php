<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        //$this->load->view('index');

        $this->load->model('viewall');
        $data['head']=$this->viewall->show_main_content();
       // print_r($data);
        $data['head_res_ad_more']=$this->viewall->home_resturant_andmore_content();

        $data['head_how_itworks']=$this->viewall->show_howitwork_content();
        $data['head_section_4']=$this->viewall->show_sectionfour_content();
        $data['most_popular']=$this->viewall->most_popular();
        $data['head_section_5']=$this->viewall->show_sectionfive_content();
        $data['head_section_6']=$this->viewall->show_sectionsix_content();





        $this->load->view('index',$data);


    }


    public function login (){

        $this->load->model('Login');
        $result = $this->Login->validate_user($_POST);
        //echo $result;

        if (!empty($result)) {

            $data = [

                'username' => $result->username,
                'id'=>$result->id,
                'type'=>$result->type,
                'loggedin'=>"true"

            ];

            $this->session->set_userdata($data);
            $this->session->userdata($data);



            if ($this->session->userdata('type') == "Admin"){
                redirect('Admin_Home');
            } elseif ($this->session->userdata('type') == "User"){

                redirect('Home');
            } elseif ($this->session->userdata('type') == "Res"){

                redirect('Res_Admin_Home');
            }
            elseif ($this->session->userdata('type') == ""){


            }



        }
        else
        {
            echo "<script>
                        alert('wrong username or password');
                       
					window.location=\"/Rak/Home\";
					
                    </script>";
            // redirect('test');
        }
    }

    public function Logout(){


        /*$this->session->unset_userdata('username');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('type');*/

        $this->session->sess_destroy();
        redirect('Home');
    }


}
