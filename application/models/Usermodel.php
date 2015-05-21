<?php
class UserModel extends CI_Model {
 
function getUser($username){
  $this->db->select("*");
  $this->db->from('users');
  $this->db->where('username', $username);
  $query = $this->db->get();
  return $query->result_array();
}
 
}
?>
