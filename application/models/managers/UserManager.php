<?php

/**
 * Description of LoginManager
 *
 * @author Kristof
 */
class UserManager extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function create() {
        $userData = $this->createUserData();

        if ($this->db->insert('users', $userData)) {
            return TRUE;
        } else {
            return FALSE;
        }
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
        $password = password_hash($pwd, PASSWORD_BCRYPT);
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
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
