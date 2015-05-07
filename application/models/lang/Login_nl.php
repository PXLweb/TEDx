<?php

include $_SERVER['DOCUMENT_ROOT'] . "/tedx/application/models/GlobalVars.php";

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
//include $_SERVER['DOCUMENT_ROOT'] . "/tedx/application/models/GlobalVars.php";
//DEFINE('org', GlobalVars::$statOrganization); // contains 'TEDx'

class Login_nl extends CI_Model{

    private $form_header = "Inloggen";
    private $email_placeholder = "E-mailadres";
    private $email_warning = "Geef een e-mailadres in";
    private $password_placeholder = "Paswoord";
    private $password_warning = "Geef een paswoord in";
    private $remember_me = "Onthoud mij";
    private $signin_button = "Log in";
//    private $organization = org;
    private $pageTitle = "Inloggen";
    private $language = "nl";
    private $userName = "Gebruikersnaam";
    private $userNameWarning = "Geen geldige gebruikersnaam";
    private $email = "E-mailadres";
    private $emailWarning = "Geen geldig e-mailadres";
    private $pwd = "Paswoord";
    private $repeatPwd = "Paswoord opnieuw";
    private $minimalPwdCharacters = 'Minimaal 6 characters';
    private $pwdWarning = "Geef een geldig passwoord in";
    private $role = "Kies een rol";
    private $roles;
    private $rememberMe = "Onthoud mij";

    public function __construct() {
        parent::__construct();
        $this->load->model('classes/Role');
        $this->roles = (new Role)->getRoles();
    }

//    public function getOrganization() {
//        return $this->organization;
//    }
//
//    public function setOrganization($organization) {
//        $this->organization = $organization;
//        return $this;
//    }

    public function getForm_header() {
        return $this->form_header;
    }

    public function setForm_header($form_header) {
        $this->form_header = $form_header;
        return $this;
    }

    public function getEmail_placeholder() {
        return $this->email_placeholder;
    }

    public function setEmail_placeholder($email_placeholder) {
        $this->email_placeholder = $email_placeholder;
        return $this;
    }

    public function getEmail_warning() {
        return $this->email_warning;
    }

    public function setEmail_warning($email_warning) {
        $this->email_warning = $email_warning;
        return $this;
    }

    public function getPassword_placeholder() {
        return $this->password_placeholder;
    }

    public function setPassword_placeholder($password_placeholder) {
        $this->password_placeholder = $password_placeholder;
        return $this;
    }

    public function getPassword_warning() {
        return $this->password_warning;
    }

    public function setPassword_warning($password_warning) {
        $this->password_warning = $password_warning;
        return $this;
    }

    public function getRemember_me() {
        return $this->remember_me;
    }

    public function setRemember_me($remember_me) {
        $this->remember_me = $remember_me;
        return $this;
    }

    public function getSignin_button() {
        return $this->signin_button;
    }

    public function setSignin_button($signin_button) {
        $this->signin_button = $signin_button;
        return $this;
    }

    public function getPageTitle() {
        return $this->pageTitle;
    }

    public function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
        return $this;
    }

    public function getUserNameWarning() {
        return $this->userNameWarning;
    }

    public function setUserNameWarning($userNameWarning) {
        $this->userNameWarning = $userNameWarning;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getEmailWarning() {
        return $this->emailWarning;
    }

    public function setEmailWarning($emailWarning) {
        $this->emailWarning = $emailWarning;
        return $this;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function setPwd($pwd) {
        $this->pwd = $pwd;
        return $this;
    }

    public function getRepeatPwd() {
        return $this->repeatPwd;
    }

    public function setRepeatPwd($repeatPwd) {
        $this->repeatPwd = $repeatPwd;
        return $this;
    }

    public function getMinimalPwdCharacters() {
        return $this->minimalPwdCharacters;
    }

    public function setMinimalPwdCharacters($minimalPwdCharacters) {
        $this->minimalPwdCharacters = $minimalPwdCharacters;
        return $this;
    }

    public function getPwdWarning() {
        return $this->pwdWarning;
    }

    public function setPwdWarning($pwdWarning) {
        $this->pwdWarning = $pwdWarning;
        return $this;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
        return $this;
    }

    public function getRememberMe() {
        return $this->rememberMe;
    }

    public function setRememberMe($rememberMe) {
        $this->rememberMe = $rememberMe;
        return $this;
    }

}
