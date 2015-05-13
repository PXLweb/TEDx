<?php

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Forum_nl extends CI_Model {

    private $viewName = 'forum';
    private $pageTitle = "Forum";
    private $language = "nl";

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

}
