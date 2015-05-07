<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->model('managers/DataGenerator');
        $data = (new DataGenerator)->getViewData('login', 'nl');
        $this->load->view('layout_components/header', $data);
        $this->load->view('login');
        $this->load->view('layout_components/footer');
    }

    public function validate() {
        // returns true when inputEmail and inputPassword contain a value
        if ($this->input->post('inputEmail') && $this->input->post('inputPassword')) {
            $user = $this->input->post('inputEmail');
            $password = $this->input->post('inputPassword');

            $this->load->model('Managers/LoginManager');
            $loginManager = new LoginManager();
            if ($loginManager->isValid($user, $password)) {
                redirect('/login/loggedin');
            } else {
                redirect('/login/index');
            }
        }
    }

    public function rememberMe() {
        
    }

    public function loggedin() {
        $this->load->view('loggedin');
    }

}
