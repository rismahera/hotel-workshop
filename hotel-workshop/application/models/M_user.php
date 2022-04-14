<?php
    class M_user extends CI_Model{
       
            function tampil_data(){
            return $this->db->get('tbl_user');
            }

            function get_data($id_user){
                $this->db->where('id_user', $id_user);
                return $this->db->get('tbl_user');
            }
        
            function profile($username){
                $this->db->where('username', $username);
                return $this->db->get('tbl_user');
            }
    }
?>