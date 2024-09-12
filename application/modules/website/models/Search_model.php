<?php


class Search_model extends CI_Model
{
public function admit_get($criteria = array()) {
    // Start with the base query
    $this->db->select('*');
    $this->db->from('student_tbl');
    
    // Apply search criteria
    if (!empty($criteria['name'])) {
        $this->db->where('name', $criteria['name']);
    
    }
    if (!empty($criteria['fathername'])) {
        $this->db->where('fathername', $criteria['fathername']);
    }
    if (!empty($criteria['dob'])) {
        $this->db->where('dob', $criteria['dob']);
    }
    if (!empty($criteria['stream'])) {
        $this->db->where('stream', $criteria['stream']);
    }
    if (!empty($criteria['sem'])) {
        $this->db->where('sem', $criteria['sem']);
    }

    // Execute the query and return results
    $query = $this->db->get();
    return $query->result_array();
}
public function result_get($criteria = array()) {
    // Start with the base query
    $this->db->select('*');
    $this->db->from('student_tbl');
    
    // Apply search criteria
    if (!empty($criteria['name'])) {
        $this->db->where('name', $criteria['name']);
    
    }
    if (!empty($criteria['roll'])) {
        $this->db->where('roll', $criteria['roll']);
    
    }
    if (!empty($criteria['stream'])) {
        $this->db->where('stream', $criteria['stream']);
    }
    if (!empty($criteria['sem'])) {
        $this->db->where('sem', $criteria['sem']);
    }

    // Execute the query and return results
    $query = $this->db->get();
    return $query->result_array();
}
public function marksheet_get($criteria = array()) {
    // Start with the base query
    $this->db->select('*');
    $this->db->from('student_tbl');
    
    // Apply search criteria
    if (!empty($criteria['name'])) {
        $this->db->where('name', $criteria['name']);
    
    }
    if (!empty($criteria['fathername'])) {
        $this->db->where('fathername', $criteria['fathername']);
    }
    if (!empty($criteria['roll'])) {
        $this->db->where('roll', $criteria['roll']);
    
    }
    if (!empty($criteria['stream'])) {
        $this->db->where('stream', $criteria['stream']);
    }
    if (!empty($criteria['sem'])) {
        $this->db->where('sem', $criteria['sem']);
    }

    // Execute the query and return results
    $query = $this->db->get();
    return $query->result_array();
}

public function qnp_get(){
    $this->db->select("*");
        $this->db->from("qnp_tbl");
        $query = $this->db->get();
        return $query->result_array();
}
}
?>