<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_Menu extends CI_Controller
{
    public function index()
    {

    }
    public function show_menu($type_id)
    {
        if ($this->session->userdata('username') == null) {

            $this->load->model('Menum');
            $this->load->model('Restaurantm');
            $this->data['show_menu'] = $this->Menum->show_menu($type_id);
            $this->data['show_type'] = $this->Menum->show_type($type_id);
            $this->data['menu_attr'] = $this->Menum->show_menu_attr($type_id);
            $this->data['rating_avg'] = $this->Restaurantm->get_rating_avg($type_id);
            $this->data['id'] = $type_id;
            $this->data['show_item_type'] = $this->Menum->show_item_type();
            $this->load->view('detail_page_npeople', $this->data);
        } else {
            $this->load->model('Menum');
            $this->load->model('Restaurantm');
            $this->data['show_menu'] = $this->Menum->show_menu($type_id);
            $this->data['show_type'] = $this->Menum->show_type($type_id);
            $this->data['menu_attr'] = $this->Menum->show_menu_attr($type_id);
            $this->data['rating_avg'] = $this->Restaurantm->get_rating_avg($type_id);
            $this->data['id'] = $type_id;
            $this->data['show_item_type'] = $this->Menum->show_item_type();
            $this->load->view('detail_page', $this->data);

        }
    }

    public function inser_cart(){
        $id = $this->input->post('id');

        $this->load->model('Menum');
        $this->data['get_cart_pro'] = $this->Menum->get_pro_cart($id);

       // print_r($this->data['get_cart_pro']);

        foreach ($this->data['get_cart_pro'] as $cr) {

            $cid=$cr->id;
            $citem_name=$cr->item_name;
            $price= $cr->price;
            $type_id=$cr->type_id;
            $menu_attr=$cr->item_attribute;

            $data = array(
                'id' => $cid,
                'qty' => 1,
                'price' => $price,
                'name' => $citem_name,
                'coupon' => $type_id,
                'options' => array('Size' => $menu_attr)
            );

            $this->cart->insert($data);

            //echo $cr->id;

        }
    }

    public function insert_cart_withoutattr()
    {

        $id = $this->input->post('id');

        $this->load->model('Menum');
        $this->data['get_cart'] = $this->Menum->get_pro_cart_withoutattr($id);

        //  print_r($this->data['get_cart']);

        foreach ($this->data['get_cart'] as $cr) {

            $cid = $cr->id;
            $citem_name = $cr->item_name;
            $price = $cr->item_price;
            $type_id=$cr->type_id;

            $data = array(
                'id' => $cid,
                'qty' => 1,
                'price' => $price,
                'name' => $citem_name,
                'coupon' => $type_id,
                'options' => array('Size' => "")
            );

            // print_r($data);
            $this->cart->insert($data);
        }
    }




    public function update_add_cart(){

        $id = $this->input->post('id');
        $amount = $this->input->post('amount');


        $data = array(
            'rowid' => $id,
            'qty' => $amount,

        );
        $this->cart->update($data);



    }



    public function update_minus_cart(){

        $id = $this->input->post('id');
        $amount = $this->input->post('amount');


        $data = array(
            'rowid' => $id,
            'qty' => $amount,

        );
        $this->cart->update($data);

        echo $id;
    }
    public function order_now(){

        if ($this->session->userdata('type') == "User") {
            $usename=$this->session->userdata('username');
            $this->load->model('Userm');
            $this->data['show_userinfo'] = $this->Userm->show_userinfo($usename);
            $this->load->view('cart',$this->data);
            /*foreach ($this->data['show_userinfo'] as $e){

                //print_r($e->res_id);
                $id=$e->id;
                //print_r($id);

        }*/
        }else {

            $this->load->view('cart');
        }


        //$this->load->view('cart');
    }
    public function order_confirm(){

        //$this->load->view('cart');
        $name = $this->input->post('name_order');
        //$userid=$this->session->userdata('userid');
        $username= $this->session->userdata('username');;
        $phone = $this->input->post('tel_order');
        $email = $this->input->post('email_order');
        $address = $this->input->post('address_order');
        $city = $this->input->post('city_order');
        $state = $this->input->post('state_order');
        $post_code = $this->input->post('pcode_oder');
        $country = $this->input->post('country_order');
        $order_day = $this->input->post('delivery_schedule_day');
        $order_time = $this->input->post('order_time');
        $date=$this->input->post('date');
        $id = $this->input->post('res_id');
        //$att_id = $this->input->post('attr_id');
       // $price = $this->input->post('price');
        $quantity=$this->input->post('qty');
        //$item_name = $this->input->post('item_name');
        //print_r($id);

        //$this->load->model('Orderm');
        //$this->data['show_resinfo'] = $this->Orderm->show_resinfo($id,$att_id);
        foreach ($this->cart->contents() as $c) {

          //  $res_name=$e->name;
            //$item_attr=$e->item_attribute;

            $item_name = $c['name'];
            $price=$c['price'];
            $qty = $c['qty'];
            $type_id = $c['coupon'];
            $size=  $c['options']['Size'];

            //print_r($item_attr);
            $this->load->model('Orderm');
            $this->Orderm->order($name,$username,$phone,$email,$address,$city,$state,$post_code,$country,$order_day,$order_time,$date,$qty,$size,$price,$type_id,$item_name);
        }
        redirect('Home');
        //print_r($res_id);



    }
}