<?php
    class Kamar extends CI_Controller{
        function index(){
            $this->load->model('M_kamar');
            $data['kamar'] = $this->M_kamar->data_kamar()->result();
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            $this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            $this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            $this->load->view('kamar/kamar_v', $data);
        } 
        function tambah_data(){
            
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            //$this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            $this->load->view('kamar/tambah_kamar');
            //$this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            
        }
        function save(){
            $add =
            [
                'nomor_kamar'       =>  $this->input->post('nomor_kamar'),
                'id_jenis'          =>  $this->input->post('id_jenis'),
               
            ];
            $this->db->insert('tbl_kamar',$add);
            redirect('kamar');
        }
        function hapus($id_kamar){
            $id_kamar = $id_kamar;
            $this->db->delete('tbl_kamar', ['id_kamar' => $id_kamar]);
            redirect('kamar');
       } 
       function edit($id_kamar){
        $this->load->model('M_kamar');
        $data['kamar'] = $this->M_kamar->get_data($id_kamar)->row_array();
        $this->load->view('partisi/head');
        $this->load->view('partisi/body');
        //$this->load->view('partisi/navigasi');
        //$this->load->view('admin_v');
        //$this->load->view('partisi/footer');
        $this->load->view('partisi/js');
        $this->load->view('kamar/edit_kamar',$data);
    }
    function editsimpan(){
        $id_kamar = $this->input->post('id_kamar');
        $update =
        [
                'nomor_kamar'       =>  $this->input->post('nomor_kamar'),
                'id_jenis'          =>  $this->input->post('id_jenis'),
           
        ];
        $update = $this->db->update('tbl_kamar',$update, ['id_kamar' => $id_kamar]);
        redirect('kamar');
    }
}
?>