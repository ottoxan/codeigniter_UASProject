<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

    function ambil_data(){
        return $this->db->get('tbl_student');
    }

    function input_data($data) {
        try {
            $this->db->insert('tbl_student', $data);
            return true;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return false;
        }
        
    }

    function hapus_data($id) {
        try {
            $this->db->where('id_student', $id);
            $this->db->delete('tbl_student');

            
            
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            }else {
                throw new Exception("Gagal menghapus data atau data tidak ditemukan");
                
            }
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return FALSE;
        }
    }

    function getById($id) {
        $query = $this->db->get_where('tbl_student', array('id_student' =>$id));

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return NULL;
        }
    }

    function update_data($data, $id) {
        try {
            $this->db->where('id_student', $id);
            $this->db->update('tbl_student', $data);
            return true;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return false;
        }
    }
}