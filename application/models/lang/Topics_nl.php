<?php

class Topics_nl {

    private $viewName = 'topics';
    private $pageTitle = 'Onderwerpen';
    private $language = 'nl';
    private $addButton = 'Toevoegen';
    private $editButton = 'Aanpassen';
    private $deleteButton = 'Verwijderen';
    private $postedBy = 'Gepost door ';
    private $postedOn = ' op ';

    public function getAddButton() {
        return $this->addButton;
    }

    public function setAddButton($addButton) {
        $this->addButton = $addButton;
        return $this;
    }

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

    public function getAddTopicButton() {
        return $this->addTopicButton;
    }

    public function setAddTopicButton($addTopicButton) {
        $this->addTopicButton = $addTopicButton;
        return $this;
    }

    public function getEditButton() {
        return $this->editButton;
    }

    public function setEditButton($editButton) {
        $this->editButton = $editButton;
        return $this;
    }

    public function getDeleteButton() {
        return $this->deleteButton;
    }

    public function setDeleteButton($deleteButton) {
        $this->deleteButton = $deleteButton;
        return $this;
    }

}
