<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

    private $viewData;
    private $navData;
    private $eventManager;
    private $formData;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->load->model('managers/EventManager');
        $this->eventManager = new EventManager();
        $this->formData = (new DataGenerator)->getViewData('Events', 'nl');
        $this->viewData = $dataGenerator->getViewData('header', NULL);
        $this->navData = $dataGenerator->getViewData('navbar', 'nl');
    }

    public function index($year=null,$month=null) {
        $this->display($year, $month);
    }

    public function Create(){
        $this->config->set_item('language', 'dutch'); // dutch error messages
        $this->load->library('form_validation');
        
        
    }
    public function display($year=null,$month=null)
    {
        $this->viewData['events'] = $this->eventManager->getEvents();
        if (array_key_exists('role_name', $_SESSION)&& $_SESSION['role_name'] == 'Administrator') 
            {
                $data['calendar']=$this->eventManager->generate($year,$month);
                $this->load->view('events_admin',$data);      
            }else
            {          
                $data['calendar']=$this->eventManager->generate($year,$month);
                $this->load->view('events',$data); 
               
            }
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        
        $this->load->view('layout_components/footer');
    }
    
    

    
    
}
