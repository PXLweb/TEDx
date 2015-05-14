<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

    private $viewData;
    private $navData;
    private $forumManager;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $this->viewData = $dataGenerator->getViewData('forum', 'nl');
        $this->navData = $dataGenerator->getNavData('nl');
        $this->load->model('managers/ForumManager');
        $this->forumManager = new ForumManager();
    }

    public function index() {
        $this->viewData['categories'] = $this->forumManager->getCategories();
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('forum', $this->viewData);
        $this->load->view('layout_components/footer');
    }

    public function posts() {
        $this->viewData['posts'] = $this->forumManager->getPosts(1);
        $this->load->view('posts', $this->viewData);
    }

    public function topics() {
        $this->viewData['topics'] = $this->forumManager->getTopics(2);
        $this->load->view('topics', $this->viewData);
    }

    public function categories() {
        $this->viewData['categories'] = $this->forumManager->getCategories();
        $this->load->view('categories', $this->viewData);
    }

}
