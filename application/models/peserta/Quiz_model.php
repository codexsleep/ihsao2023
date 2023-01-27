<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Quiz_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRandom_SoalObjektif($id){

        $this->db->select('*');
        $this->db->from('tbl_quiz_multiple_choice');
        $this->db->where('quiz_id', $id);
        $this->db->order_by('RAND()');
        $query = $this->db->get();
        return $query->result_array();

    }

    public function generate_randomSoal($data)
    {
        $this->db->insert('tbl_question_multiplec_log', $data);
        return $this->db->insert_id();
    }

    public function updatelog($where, $data) 
    {
        $this->db->update('tbl_quiz_log', $data, $where);
        return $this->db->affected_rows();
    }

    public function punishment($where, $data)
    {
        $this->db->update('tbl_question_multiplec_log', $data, $where);
        return $this->db->affected_rows();
    }

    public function getminmax_soal($logid){
        
        $query = $this->db->query("SELECT (SELECT min(id) as min FROM tbl_question_multiplec_log where quiz_log='$logid') as min, (SELECT max(id) as max FROM tbl_question_multiplec_log where quiz_log='$logid') as max, (SELECT count(id) as total FROM tbl_question_multiplec_log where quiz_log='$logid' and answare='-') as total");
        return $query->row_array();  
    }

    public function getSoalbyIdFromSoalLog($id){
        $query = $this->db->query("SELECT *, t.answare as jawab FROM tbl_question_multiplec_log t, tbl_quiz_multiple_choice s  WHERE t.id='$id' and s.id=t.multiple_choice_id");
        return $query->row_array();  
    }

    public function getLognQuizData($id){
        $query = $this->db->query("SELECT * FROM tbl_quiz_log log, tbl_quiz quiz where log.id='$id' and quiz.id=log.quiz_id");
        return $query->row_array();  
    }

    public function getallsoalLog($id){
        $query = $this->db->query("SELECT * FROM tbl_question_multiplec_log WHERE quiz_log='$id'");
        return $query->result_array();  
    }

    public function updateAnsware($where, $data)
    {
        $this->db->update('tbl_question_multiplec_log', $data, $where);
        return $this->db->affected_rows();
    }

    public function updatequizLog($where, $data)
    {
        $this->db->update('tbl_quiz_log', $data, $where);
        return $this->db->affected_rows();
    }
    

}