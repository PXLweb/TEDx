<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

    private $viewData;
    private $navData;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->viewData = $dataGenerator->getViewData('header', NULL);
        $this->navData = $dataGenerator->getViewData('navbar', 'nl');
    }

    public function index() {
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('calendar', $this->viewData);
        $this->load->view('layout_components/footer');
    }

    public function nieuw(){
        $this->load->library('calendar');
        echo $this->calendar->generate();
    }
    
}
