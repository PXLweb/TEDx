<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->model('lang/Login_nl');
        $dutch = new Login_nl();
        $data['lang'] = $dutch;
        $this->load->view('login', $data);
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
