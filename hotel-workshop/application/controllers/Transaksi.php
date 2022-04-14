<?php
    class Transaksi extends CI_Controller{
        function index(){
            $this->load->model('M_transaksi');
            $data['transaksi'] = $this->M_transaksi->data()->result();
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            $this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            $this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            $this->load->view('transaksi/transaksi_v', $data);
        } 
        function drop($id_transaksi){
            $id_transaksi = $id_transaksi;
            $this->db->delete('tbl_transaksi', ['id_transaksi' => $id_transaksi]);
            redirect('transaksi');
        }
        function edit($id_transaksi){
            $this->load->model('M_transaksi');
            $data['transaksi'] = $this->M_transaksi->get_data($id_transaksi)->row_array();
            $this->load->view('partisi/head');
            $this->load->view('partisi/body');
            //$this->load->view('partisi/navigasi');
            //$this->load->view('admin_v');
            //$this->load->view('partisi/footer');
            $this->load->view('partisi/js');
            $this->load->view('transaksi/edit_transaksi',$data);
        }

        function simpan(){
            $id_transaksi = $this->input->post('id_transaksi');
            $update =
            [
                    
                    'nomor_kamar'              =>  $this->input->post('nomor_kamar'),
                    'harga'                    =>  $this->input->post('harga'),
                   
            ];
            $update = $this->db->update('tbl_transaksi',$update, ['id_transaksi' => $id_transaksi]);
            redirect('transaksi');
        }
        function tambah(){
            $add =
            [
                
                'kamar'                 =>  $this->input->post('kamar'),
                'waktu_sewa'            =>  $this->input->post('waktu_sewa'),
                'jenis_pembayaran'      =>  $this->input->post('jenis_pembayaran'),
               
               
            ];
            $this->db->insert('tbl_transaksi',$add);
            redirect('pesan');
        }

        function print_transaksi($id_transaksi)
        {
        $this->load->model('M_transaksi');
        $data['transaksi'] = $this->t->simpan($id_transaksi);
        $this->load->view('transaksi/v_print',$data);
            
        }
    }
?>