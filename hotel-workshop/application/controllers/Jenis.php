<?php
    class Jenis extends CI_Controller{
        function index(){
            $this->load->model('M_jenis');
            $data['jeniskamar'] = $this->M_jenis->tampil_data()->result();
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            $this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            $this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            $this->load->view('jenis/jenis_kamar_v', $data);
        } 
        function tambah_data(){
            
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            //$this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            //$this->load->view('partisi/footer');
            $this->load->view('jenis/tambah_jenis');
            $this->load->view('partisi/js');
        }
        function save(){
            $add =
            [
                'kamar'            =>  $this->input->post('kamar'),
                'keterangan'       =>  $this->input->post('keterangan'),
                'harga'            =>  $this->input->post('harga'),
                'foto'             =>  $this->input->post('foto'),
               
            ];
            $this->db->insert('tbl_jenis_kamar',$add);
            redirect('jenis');
        }
        function hapus($id_jenis){
            $id_jenis = $id_jenis;
            $this->db->delete('tbl_jenis_kamar', ['id_jenis' => $id_jenis]);
            redirect('jenis');
       } 
       function edit($id_jenis){
        $this->load->model('M_jenis');
        $data['jenis'] = $this->M_jenis->get_data($id_jenis)->row_array();
        $this->load->view('partisi/head');
        $this->load->view('partisi/body');
        //$this->load->view('partisi/navigasi');
        //$this->load->view('admin_v');
        //$this->load->view('partisi/footer');
        $this->load->view('partisi/js');
        $this->load->view('jenis/edit',$data);
    }
    function editsimpan(){
        $id_jenis = $this->input->post('id_jenis');
        $update =
        [
                'kamar'            =>  $this->input->post('kamar'),
                'keterangan'       =>  $this->input->post('keterangan'),
                'harga'            =>  $this->input->post('harga'),
                'foto'             =>  $this->input->post('foto'),
        ];
        $update = $this->db->update('tbl_jenis_kamar',$update, ['id_jenis' => $id_jenis]);
        redirect('jenis');
    }
}
?>