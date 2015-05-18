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
        if ($this->input->post('userNameOrEmail') && $this->input->post('password')) {
            $userNameOrEmail = $this->input->post('userNameOrEmail');
            $password = $this->input->post('password');
            $isUserValid = $this->userManager->isValid($userNameOrEmail, $password);
            if ($isUserValid) {
                $user = $this->userManager->getUser();
                $user['remember_me'] = $this->input->post('remember_me');
                $this->sessionManager->setUser($user);
                $this->forward();
            } else {
                $this->reTry();
            }
        } else {
            $this->reTry();
        }
    }

    public function reTry() {
        session_start();
        $_SESSION['login_failed'] = TRUE;

        redirect('login');
    }

    public function forward() {
        if(array_key_exists('route_previous_page', $_SESSION) && isset($_SESSION['route_previous_page'])) {
            $url = $_SESSION['route_previous_page'];
            unset($_SESSION['route_previous_page']);
            redirect($url);
        }else{
            redirect('home');
        }
    }

}
