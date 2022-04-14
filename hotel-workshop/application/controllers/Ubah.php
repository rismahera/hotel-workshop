<?php
    class Ubah extends CI_Controller{
        function index(){
            $this->load->view('template/head');
            //$this->load->view('template/header');
            //$this->load->view('template/banner');
            $this->load->view('password');
            $this->load->view('template/footer');
            $this->load->view('template/js'); 
        }
        function proses_gantipassword(){
            $username       =$this->input->post('username');
            $password1      =$this->input->post('password1');
            $password2      =$this->input->post('password2');

            if ($password1 ==$password2 ) {

                $password1 = MD5($password1);

                $data = array(
                    'password' =>$password1
                );
                $where = array(

                'username' =>$username
                );
                $this->db->where($where);
                $this->db->update('tbl_user', $data);
                redirect(base_url("Auth"));
            }else{
                echo "password yang anda masukkan salah";
                redirect(base_url("Ubah/proses_gantipassword"));
            }  
        }
    }
?>