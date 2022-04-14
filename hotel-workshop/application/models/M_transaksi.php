<?php
    class M_transaksi extends CI_Model{
       
            function tampil_data(){
            return $this->db->get('tbl_transaksi');
            }
            
            function get_data($id_transaksi){
                $this->db->where('id_transaksi', $id_transaksi);
                return $this->db->get('tbl_transaksi');
            }

            function data(){
                
                return $this->db->query("SELECT t.*,jk.kamar, jk.kamar, k.nomor_kamar FROM tbl_transaksi t
                inner join tbl_jenis_kamar jk ON t.id_jenis = jk.id_jenis inner join tbl_kamar k ON t.id_kamar = k.id_kamar");

             }
             function simpan($id_transaksi)
            {
                return $this->db->get_where('tbl_transaksi', array('id_transaksi'=> $id_transaksi))->result();
            }
    }
?>