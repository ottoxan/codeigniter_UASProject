<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_paging extends CI_Model {

    function data_paging($number, $offset) {
        return $this->db->get('tbl_student',$number,$offset)->result();
    }

    function jumlah_data() {
        return $this->db->get('tbl_student')->num_rows();
    }
}