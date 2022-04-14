<?php
    class Order extends CI_Controller{
        function index(){
            $this->load->view('template/head');
            $this->load->view('client/navigasi');
            //$this->load->view('template/header');
            //$this->load->view('template/banner');
            $this->load->view('client/room');
            //$this->load->view('template/footer');
            $this->load->view('template/js');
        }
       
    }
?>