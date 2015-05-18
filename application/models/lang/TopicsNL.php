<?php

include 'BlogNL.php';

class TopicsNL extends BlogNL {

    private $pageTitle = 'Onderwerpen';
    private $viewName = 'topics';
    private $onlyUsersWarning = 'Alleen geregistreerde gebruikers kunnen een onderwerp starten.';

    public function getOnlyUsersWarning() {
        return $this->onlyUsersWarning;
    }

    public function setOnlyUsersWarning($onlyUsersWarning) {
        $this->onlyUsersWarning = $onlyUsersWarning;
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

}
