<?php

//include $_SERVER['DOCUMENT_ROOT'] . "/tedx/application/models/GlobalVars.php";

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Global_nl extends CI_Model {

    private $pageTitle = 'TEDx';
    private $language = 'nl';
    private $viewName = '';

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

    public function getViewName() {
        return $this->viewName;
    }

    public function setViewName($viewName) {
        $this->viewName = $viewName;
        return $this;
    }

}
