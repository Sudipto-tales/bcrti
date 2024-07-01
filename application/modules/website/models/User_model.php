<?php


class User_model extends CI_Model
{

    public function bca_faculty_get()
    {
        $this->db->select("*");
        $this->db->from("faculty_tbl");
        $this->db->where("u_group", 'BCA');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function bba_faculty_get()
    {
        $this->db->select("*");
        $this->db->from("faculty_tbl");
        $this->db->where("u_group", 'BBA');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function bt_faculty_get()
    {
        $this->db->select("*");
        $this->db->from("faculty_tbl");
        $this->db->where("u_group", 'BT');
        $query = $this->db->get();
        return $query->result_array();
    }

    
}