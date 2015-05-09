<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    private $data;          // Contains a language class and a CSS link.
    private $userManager;   // DAO with checks for users

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $this->data = (new DataGenerator)->getViewData('register', 'nl');
    }

    public function index() {
        $this->load->view('layout_components/header', $this->data);
        $this->load->view('test');
        $this->load->view('layout_components/footer');
    }

    function insertUser() {
        $created = $this->db->insert('users', $this->getUserData());
        echo $created;
        if ($created) {
            $this->load->view('registered');
        } else {
            $this->goBack();
        }
    }

    function deleteUser() {
        $this->db->where('username', 'pjotr@pjotr');
        $this->db->delete('users');
    }

    function getRoleId() {
            $this->db->select('role_id');
            $this->db->where('role_name', 'Administrator');
            $query = $this->db->get('roles');
            echo $query->row()->role_id;
    }

    function getUsers() {
        echo 'CI_DB_pdo_result methods' . '<br />';
        $query = $this->db->get('users');
        var_dump(get_class_methods($query));

        echo 'num_rows: ' . $query->num_rows() . '<br />';

        echo 'var_dump($query);' . '<br />';
        var_dump($query);
        $res = $query->result();
//        foreach ($query->result() as $row) {
//            echo $row->title;
//        }
        var_dump($res);
    }

    function getTables() {
        $tables = $this->db->list_tables();

        foreach ($tables as $table) {
            echo $table;
        }
    }

    function getUserData() {
        $userData = [
            'username' => 'pjotr@pjotr',
            'password' => password_hash($this->input->post('pjotr@pjotr'), PASSWORD_BCRYPT),
            'email' => 'pjotr@pjotr'
        ];
        return $userData;
    }

    function goBack() {
        $this->load->view('layout_components/header', $this->data);
        $this->load->view('test');
        $this->load->view('layout_components/footer');
    }

    function CheckUserAndEmail() {
        if ($this->userManager->userExists()) {
            $this->data['userExistsError'] = 'Gebruikersnaam al in gebruik';
        }
        if ($this->userManager->emailExists()) { // === TRUE
            $this->data['emailExistsError'] = 'E-mailadres al in gebruik';
        }
    }

    function isFormValid() {
        $this->form_validation->set_rules('userName', strtolower($this->data['lang']->getUserName()), 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('firstName', strtolower($this->data['lang']->getFirstName()), 'trim');
        $this->form_validation->set_rules('lastName', strtolower($this->data['lang']->getLastName()), 'trim');
        $this->form_validation->set_rules('tel', strtolower($this->data['lang']->getTel()), 'trim');
        $this->form_validation->set_rules('cell', strtolower($this->data['lang']->getCell()), 'trim');
        $this->form_validation->set_rules('email', strtolower($this->data['lang']->getEmail()), 'trim|required|min_length[3]|max_length[60]');
        $this->form_validation->set_rules('password', strtolower($this->data['lang']->getPwd()), 'required|min_length[6]');
        $this->form_validation->set_rules('passwordRepeat', strtolower($this->data['lang']->getRepeatPwd()), 'required|min_length[6]');
        return $this->form_validation->run();
    }

}
