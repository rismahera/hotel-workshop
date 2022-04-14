<?php
    class Pesan extends CI_Controller
    {
        function index(){
            
            $this->load->view('template/head');
            //$this->load->view('client/navigasi');
            //$this->load->view('template/banner');
            $this->load->view('pesan');
           // $this->load->view('template/footer');
            $this->load->view('template/js'); 
        }
        function cekin(){
            $this->load->view('template/head');
            //$this->load->view('client/navigasi');
            //$this->load->view('template/banner');
            $this->load->view('cekin');
           // $this->load->view('template/footer');
            $this->load->view('template/js'); 
        }
        function save(){
            $nama_depan                    = $this->input->post('nama_depan');
            $nama_tengah                   = $this->input->post('nama_tengah');
            $nama_belakang                 = $this->input->post('nama_belakang');
            $alamat                        = $this->input->post('alamat');
            $kota                          = $this->input->post('kota');
            $provinsi                      = $this->input->post('provinsi');
            $negara                        = $this->input->post('negara');
            $no_identitas                  = $this->input->post('no_identitas');
            $no_tlp                         = $this->input->post('no_tlp');
            $email                         = $this->input->post('email');
             
            
            $add =
             [
                 'nama_depan'                 =>$nama_depan,
                 'nama_tengah'                =>$nama_tengah,
                 'nama_belakang'              =>$nama_belakang,
                 'alamat'                     =>$alamat,
                 'kota'                       =>$kota,
                 'provinsi'                   =>$provinsi,
                 'negara'                     =>$negara,
                 'no_identitas'               =>$no_identitas,
                 'email'                      =>$email,
                 'no_tlp'                     =>$no_tlp,
                
             ];
             $this->db->insert('tbl_konsumen',$add);
             redirect('order');
         }
          function update(){
              $this->load->view('client/update');
          }
        }

     
?>