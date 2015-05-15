<?php

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Forum_nl extends CI_Model {

//    Homepage - categories.
    private $viewName = 'forum';
    private $pageTitle = "Forum";
    private $language = "nl";
    private $categories = 'Categorieën';
//    Topics (linked to one category).
    private $postedBy = 'Gepost door ';
    private $postedOn = ' op ';
    private $noTopics = 'Geen onderwerpen';
//    Posts (linked to one topic).
    

    public function getPostedBy() {
        return $this->postedBy;
    }

    public function setPostedBy($postedBy) {
        $this->postedBy = $postedBy;
        return $this;
    }

    public function getPostedOn() {
        return $this->postedOn;
    }

    public function setPostedOn($postedOn) {
        $this->postedOn = $postedOn;
        return $this;
    }

    public function getNoTopics() {
        return $this->noTopics;
    }

    public function setNoTopics($noTopics) {
        $this->noTopics = $noTopics;
        return $this;
    }

    public function getCategories() {
        return $this->categories;
    }

    public function setCategories($categories) {
        $this->categories = $categories;
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

}
