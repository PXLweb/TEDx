<?php

/**
 * Description of Roles
 *
 * @author Kristof
 */

class TedxDB extends CI_Model {
    
    public function getTableRows($table){
        $query = $this->db->get($table);
        return $query->result();
    }
}
