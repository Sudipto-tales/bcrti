<?php


class Books_model extends CI_Model
{

    public function bca_books_get(){
        $this->db->select("*");
        $this->db->from("books_tbl");
        $this->db->where("domain", 'BCA');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function bba_books_get(){
        $this->db->select("*");
        $this->db->from("books_tbl");
        $this->db->where("domain", 'BBA');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function biotech_books_get(){
        $this->db->select("*");
        $this->db->from("books_tbl");
        $this->db->where("domain", 'BIO-TECH');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function others_books_get(){
        $this->db->select("*");
        $this->db->from("books_tbl");
        $this->db->where("domain", 'OTHERS');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>