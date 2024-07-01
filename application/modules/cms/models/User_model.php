<?php


class User_model extends CI_Model
{
    public function save_file($data)
    {
        return $this->db->insert('faculty_tbl', $data);
    }

    
}