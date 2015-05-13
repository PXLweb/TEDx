<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $viewDataHome;
    private $navData;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $this->load->model('managers/UserManager');

        $dataGenerator = new DataGenerator();
        $this->viewDataHome = $dataGenerator->getViewData('home', 'nl');
        $this->navData = $dataGenerator->getNavData('nl');
    }

    public function index() {
        $this->load->view('layout_components/header', $this->viewDataHome);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('home');
        $this->load->view('layout_components/footer');
    }

    public function login() {
//        $userManager = new UserManager();
        $viewDataLogin = (new DataGenerator)->getViewData('login', 'nl');
        $this->load->view('login', $viewDataLogin);
    }

    public function registeren() {
        $viewDataRegister = (new DataGenerator)->getViewData('register', 'nl');
        $this->load->view('login', $viewDataRegister);
    }

}
