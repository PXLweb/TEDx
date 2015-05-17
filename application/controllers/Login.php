<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    private $sessionManager;
    private $userManager;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/SessionManager');
        $this->sessionManager = new SessionManager();
        $this->userManager = new UserManager();
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

            $rememberMe = $this->input->post('remember_me');
            log_message('debugRememberMe', var_export($rememberMe));
            $this->sessionManager->saveRememberMeToSession($rememberMe);

            $isUserValid = $this->userManager->isValid($userNameOrEmail, $password);
            if ($isUserValid) {
                $user = $this->userManager->getUser();
                $this->sessionManager->setUser($user);
                redirect('home');
            } else {
                $this->reTry();
            }
        } else {
            $this->reTry();
        }
    }

    public function reTry() {
        session_start();
        $_SESSION['login_failed'] = true;

        redirect('login');
    }

}
