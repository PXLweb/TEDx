<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    private $viewData;
    private $navData;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->viewData = $dataGenerator->getViewData('home', 'nl');
        $this->navData = $dataGenerator->getNavData('nl');
    }

    public function index() {
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('about', $this->viewData);
        $this->load->view('layout_components/footer');
    }

}
