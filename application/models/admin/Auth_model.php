<?php
class Auth_model extends CI_Model{

    public function update($where, $data)
    {
        $this->db->update('tbl_admin', $data, $where);
        return $this->db->affected_rows();
    }

}

