<?php

/**
 * Description of LoginManager
 *
 * @author Kristof
 */
class UserManager extends CI_Model {

    private $user;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function create($userData) {
        // Role will be stripped from the userData array for two purposes.
        // 1. We need to know the role for the user_role table in the database.
        // 2. The role_name key-value pair would cause an error on insertion.
        $role = $this->extractRole($userData);
        $roleId = $this->getRoleId($role, $userData['lang']);

        // Create user
        $this->db->insert('users', $userData);
        $userId = $this->db->insert_id();
        // Logging
        $insertResult['userInsert'] = $this->db->affected_rows();

        // Create role insertion data
        $roleData['user_id'] = $userId;
        $roleData['role_id'] = $roleId;
        $this->db->insert('user_role', $roleData);
        // Logging
        $insertResult['roleInsert'] = $this->db->affected_rows();
        return $insertResult;
    }

    function extractRole(&$userData) {
        $role = $userData['role_name'];
        unset($userData['role_name']);
        return $role;
    }

    function getRoleId($roleValue, $lang) {
        $role = $this->translateRole($roleValue, $lang);
        $this->db->select('role_id');
        $this->db->where('role_name', $role);
        $query = $this->db->get('roles');
        return $query->row()->role_id;
    }

    function translateRole($role, $lang) {
        $formData = NULL;
        switch ($lang) {
            case 'nl':
                $this->load->model('lang/Register_nl');
                $formData = new Register_nl();
                break;
            case 'en':
                $this->load->model('lang/Register_en');
                $formData = new Register_en();
                break;
            default:
                $this->load->model('lang/Register_nl');
                $formData = new Register_nl();
                break;
        }

        $roles = $formData->getRoles();
        foreach ($roles as $row) {
            if ($row == $role) {
                $translatedRole = key($roles);
            }
        }
        return $translatedRole;
    }

    function isValid($userNameOrEmail, $password) {
        $this->db->where("username = '" . $userNameOrEmail .
                "' OR email = '" . $userNameOrEmail . "'");
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            if (password_verify($password, $query->row()->password)) {
                $this->saveUser($query->row()); // Gives values to private $user.
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function saveUser($row) {
        $this->user = [
            'user_id' => $row->user_id,
            'username' => $row->username,
            'firstname' => $row->firstname,
            'lastname' => $row->lastname,
            'email' => $row->email,
            'lang' => $row->lang
        ];
        $this->user['role_name'] = $this->getRoleName($this->user['user_id']);
    }

    function getRoleName($userId) {
        $sql = 'SELECT role_name ' .
                'FROM users as u ' .
                'JOIN user_role AS ur ON u.user_id = ur.user_id ' .
                'JOIN roles AS r ON ur.role_id = r.role_id ' .
                "WHERE u.user_id = '" . $userId . "';";
        $query = $this->db->query($sql);
        return $query->row()->role_name;
    }

    function setSession() {
        $this->session->set_userdata($this->user);
    }

    function exists($user) {
        $this->db->where('username', $user);
        $query = $this->db->get('users');

        if ($query->num_rows() == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function userExists($user) {
        $this->db->where('username', $user);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function emailExists($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
