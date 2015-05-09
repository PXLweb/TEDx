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

    public function valideren() {
        // returns true when inputEmail and inputPassword contain a value, if not,
        // an error is added to $errors (can 
        if ($this->input->post('userNameOrEmail') && $this->input->post('password')) {
            $userNameOrEmail = $this->input->post('userNameOrEmail');
            $password = $this->input->post('password');
            $this->load->model('managers/UserManager');
            if ((new UserManager())->isValid($userNameOrEmail, $password)) {
                
                echo 'logged in';
            } else{
                echo 'fail';
            }
        }
    }

    public function rememberMe() {
        
    }

    public function loggedin() {
        $this->load->view('loggedin');
    }

}
