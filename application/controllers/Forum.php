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
        $this->viewData = $dataGenerator->getViewData('forum', 'nl'); // Accessible in view through $lang
        $this->navData = $dataGenerator->getViewData('navbar', 'nl'); // Accessible in view through $navbar
        $this->load->model('managers/ForumManager');
        $this->forumManager = new ForumManager();
    }

//    Loads all categories
    public function index() {
        // Load data.
        $this->viewData['categories'] = $this->forumManager->getCategories();

        // Load views.
        $this->loadHeaderAndNavBar();
        $this->load->view('forum', $this->viewData);
        $this->load->view('layout_components/footer');
    }

//    Loads all posts linked to one topic
    public function posts($topic_id) {
        $viewDataPosts = (new DataGenerator())->getViewData('posts', 'nl');
        $viewDataPosts['topics'] = NULL;
        $viewDataPosts['topicSubject'] = $this->forumManager->getTopicSubject($topic_id);
        $viewDataPosts['posts'] = $this->forumManager->getPosts($topic_id);
        $this->load->view('layout_components/header', $viewDataPosts);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('posts');
    }

//    Loads all topics linked to one category    
    public function category($category_id) {
        $this->viewData['topics'] = $this->forumManager->getTopics($category_id);

        $this->loadHeaderAndNavBar();
        $this->load->view('topics', $this->viewData);
    }

    public function loadHeaderAndNavBar() {
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
    }

}
