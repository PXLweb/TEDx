<?php

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Navbar_en extends CI_Model {

    private $brandName = 'TEDx';
    private $menuHome = 'Home';
    private $menuAbout = 'About';
    private $menuContact = 'Contact';
    private $menuLogin = 'Login';
    private $menuRegister = 'Register';

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

}
