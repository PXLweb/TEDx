<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $viewDataHome;
    private $userManager;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $this->load->model('managers/UserManager');
        $this->viewDataHome = (new DataGenerator)->getViewData('home', 'nl');
        $this->userManager = new UserManager();
    }

    public function index() {
        $this->load->view('layout_components/header', $this->viewDataHome);
        $this->load->view('home');
        $this->load->view('layout_components/footer');
    }

    public function login() {
        $viewDataLogin = (new DataGenerator)->getViewData('login', 'nl');
        $this->load->view('login', $viewDataLogin);
    }

    public function registeren() {
        $viewDataRegister = (new DataGenerator)->getViewData('register', 'nl');
        $this->load->view('login', $viewDataRegister);
    }

}
