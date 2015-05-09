<?php

/**
 * Description of LoginManager
 *
 * @author Kristof
 */
class TestUserManager extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function create() {
        $userData = $this->createUserData();
        
        return $this->db->insert('users', $userData);

//        if ($this->db->insert('users', $userData)) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
    }

    function createUserData() {
//        $options = [
//            'cost' => 11,
//            'salt' => bin2hex(mcrypt_create_iv(36, MCRYPT_DEV_URANDOM))
//        ];

        $userData = [
            'username' => $this->input->post('userName'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'email' => $this->input->post('email'),
            'firstname' => $this->input->post('firstName'),
            'lastname' => $this->input->post('lastName'),
            'telephone' => $this->input->post('tel'),
            'cellphone' => $this->input->post('cell'),
            'creation_date' => date("Y-m-d H:i:s")
        ];

        return $userData;
    }

    function isValid($user, $pwd) {
//        $this->db->query("SELECT * FROM users WHERE password = $user");
//        $this->db->where('username', $user);
        $query = $this->db->get('users');
        echo var_dump($query);

        foreach ($query->result() as $row) {
            echo $row->title;
        }

//        if ($result->num_rows() == 1) {
//            return FALSE;  // 1
//        } else {
////            if (password_verify($pwd, $result['password'])){
//                return FALSE; // 0
////            } else {
////                return FASLE;
////            }
//        }
    }

    function userExists() {
        $this->db->where('username', $this->input->post('userName'));
        $result = $this->db->get('users');

        if ($result->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function emailExists() {
        $this->db->where('email', $this->input->post('email'));
        $result = $this->db->get('users');

        if ($result->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
