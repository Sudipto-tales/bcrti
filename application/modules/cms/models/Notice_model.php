<?php


class Notice_model extends CI_Model
{
    public function save_file($data)
    {
        // Insert the data into the database
        return $this->db->insert('notice_tbl', $data);
    }

}