<?php


class Notice_model extends CI_Model
{

    public function admission_data_get()
    {
        $this->db->select("*");
        $this->db->from("notice_tbl");
        $this->db->where("type", 'ADMISSION');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_data_get()
    {
        $this->db->select("*");
        $this->db->from("notice_tbl");
        $this->db->where("type", 'RESULT');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function academic_data_get()
    {
        $this->db->select("*");
        $this->db->from("notice_tbl");
        $this->db->where("type", 'ACADEMIC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function examination_data_get()
    {
        $this->db->select("*");
        $this->db->from("notice_tbl");
        $this->db->where("type", 'EXAMINATION');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_to_notice_tbl($data)
    {
        $this->db->insert("notice_tbl", $data);
        return $this->db->insert_id();
    }
    
}