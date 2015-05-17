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
//        Load data.
        $viewDataPosts = (new DataGenerator())->getViewData('posts', 'nl');
        $viewDataPosts['topics'] = NULL;
        $_SESSION['topicId'] = $topic_id;
        $_SESSION['topicSubject'] = $this->forumManager->getTopicSubject($topic_id);
//        $viewDataPosts['topicId'] = $topic_id;
//        $viewDataPosts['topicSubject'] = $this->forumManager->getTopicSubject($topic_id);
        $viewDataPosts['posts'] = $this->forumManager->getPosts($topic_id);

//        Load views.
        $this->load->view('layout_components/header', $viewDataPosts);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('posts');
        $this->load->view('layout_components/footer');
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

    public function postComment() {
        // Assemble row for posts table.
        print_r($_POST);
        $postData = array(
            'topic_id' => $_SESSION['topicId'],
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'guest_name' => $this->input->post('guest_name')
        );
        if (NULL === $this->input->post('posted_by')) {
            $postData['posted_by'] = 6; // Id of anonymous user.
        } else {
            $postData['posted_by'] = $this->input->post('posted_by');
        }

        $insertedRows = $this->forumManager->postComment($postData);
        if ($insertedRows == 1) {
            redirect('forum/posts/' . $_SESSION['topicId']);
        } else {
            redirect('forum/postError');
        }
    }

    public function postError() {
        $this->loadHeaderAndNavBar();
        $this->load->view('errors/post_error');
    }

}
