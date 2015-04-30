<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        // To pass values to a view, it has to be in an array.
//        $data['page_title'] = 'Home'; 
//        $this->load->view('layout_components/header', $data);
//        $this->load->view('layout_components/carousel');
        $this->load->view('home');
//        $this->load->view('layout_components/footer');
    }

    public function login() {
        $this->load->view('home');
    }

}
