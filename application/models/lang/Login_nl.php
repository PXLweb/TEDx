<?php

//include $_SERVER['DOCUMENT_ROOT'] . "/tedx/application/models/GlobalVars.php";

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Login_nl extends CI_Model {

    private $viewName = 'login';
    private $formHeader = "Inloggen";
    private $loginButton = "Log in";
    private $pageTitle = "Inloggen";
    private $language = "nl";
    private $userNameOrEmail = "Gebruikersnaam of e-mailadres";
    private $userNameOrEmailWarning = "Geen geldige gebruikersnaam.";
    private $email = "E-mailadres";
    private $emailWarning = "Geen geldig e-mailadres.";
    private $password = "Paswoord";
    private $repeatPassword = "Paswoord opnieuw";
    private $minimalPasswordCharacters = 'Minimaal 6 characters.';
    private $passwordWarning = "Geef een geldig passwoord in.";
    private $role = "Kies een rol";
    private $roles;
    private $rememberMe = "Onthoud mij";

    public function getViewName() {
        return $this->viewName;
    }

    public function setViewName($viewName) {
        $this->viewName = $viewName;
        return $this;
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('classes/Role');
        $this->roles = (new Role)->getRoles();
    }

    public function getFormHeader() {
        return $this->formHeader;
    }

    public function setFormHeader($formHeader) {
        $this->formHeader = $formHeader;
        return $this;
    }

    public function getLoginButton() {
        return $this->loginButton;
    }

    public function setLoginButton($loginButton) {
        $this->loginButton = $loginButton;
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

    public function getUserNameOrEmail() {
        return $this->userNameOrEmail;
    }

    public function setUserNameOrEmail($userNameOrEmail) {
        $this->userNameOrEmail = $userNameOrEmail;
        return $this;
    }

    public function getUserNameOrEmailWarning() {
        return $this->userNameOrEmailWarning;
    }

    public function setUserNameOrEmailWarning($userNameOrEmailWarning) {
        $this->userNameOrEmailWarning = $userNameOrEmailWarning;
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

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getRepeatPassword() {
        return $this->repeatPassword;
    }

    public function setRepeatPassword($repeatPassword) {
        $this->repeatPassword = $repeatPassword;
        return $this;
    }

    public function getMinimalPasswordCharacters() {
        return $this->minimalPasswordCharacters;
    }

    public function setMinimalPasswordCharacters($minimalPasswordCharacters) {
        $this->minimalPasswordCharacters = $minimalPasswordCharacters;
        return $this;
    }

    public function getPasswordWarning() {
        return $this->passwordWarning;
    }

    public function setPasswordWarning($passwordWarning) {
        $this->passwordWarning = $passwordWarning;
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
