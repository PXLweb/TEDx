<?php

/**
 * Description of LoginManager
 *
 * @author Kristof
 */
class UserManager {

    public function __construct() {
        $this->load->database();
    }

    function isValid($post) {
        return TRUE;
    }

    function create() {
        $userName = $this->input->post('userName');

        $userData = [
            'username' => $userName,
            'password' => md5($this->input->post('password')),
            'email' => $this->input->post('email'),
            'firsname' => $this->input->post('firstName'),
            'lastname' => $this->input->post('lastName'),
            'telephone' => $this->input->post('tel'),
            'cellphone' => $this->input->post('cell'),
            'creation_data' => date("Y-m-d H:i:s")
        ];

        $result = $this->db->insert('users', $userData);
        return $result;
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
