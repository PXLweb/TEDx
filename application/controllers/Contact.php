<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    private $viewData;
    private $navData;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->viewData = $dataGenerator->getViewData('home', 'nl');
        $this->navData = $dataGenerator->getViewData('navbar', 'nl');
    }

    public function index() {
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('contact', $this->viewData);
        $this->load->view('layout_components/footer');
    }

}
