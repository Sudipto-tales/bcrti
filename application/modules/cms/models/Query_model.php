<?php


class User_model extends CI_Model
{

    public function insert_to_query_tbl($data)
    {
        $this->db->insert("query_tbl", $data);
        return $this->db->insert_id();
    }
}