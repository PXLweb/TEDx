<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $viewDataHome;
    private $viewDataNav;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->viewDataHome = $dataGenerator->getViewData('home', 'nl');
        $this->viewDataNav = $dataGenerator->getViewData('navbar', 'nl');
    }

    public function index() {
        $this->load->view('layout_components/header', $this->viewDataHome);
        $this->load->view('layout_components/navbar', $this->viewDataNav);
        $this->load->view('home');
        $this->load->view('layout_components/footer');
    }

    public function login() {
        $this->load->model('managers/UserManager');
        $viewDataLogin = (new DataGenerator)->getViewData('login', 'nl');
        $this->load->view('login', $viewDataLogin);
    }

    public function registeren() {
        $viewDataRegister = (new DataGenerator)->getViewData('register', 'nl');
        $this->load->view('login', $viewDataRegister);
    }

}
