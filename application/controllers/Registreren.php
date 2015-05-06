<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registreren extends CI_Controller {

    public function index() {
        // Initialize data
        $data = $this->getViewData();

//        // Add content inside <style></style>
//        $data['styleTagContent'] = 'body{ background-color: black; }';  
        // Load views
        $this->load->view('layout_components/header', $data);
        $this->load->view('register');
        $this->load->view('layout_components/footer');
    }

    public function uitvoeren() {

        $this->config->set_item('language', 'dutch'); // dutch error messages
        $this->load->library('form_validation');
        $data = $this->getViewData();

        // validation rules
        $this->form_validation->set_rules('userName', strtolower($data['lang']->getUserName()), 'trim|required|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('firstName', strtolower($data['lang']->getFirstName()), 'trim');
        $this->form_validation->set_rules('lastName', strtolower($data['lang']->getLastName()), 'trim');
        $this->form_validation->set_rules('tel', strtolower($data['lang']->getTel()), 'trim');
        $this->form_validation->set_rules('cell', strtolower($data['lang']->getCell()), 'trim');
        $this->form_validation->set_rules('email', strtolower($data['lang']->getEmail()), 'trim|required|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('password', strtolower($data['lang']->getPwd()), 'required|min_length[6]');
        $this->form_validation->set_rules('passwordRepeat', strtolower($data['lang']->getRepeatPwd()), 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout_components/header', $data);
            $this->load->view('register');
            $this->load->view('layout_components/footer');
        } else {
            // Check if it's OK to create the user
            $this->load->model('managers/UserManager');
            $userManager = new UserManager();
            if ($userManager->userExists()) {
                $data['userExistsError'] = 'Gebruikersnaam al in gebruik';
            }
            if ($userManager->emailExists()) {
                $data['emailExistsError'] = 'E-mailadres al in gebruik';
            } // NOK back to registration
            if (empty($data['userExistsError']) || empty($data['emailExistsError'])) {
                $this->load->view('layout_components/header', $data);
                $this->load->view('register');
                $this->load->view('layout_components/footer');
            } else {
                $created = $userManager->create();
                if ($created) {
                    $this->load->view('registered');
                } else {
                    $this->load->view('layout_components/header', $data);
                    $this->load->view('register');
                    $this->load->view('layout_components/footer');
                }
            }

            $this->load->view('registered');
        }

//        $post = $this->input->post(NULL, TRUE);
//        $data['post'] = $post;
//        $this->load->view('registered', $data);
    }

    public function getViewData() {
        $this->load->model('lang/Register_nl');
        $lang = new Register_nl();
        $data['lang'] = $lang;
        $data['cssLinks'] = site_url('assets/css/register.css');
        return $data;
    }

}
