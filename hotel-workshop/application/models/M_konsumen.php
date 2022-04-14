<?php
    class M_konsumen extends CI_Model{
       
            function tampil_data(){
                return $this->db->get('tbl_konsumen');
            }

           
            
        
    }
?>