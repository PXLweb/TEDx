
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profiel
 *
 * @author 11301172
 */
class Profiel extends CI_Controller {
     private $viewData;
    private $navData;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->load->database(); // load database
   $this->load->model('UserModel'); // load model
        $this->viewData = $dataGenerator->getViewData('header', NULL);
        $this->navData = $dataGenerator->getViewData('navbar', 'nl');
    }

    public function index() {
        $this->load->model('UserModel');
        $this->load->library('upload');
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->data['user'] = $this->UserModel->getUser($_SESSION["username"]); // calling User model method getUser()
        $this->load->view('profielpagina', $this->data); // load the view file , we are passing $data array to view file
        $this->load->view('layout_components/footer');
    }
}
