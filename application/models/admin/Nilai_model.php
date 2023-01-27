<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Peserta_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from("tbl_quiz_log");
        $query = $this->db->get();
        return $query->result_array();
    }
}