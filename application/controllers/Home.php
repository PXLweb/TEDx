<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $viewDataHome;
    private $viewDataNav;
    private $userManager;
    private $sessionManager;
    private $dataGenerator;

    public function __construct() {
        parent::__construct();
        // Init $userManager.
        $this->load->model('managers/UserManager');
        $this->userManager = new UserManager();

        $this->load->model('managers/SessionManager');
        $this->sessionManager = new SessionManager();

        // Generate data.
        $this->load->model('managers/DataGenerator');
        $this->dataGenerator = new DataGenerator();
        $this->viewDataHome = $this->dataGenerator->getViewData('home', 'nl');
        $this->viewDataNav = $this->dataGenerator->getViewData('navbar', 'nl');
    }

    public function index() {
        $this->sessionManager->init();
        $this->load->view('layout_components/header', $this->viewDataHome);
        $this->load->view('layout_components/navbar', $this->viewDataNav);
        $this->load->view('home');
        $this->load->view('layout_components/footer');
    }

    public function login() {
        $viewDataLogin = $this->dataGenerator->getViewData('login', 'nl');
        $this->load->view('login', $viewDataLogin);
    }

    public function logout() {
        $this->sessionManager->restartSession();
        $_SESSION['user']['logged_in'] = FALSE;
        redirect('home');
    }

    public function registeren() {
        $viewDataRegister = (new DataGenerator)->getViewData('register', 'nl');
        $this->load->view('login', $viewDataRegister);
    }

}
