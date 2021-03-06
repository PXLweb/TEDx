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
        $this->load->helper('captcha');
        $this->load->model('managers/DataGenerator');
        $this->load->model('managers/ForumManager');
        $this->load->model('managers/Captcha');
        $this->dataGenerator = new DataGenerator();
        $this->forumManager = new ForumManager();

        // Generate data.
        $this->viewData = $this->dataGenerator->getViewData('forum', 'nl'); // Accessible in view through $lang
        $this->navData = $this->dataGenerator->getViewData('navbar', 'nl'); // Accessible in view through $navbar

        
        // START SETUP VAN DE CAPTCHA
        try {
            $xml = @new SimpleXMLElement('http://textcaptcha.com/api/a', NULL, TRUE);
        } catch (Exception $e) {
            $fallback = '<captcha>';
            $fallback .= '<question>Is ice hot or cold?</question>';
            $fallback .= '<answer>' . md5('cold') . '<answer>';
            $fallback .= '</captcha>';
            $xml = new SimpleXMLElement($fallback);
        }

        // store answers in session for use later
        $answers = array();
        foreach ($xml->answer as $hash) {
            $answers[] = (string) $hash;
        }
        $this->session->set_userdata('captcha_answers', $answers);
        // load vars into view
        $this->load->vars(array('captcha' => (string) $xml->question));
        // EINDE SETUP VAN DE CAPTCHA
        
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

        $this->load->library('form_validation');
        $this->form_validation->set_rules('captcha', 'captcha', 'required|callback_check_captcha');

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

    function postComment() {
        $post = $this->input->post(NULL, TRUE);
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

    public function check_captcha($string) {
        $user_answer = md5(strtolower(trim($string)));
        $answers = $this->session->userdata('captcha_answers');

        if (in_array($user_answer, $answers)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_captcha', 'Your answer was incorrect!');
            return FALSE;
        }
    }

}
