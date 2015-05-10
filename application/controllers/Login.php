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
            $userManager = new UserManager();
            // Returns an anonymous object representing a DB user row when the credentials are valid.
            $user = $userManager->isValid($userNameOrEmail, $password);
            if ($user) {
                $userManager->setSession();
                echo 'logged in';
                echo var_dump($this->session->all_userdata());
            } else{
                echo 'fail';
            }
        } else {
            echo 'fail';
        }
    }

    public function rememberMe() {
        
    }
}
