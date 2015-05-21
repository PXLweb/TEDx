<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zoekresultaten
 *
 * @author 11301172
 */
class zoekresultaten extends CI_Controller {
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
        $this->load->view('resultatenpagina');
        $this->load->view('layout_components/footer');
    }
}
