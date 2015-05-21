<?php

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Navbar_nl extends CI_Model {

    private $brandName = 'TEDx';
    private $menuHome = 'Home';
    private $homeRoute;
    private $menuAbout = 'Over ons';
    private $aboutRoute;
    private $menuContact = 'Contact';
    private $contactRoute;
    private $menuLogin = 'Inloggen';
    private $loginRoute;
    private $menuRegister = 'Registreren';
    private $registerRoute;
    private $menuEvents = 'Events';
    private $eventsRoute;
    private $menuForum = 'Forum';
    private $forumRoute;
    private $profileRoute = 'profiel';
    private $menuSearch = 'search';
    private $searchRoute;
    public function __construct() {
        parent::__construct();
        $this->homeRoute = site_url('home');
        $this->aboutRoute = site_url('overons');
        $this->contactRoute = site_url('contact');
        $this->loginRoute = site_url('login');
        $this->registerRoute = site_url('registreren');
        $this->eventsRoute = site_url('events');
        $this->forumRoute = site_url('forum');
        $this->profileRoute = site_url('profiel');
        $this->searchRoute =  site_url('search');
        
    }
     public function getMenuSearch() {
        return $this->menuSearch;
    }

    public function setMenuSearch($menuSearch) {
        $this->menuSearch = $menuSearch;
        return $this;
    }

     public function getSearchRoute() {
        return $this->searchRoute;
    }

    public function setSearchRoute($searchRoute) {
        $this->searchRoute = $searchRoute;
        return $this;
    }
    public function getProfileRoute() {
        return $this->profileRoute;
    }

    public function setProfileRoute($profileRoute) {
        $this->profileRoute = $profileRoute;
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

    public function getHomeRoute() {
        return $this->homeRoute;
    }

    public function setHomeRoute($homeRoute) {
        $this->homeRoute = $homeRoute;
        return $this;
    }

    public function getMenuAbout() {
        return $this->menuAbout;
    }

    public function setMenuAbout($menuAbout) {
        $this->menuAbout = $menuAbout;
        return $this;
    }

    public function getAboutRoute() {
        return $this->aboutRoute;
    }

    public function setAboutRoute($aboutRoute) {
        $this->aboutRoute = $aboutRoute;
        return $this;
    }

    public function getMenuContact() {
        return $this->menuContact;
    }

    public function setMenuContact($menuContact) {
        $this->menuContact = $menuContact;
        return $this;
    }

    public function getContactRoute() {
        return $this->contactRoute;
    }

    public function setContactRoute($contactRoute) {
        $this->contactRoute = $contactRoute;
        return $this;
    }

    public function getMenuLogin() {
        return $this->menuLogin;
    }

    public function setMenuLogin($menuLogin) {
        $this->menuLogin = $menuLogin;
        return $this;
    }

    public function getLoginRoute() {
        return $this->loginRoute;
    }

    public function setLoginRoute($loginRoute) {
        $this->loginRoute = $loginRoute;
        return $this;
    }

    public function getMenuRegister() {
        return $this->menuRegister;
    }

    public function setMenuRegister($menuRegister) {
        $this->menuRegister = $menuRegister;
        return $this;
    }

    public function getRegisterRoute() {
        return $this->registerRoute;
    }

    public function setRegisterRoute($registerRoute) {
        $this->registerRoute = $registerRoute;
        return $this;
    }

    public function getMenuEvents() {
        return $this->menuEvents;
    }

    public function setMenuEvents($menuEvents) {
        $this->menuEvents = $menuEvents;
        return $this;
    }

    public function getEventsRoute() {
        return $this->eventsRoute;
    }

    public function setEventsRoute($eventsRoute) {
        $this->eventsRoute = $eventsRoute;
        return $this;
    }

    public function getMenuForum() {
        return $this->menuForum;
    }

    public function setMenuForum($menuForum) {
        $this->menuForum = $menuForum;
        return $this;
    }

    public function getForumRoute() {
        return $this->forumRoute;
    }

    public function setForumRoute($forumRoute) {
        $this->forumRoute = $forumRoute;
        return $this;
    }

}
