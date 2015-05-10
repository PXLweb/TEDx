<?php

//include $_SERVER['DOCUMENT_ROOT'] . "/tedx/application/models/GlobalVars.php";

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Home_nl extends CI_Model {

    private $viewName = 'home';
    private $pageTitle = 'TEDx';
    private $language = 'nl';
    private $brandName = 'TEDx';
    private $menuHome = 'Home';
    private $menuAbout = 'Over ons';
    private $menuContact = 'Contact';
    private $menuLogin = 'Inloggen';
    private $menuRegister = 'Registreren';

    public function getMenuLogin() {
        return $this->menuLogin;
    }

    public function setMenuLogin($menuLogin) {
        $this->menuLogin = $menuLogin;
        return $this;
    }

    public function getMenuRegister() {
        return $this->menuRegister;
    }

    public function setMenuRegister($menuRegister) {
        $this->menuRegister = $menuRegister;
        return $this;
    }

    public function getViewName() {
        return $this->viewName;
    }

    public function setViewName($viewName) {
        $this->viewName = $viewName;
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

    public function getBrandName() {
        return $this->brandName;
    }

    public function setBrandName($brandName) {
        $this->brandName = $brandName;
        return $this;
    }

    public function getMenuHome() {
        return $this->menuHome;
    }

    public function setMenuHome($menuHome) {
        $this->menuHome = $menuHome;
        return $this;
    }

    public function getMenuAbout() {
        return $this->menuAbout;
    }

    public function setMenuAbout($menuAbout) {
        $this->menuAbout = $menuAbout;
        return $this;
    }

    public function getMenuContact() {
        return $this->menuContact;
    }

    public function setMenuContact($menuContact) {
        $this->menuContact = $menuContact;
        return $this;
    }

}
