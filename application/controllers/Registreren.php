<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registreren extends CI_Controller {

    private $formData;          // Contains a language class and a CSS link.
    private $userManager;   // DAO with checks for users
    private $userData;
    private $navData;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/DataGenerator');
        $this->load->model('managers/UserManager');
        $this->formData = (new DataGenerator)->getViewData('register', 'nl');
        $this->navData = (new DataGenerator)->getViewData('navbar', 'nl');
        $this->userManager = new UserManager();
    }

    public function index() {
        $this->load->model('managers/DataGenerator');
        $dataGenerator = new DataGenerator();
        $viewData = $dataGenerator->getViewData('register', 'nl');
        $navData = $dataGenerator->getViewData('navbar', 'nl');

        $this->load->view('layout_components/header', $viewData);
        $this->load->view('layout_components/navbar', $navData);
        $this->load->view('register');
        $this->load->view('layout_components/footer');
    }

    function loadIndexPage() {
        $this->load->view('layout_components/header', $this->formData);
        $this->load->view('register');
        $this->load->view('layout_components/footer');
    }

    function uitvoeren() {
        $this->config->set_item('language', 'dutch'); // dutch error messages
        $this->load->library('form_validation');

        if ($this->isFormValid()) {
            $this->userData = $this->createUserDataFromPost();
            $this->createUser();
        } else {
            $this->loadIndexPage();
        }
    }

    function ok() {
        $this->load->view('layout_components/header', $this->formData);
        $this->load->view('layout_components/navbar', $this->navData);
        $this->load->view('registered');
        $this->load->view('layout_components/footer');
    }

    function createUser() {
        $this->CheckUserAndEmail();  // writes errors in $formData['errors']
        // Create user if it doesn't exist
        if (empty($this->formData['userExistsError']) && empty($this->formData['emailExistsError'])) {
            // Inserts in 2 tables => users, user_role 
            $resultDoubleInsert = $this->userManager->create($this->userData);
            if ($resultDoubleInsert['userInsert'] == TRUE && $resultDoubleInsert['roleInsert'] == TRUE) {
                redirect('registreren/ok');
            } else {
                $this->loadIndexPage();
            }
        } else {
            $this->loadIndexPage();
        }
    }

    function CheckUserAndEmail() {// username checkt of email. gooit die een erorr
        if ($this->userManager->userExists($this->userData['username'])) {
            $this->formData['userExistsError'] = $this->formData['lang']->getUserNameInUseWarning();
        }
        if ($this->userManager->emailExists($this->userData['email'])) {
            $this->formData['emailExistsError'] = $this->formData['lang']->getEmailInUseWarning();
        }
    }

    function createUserDataFromPost() {// post van view registren form 
        $userData = [
            'username' => $this->input->post('userName'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'email' => $this->input->post('email'),
            'firstname' => $this->input->post('firstName'),
            'lastname' => $this->input->post('lastName'),
            'telephone' => $this->input->post('tel'),
            'cellphone' => $this->input->post('cell'),
            'creation_date' => date("Y-m-d H:i:s"),
            'role_name' => $this->input->post('role'),
            'lang' => $this->input->post('language')
        ];

        return $userData;
    }

    function isFormValid() {
        $this->form_validation->set_rules('userName', strtolower($this->formData['lang']->getUserName()), 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('firstName', strtolower($this->formData['lang']->getFirstName()), 'trim');
        $this->form_validation->set_rules('lastName', strtolower($this->formData['lang']->getLastName()), 'trim');
        $this->form_validation->set_rules('tel', strtolower($this->formData['lang']->getTel()), 'trim');
        $this->form_validation->set_rules('cell', strtolower($this->formData['lang']->getCell()), 'trim');
        $this->form_validation->set_rules('email', strtolower($this->formData['lang']->getEmail()), 'trim|required|min_length[3]|max_length[60]');
        $this->form_validation->set_rules('password', strtolower($this->formData['lang']->getPwd()), 'required|min_length[6]');
        $this->form_validation->set_rules('passwordRepeat', strtolower($this->formData['lang']->getRepeatPwd()), 'required|min_length[6]');
        return $this->form_validation->run();
    }

}
