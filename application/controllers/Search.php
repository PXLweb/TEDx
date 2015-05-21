<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    private $viewData;
    private $navData;
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->load->model('search_model');
        $this->viewData = $dataGenerator->getViewData('header', NULL);
        $this->navData = $dataGenerator->getViewData('navbar', 'nl');
    }

    public function index()
    {
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('search_form');
        $this->load->view('layout_components/footer');
        
    }

    public function execute_search()
    {
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');

        // Use a model to retrieve the results.
        $data['results'] = $this->search_model->get_results($search_term);

        // Pass the results to the view.
        $this->load->view('search_results',$data);
    }

}