<?php
    class Home extends CI_Controller{
        function index(){
            $this->load->view('template/head');
            $this->load->view('template/header');
            $this->load->view('template/banner');
            $this->load->view('home_v');
            $this->load->view('template/footer');
            $this->load->view('template/js');
        }
    }
?>