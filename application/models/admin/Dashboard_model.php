<?php
class Dashboard_model extends CI_Model{

    public function count()
    {
        $query = $this->db->query("
            SELECT 
              (SELECT COUNT(*) FROM tbl_peserta) as peserta,
              (SELECT COUNT(*) FROM tbl_quiz) as quiz,
              (SELECT COUNT(*) FROM tbl_quiz_multiple_choice) as soal
        ");
        return $query->row_array();
    }

}

