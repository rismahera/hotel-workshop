<?php
    class M_kamar extends CI_Model{
       
            function tampil_data(){
            return $this->db->get('tbl_kamar');
            }
            function get_data($id_kamar){
                $this->db->where('id_kamar', $id_kamar);
                return $this->db->get('tbl_kamar');
            }
             function data_kamar(){
                
                return $this->db->query("SELECT k.*,jk.kamar, jk.keterangan, jk.harga FROM tbl_kamar k 
                inner join tbl_jenis_kamar jk ON k.id_jenis = jk.id_jenis");

             }
    }
?>