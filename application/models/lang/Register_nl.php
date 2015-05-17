<?php

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Register_nl {

    private $viewName = 'register';
    private $pageTitle = "Registreren";
    private $language = "nl";
    private $formHeader = "Registreren";
    private $userName = "Gebruikersnaam";
    private $userNameWarning = "Geen geldige gebruikersnaam.";
    private $userNameInUseWarning = "Deze gebruikersnaam is al in gebruik.";
    private $firstName = "Voornaam";
    private $lastName = "Achternaam";
    private $email = "E-mailadres";
    private $emailWarning = "Geen geldig e-mailadres.";
    private $emailInUseWarning = "Dit e-mailadres is al in gebruik.";
    private $tel = "Telefoonnummer";
    private $cell = "Mobiel nummer";
    private $pwd = "Paswoord";
    private $repeatPwd = "Paswoord opnieuw";
    private $minimalPwdCharacters = 'Minimaal 6 characters';
    private $pwdWarning = "Geef een geldig passwoord in";
    private $pwdUniqueWarning = "Wachtwoorden niet identiek";
    private $role = "Kies een rol";
    private $roles;
    private $rememberMe = "Onthoud mij";
    private $notifications = "Wenst u nieuws te ontvangen";
    private $registerBtn = "Registreren";

    public function __construct() {
        $this->roles['User'] = 'Gebruiker';
        $this->roles['Priviliged user'] = 'Ervaren gebruiker';
        $this->roles['Author'] = 'Auteur';
        $this->roles['Moderator'] = 'Moderator';
        $this->roles['Administrator'] = 'Administrator';
    }

    public function getViewName() {
        return $this->viewName;
    }

    public function setViewName($viewName) {
        $this->viewName = $viewName;
        return $this;
    }

    public function getUserNameInUseWarning() {
        return $this->userNameInUseWarning;
    }

    public function setUserNameInUseWarning($userNameInUseWarning) {
        $this->userNameInUseWarning = $userNameInUseWarning;
        return $this;
    }

    public function getEmailInUseWarning() {
        return $this->emailInUseWarning;
    }

    public function setEmailInUseWarning($emailInUseWarning) {
        $this->emailInUseWarning = $emailInUseWarning;
        return $this;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function setLanguagen($language) {
        $this->language = $language;
        return $this;
    }

    public function getOrganization() {
        return $this->organization;
    }

    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    public function getPageTitle() {
        return $this->pageTitle;
    }

    public function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    public function getFormHeader() {
        return $this->formHeader;
    }

    public function setFormHeader($formHeader) {
        $this->formHeader = $formHeader;
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

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
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

    public function getTel() {
        return $this->tel;
    }

    public function setTel($tel) {
        $this->tel = $tel;
        return $this;
    }

    public function getCell() {
        return $this->cell;
    }

    public function setCell($cell) {
        $this->cell = $cell;
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

    public function getPwdUniqueWarning() {
        return $this->pwdUniqueWarning;
    }

    public function setPwdUniqueWarning($pwdUniqueWarning) {
        $this->pwdUniqueWarning = $pwdUniqueWarning;
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

    public function getNotifications() {
        return $this->notifications;
    }

    public function setNotifications($notifications) {
        $this->notifications = $notifications;
        return $this;
    }

    public function getRegisterBtn() {
        return $this->registerBtn;
    }

    public function setRegisterBtn($registerBtn) {
        $this->registerBtn = $registerBtn;
        return $this;
    }

}
