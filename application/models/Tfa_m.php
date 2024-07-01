<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tfa_m extends CI_Model{
    
    function __construct() {
        $this->table = 'tfa_tbl';
        $this->column_order = array('tfa_id');
        $this->order = array('tfa_id' => 'desc');
    }
    public function index(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query;
    }
    public function fetch_tfa_users($u_id){
        $this->db->from($this->table);
        $this->db->where(array('tfa_tbl.u_id'=>$u_id, 'tfa_tbl.tfa_stats' => 'active'));
        $query = $this->db->get();
        return $query;
    }
    public function save_tfa($data){
        if($this->db->insert('tfa_tbl',$data)){
            return true;
        }else{
            return false;
        }
    }
    public function delete_tfa($data, $u_id){
        $this->db->where('u_id', $u_id);
        if($this->db->update('tfa_tbl', $data)){
            return true;
        }else{
            return false;
        }
    }
}