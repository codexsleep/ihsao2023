<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Soal_model extends CI_Model
{
    public $table = 'tbl_quiz_multiple_choice';
    public $id = 'tbl_quiz_multiple_choice.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function get($id)
    {
       $this->db->select('*');
       $this->db->from($this->table);
       $this->db->where('quiz_id', $id);
       $query = $this->db->get();
       return $query->result_array();
    }

    public function getById($id)
    {
       $this->db->select('*');
       $this->db->from($this->table);
       $this->db->where('id', $id);
       $query = $this->db->get();
       return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function getByquiz($id)
    {
       $this->db->select('*');
       $this->db->from($this->table);
       $this->db->where('quiz_id', $id);
       $query = $this->db->get();
       return $query->row_array();
    }

}
