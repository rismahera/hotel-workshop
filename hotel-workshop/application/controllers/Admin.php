<?php
    class Admin extends CI_Controller{
        function index(){
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            $this->load->view('partisi/navigasi');
            $this->load->view('admin_v');
            $this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            
        }
    }
?>