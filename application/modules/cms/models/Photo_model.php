<?php


class Photo_model extends CI_Model
{
    public function save_file($data)
    {
        return $this->db->insert('img_tbl', $data);
    }
}