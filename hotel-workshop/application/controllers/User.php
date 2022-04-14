<?php
        class User extends CI_Controller{
            function index(){
                $this->load->model('M_user');
                $data['user'] = $this->M_user->tampil_data()->result();
                $this->load->view('partisi/head');
                $this->load->view('partisi/body');
                $this->load->view('partisi/navigasi');
                //$this->load->view('admin_v');
                $this->load->view('partisi/footer');
                $this->load->view('partisi/js');
                $this->load->view('user/user_v', $data);
            } 

          

            function hapus($id_user){
                $id_user = $id_user;
                $this->db->delete('tbl_user', ['id_user' => $id_user]);
                redirect('user');
           } 

           function edit($id_user){
            $this->load->model('M_user');
            $data['user'] = $this->M_user->get_data($id_user)->row_array();
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            //$this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            $this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            $this->load->view('user/edit',$data);
        }

        function editsimpan(){
            $id_user = $this->input->post('id_user');
            $update =
            [
                'username'          =>  $this->input->post('username'),
                'password'          =>  $this->input->post('password'),
                'hak_akses'         =>  $this->input->post('hak_akses'),
                'aktivasi'          =>  $this->input->post('aktivasi'),
                'no_hp'             =>  $this->input->post('no_hp'),
            ];
            $update = $this->db->update('tbl_user',$update, ['id_user' => $id_user]);
            redirect('user');
        }
        
              //controller data pribadi konsumen
              function profile(){

                $username = $this->session->userdata('username');
                //print_r($username);
                
                $this->load->model('M_user');
                $data['user'] = $this->M_user->profile($username)->row_array();

               // print_r($data['user']);

                $this->load->view('template/head');
                //$this->load->view('client/navigasi');
                //$this->load->view('template/header');
                //$this->load->view('template/banner');
                $this->load->view('client/konsumen_profile', $data);
                //$this->load->view('template/footer');
                $this->load->view('template/js');
            }
    }
?>