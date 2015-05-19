<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

    private $viewData;
    private $navData;
    private $forumManager;
    private $dataGenerator;

    function __construct() {
        parent::__construct();
        // Initialize managers.
        $this->load->model('managers/DataGenerator');
        $this->load->model('managers/ForumManager');
        $this->dataGenerator = new DataGenerator();
        $this->forumManager = new ForumManager();

        // Generate data.
        $this->viewData = $this->dataGenerator->getViewData('forum', 'nl'); // Accessible in view through $lang
        $this->navData = $this->dataGenerator->getViewData('navbar', 'nl'); // Accessible in view through $navbar
    }

//    Loads all categories
    function index() {
        // Load data.
        $this->viewData['categories'] = $this->forumManager->getCategories();

        // Load views.
        $this->loadHeaderAndNavBar();
        $this->load->view('forum', $this->viewData);
        $this->load->view('layout_components/footer');
    }

//    Loads all posts linked to one topic
    function posts($topic_id) {
//        Load data.
        $viewDataPosts = $this->dataGenerator->getViewData('posts', 'nl');
        $_SESSION['topic_id'] = $topic_id;
        $_SESSION['subject'] = $this->forumManager->getTopicSubject($topic_id);
        $viewDataPosts['posts'] = $this->forumManager->getPosts($topic_id);

//        Load views.
        $this->load->view('layout_components/header', $viewDataPosts);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('posts');
        $this->load->view('layout_components/footer');
    }

//    Loads all topics linked to one category    
    function category($category_id) {
        $_SESSION['category_id'] = $category_id;
        $this->viewData = $this->dataGenerator->getViewData('topics', 'nl');
        $this->viewData['topics'] = $this->forumManager->getTopics($category_id);
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('topics');
        $this->load->view('layout_components/footer');
    }

    function deleteTopic($topicId) {
        $this->forumManager->deleteTopic($topicId);

        redirect('forum/category/' . $_SESSION['category_id']);
    }

    function editCategoryTitle($topicId) {
        $this->forumManager->deleteTopic($topicId);

        redirect('forum/category/' . $_SESSION['category_id']);
    }

    function loadHeaderAndNavBar() {
        $this->load->view('layout_components/header', $this->viewData);
        $this->load->view('layout_components/navbar', $this->navData);
    }

    function postTopic() {
        $post = $this->input->post(NULL, TRUE);
        $_SESSION['topic_id'] = $this->forumManager->postTopic($post);

        $_SESSION['comment_id'] = $this->forumManager->postComment($post);
        if ($_SESSION['topic_id'] > 1 && $_SESSION['comment_id'] > 1) {
            redirect('forum/category/' . $_SESSION['category_id']);
        } else {
            redirect('forum/postError');
        }
    }

    function postComment($post) {
        $_SESSION['comment_id'] = $this->forumManager->postComment($post);
        if ($_SESSION['comment_id'] > 1) {
            redirect('forum/posts/' . $_SESSION['topic_id']);
        } else {
            redirect('forum/postError');
        }
    }

    function postError() {
        $this->loadHeaderAndNavBar();
        $this->load->view('errors/post_error');
    }

}
