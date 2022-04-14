<?php
    class M_jenis extends CI_Model{
       
            function tampil_data(){
            return $this->db->get('tbl_jenis_kamar');
            }
            function get_data($id_jenis){
                $this->db->where('id_jenis', $id_jenis);
                return $this->db->get('tbl_jenis_kamar');
            }
    }
?>