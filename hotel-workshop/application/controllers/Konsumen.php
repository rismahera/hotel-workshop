<?php
    class Konsumen extends CI_Controller{
        function index(){
            $this->load->model('M_konsumen');
            $data['konsumen'] = $this->M_konsumen->tampil_data()->result();
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            $this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            $this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            $this->load->view('konsumen/konsumen_v', $data);
        } 
        function hapus($id_konsumen){
            $id_konsumen = $id_konsumen;
            $this->db->delete('tbl_konsumen', ['id_konsumen' => $id_konsumen]);
            redirect('konsumen');
       } 
    }
?>