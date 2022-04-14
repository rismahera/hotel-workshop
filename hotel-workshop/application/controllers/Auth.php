<?php
    class Auth extends CI_Controller
    {
        function index(){
            
            $this->load->view('template/head');
            $this->load->view('template/header');
            //$this->load->view('template/banner');
            $this->load->view('login_v');
            $this->load->view('template/footer');
            $this->load->view('template/js'); 
        }
        
        function proses_login()
        {
            $username       = $this->input->post('username');
            $password       = $this->input->post('password');
            $password       = MD5($password);

            $cek_login =$this->db->get_where('tbl_user',array('username'=>$username ,'password' => $password))->row_array();

            if($cek_login > 0)
            {
                $data_session = array(
                    'username'      => $username,
                    'status'        => "login",
                    'hak_akses'     => $cek_login['hak_akses'],
               );

               $this->session->set_userdata($data_session);
               print_r($data_session);
               if ($data_session['hak_akses'] == 'client')
               {
                   redirect(base_url("order"));
               }
               else
               {
                   redirect(base_url("Admin"));
               }
            }else
               {
                   echo"username atau password salah !";
                   redirect(base_url("auth"));
               }
            
        }
            
              
    }
?>