<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Beranda_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getQuiz_byToken($token)
    {
       $this->db->select('*');
       $this->db->from('tbl_quiz');
       $this->db->where('token', $token);
       $query = $this->db->get();
       return $query->row_array();
    }

    public function getMultipleChoise_SoalbyQuizId($id)
    {
       $this->db->select('*');
       $this->db->from('tbl_quiz_multiple_choice');
       $this->db->where('quiz_id', $id);
       $query = $this->db->get();
       return $query->result_array();
    }

    public function getQuizEsay_byQuzId($id)
    {
       $this->db->select('*');
       $this->db->from('tbl_quiz_esay');
       $this->db->where('quiz_id', $id);
       $query = $this->db->get();
       return $query->row_array();
    }

    public function getQuizLog_byQuiz_Peserta($quiz_id,$peserta_id)
    {
       $this->db->select('*');
       $this->db->from('tbl_quiz_log');
       $this->db->where('quiz_id', $quiz_id);
       $this->db->where('peserta_id', $peserta_id);
       $query = $this->db->get();
       return $query->row_array();
    }

    public function insertQuizLog($data)
    {
        $this->db->insert("tbl_quiz_log", $data);
        return $this->db->insert_id();
    }
    
    public function getQuizLog_byPesertaId($id)
    {
        $query = $this->db->query("SELECT IF(type = 1, (select count(*) as total from tbl_quiz_multiple_choice soal where soal.quiz_id=quiz.id), '-') AS jumsoal, quiz.*, log.*
        FROM tbl_quiz quiz
        JOIN tbl_quiz_log log ON quiz.id = log.quiz_id
        WHERE log.peserta_id='$id'");
        return $query->result_array();
    }

    public function getQuiz_Soal($id)
    {
       $this->db->select('min(id) as id');
       $this->db->from('tbl_question_multiplec_log');
       $this->db->where('answare', '-');
       $this->db->where('quiz_log', $id);
       $query = $this->db->get();
       return $query->row_array();
    }

    public function getAvailable_Soal($id)
    {
       $this->db->select('*');
       $this->db->from('tbl_question_multiplec_log');
       $this->db->where('quiz_log', $id);
       $query = $this->db->get();
       return $query->row_array();
    }

}
