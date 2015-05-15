<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $viewData = $dataGenerator->getViewData('login', 'nl');
        $navData = $dataGenerator->getViewData('navbar', 'nl');
        
        $this->load->view('layout_components/header', $viewData);
        $this->load->view('layout_components/navbar', $navData);
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
            } else {
                echo 'fail';
            }
        } else {
            echo 'fail';
        }
    }

    public function rememberMe() {
        
    }

}
