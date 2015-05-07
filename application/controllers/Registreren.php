<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registreren extends CI_Controller {

    private $data; // Contains a language class and a CSS link.

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $this->data = (new DataGenerator)->getViewData('register', 'nl');
    }

    public function index() {
        $this->load->view('layout_components/header', $this->data);
        $this->load->view('register');
        $this->load->view('layout_components/bare-footer');
    }

    function uitvoeren() {

        $this->config->set_item('language', 'dutch'); // dutch error messages
        $this->load->library('form_validation');

        if (!$this->isFormValid()) {
            $this->load->view('layout_components/header', $this->data);
            $this->load->view('register');
            $this->load->view('layout_components/footer');
        }

        $this->load->model('managers/UserManager');
        $this->writeErrorIfExists();  // writes in $data['errors']
        // NOK back to registration
        if (empty($this->data['userExistsError']) && empty($this->data['emailExistsError'])) {
            $created = $this->UserManager->create();
            if ($created) {
                $this->load->view('registered');
            } else {
                $this->load->view('layout_components/header', $this->data);
                $this->load->view('register');
                $this->load->view('layout_components/footer');
            }
        }
    }

    function writeErrorIfExists() {
        if ($this->UserManager->userExists()) {
            $this->data['userExistsError'] = 'Gebruikersnaam al in gebruik';
        }
        if ($this->UserManager->emailExists()) { // === TRUE
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
