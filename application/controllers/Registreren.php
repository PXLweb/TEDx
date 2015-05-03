<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registreren extends CI_Controller {

    public function index() {
        $this->load->model('lang/Register_nl');
        $lang = new Register_nl();
        $data['lang'] = $lang;
        $this->load->view('register', $data);
    }

    public function uitvoeren() {
        
    }

}
