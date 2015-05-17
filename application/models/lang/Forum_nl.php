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
//    Labels and button text
    private $previousButton = 'Vorige';
    private $nextButton = 'Volgende';
    private $commentTitle = 'Schrijf commentaar';
    private $commentMeta = 'Uw e-mailadres zal niet gepubliceerd worden. Verplichte velden hebben een *.';
    private $nameLabel = 'Naam *';
    private $emailLabel = 'Emailadres *';
    private $websiteLabel = 'Website';
    private $commentLabel = 'Commentaar *';
    private $postCommentButton = 'Plaats commentaar';
//    Warnings
    private $nameWarning = "Geen geldige naam.";
    private $emailWarning = "Geen geldig e-mailadres.";
    private $commentWarning = "Commentaar mag niet leeg zijn.";
    private $titleLabel = "Titel";

    public function getTitleLabel() {
        return $this->titleLabel;
    }

    public function setTitleLabel($titleLabel) {
        $this->titleLabel = $titleLabel;
        return $this;
    }

    public function getCommentWarning() {
        return $this->commentWarning;
    }

    public function setCommentWarning($commentWarning) {
        $this->commentWarning = $commentWarning;
        return $this;
    }

    public function getNameWarning() {
        return $this->nameWarning;
    }

    public function setNameWarning($nameWarning) {
        $this->nameWarning = $nameWarning;
        return $this;
    }

    public function getEmailWarning() {
        return $this->emailWarning;
    }

    public function setEmailWarning($emailWarning) {
        $this->emailWarning = $emailWarning;
        return $this;
    }

    public function getPreviousButton() {
        return $this->previousButton;
    }

    public function setPreviousButton($previousButton) {
        $this->previousButton = $previousButton;
        return $this;
    }

    public function getNextButton() {
        return $this->nextButton;
    }

    public function setNextButton($nextButton) {
        $this->nextButton = $nextButton;
        return $this;
    }

    public function getCommentTitle() {
        return $this->commentTitle;
    }

    public function setCommentTitle($commentTitle) {
        $this->commentTitle = $commentTitle;
        return $this;
    }

    public function getCommentMeta() {
        return $this->commentMeta;
    }

    public function setCommentMeta($commentMeta) {
        $this->commentMeta = $commentMeta;
        return $this;
    }

    public function getNameLabel() {
        return $this->nameLabel;
    }

    public function setNameLabel($nameLabel) {
        $this->nameLabel = $nameLabel;
        return $this;
    }

    public function getEmailLabel() {
        return $this->emailLabel;
    }

    public function setEmailLabel($emailLabel) {
        $this->emailLabel = $emailLabel;
        return $this;
    }

    public function getWebsiteLabel() {
        return $this->websiteLabel;
    }

    public function setWebsiteLabel($websiteLabel) {
        $this->websiteLabel = $websiteLabel;
        return $this;
    }

    public function getCommentLabel() {
        return $this->commentLabel;
    }

    public function setCommentLabel($commentLabel) {
        $this->commentLabel = $commentLabel;
        return $this;
    }

    public function getPostCommentButton() {
        return $this->postCommentButton;
    }

    public function setPostCommentButton($postCommentButton) {
        $this->postCommentButton = $postCommentButton;
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
