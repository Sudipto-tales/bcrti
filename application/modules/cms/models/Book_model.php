<?php


class Book_model extends CI_Model
{
    public function save_file($data)
    {
        // Insert the data into the database
        return $this->db->insert('books_tbl', $data);
    }

}