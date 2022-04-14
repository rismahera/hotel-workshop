<?php
    class Register extends CI_Controller{
        function index(){
            $this->load->view('template/head');
            $this->load->view('template/header');
            //$this->load->view('template/banner');
            $this->load->view('register');
            $this->load->view('template/footer');
            $this->load->view('template/js');
        }
        function proses_register(){
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $password   = md5($password);
            $no_hp      = $this->input->post('no_hp');

            $data = array(
                'username' => $username,
                'password' => $password,
                'no_hp'    => $no_hp,
            );
            $this->db->insert('tbl_user',$data);
            redirect(base_url("auth"));
        }
    }
?>