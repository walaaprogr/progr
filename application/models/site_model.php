<?php

/**
 *
 */
class Site_Model extends CI_Model {

    public function get() {
        $q = $this -> db -> get('posts');
        if ($q -> mum_rows > 0)
            return $q->result();
        else 
            return FALSE;
    }
    public function insert($data)
    {
        $this->db->insert('posts', $data);
        return ($this ->db->affected_rows() > 0)?TRUE : FALSE;
    }

}
