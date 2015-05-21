<?php

//include $_SERVER['DOCUMENT_ROOT'] . "/tedx/application/models/GlobalVars.php";

/**
 * Description of signin_dutch
 *
 * @author Ilyasse
 */
class Events_nl extends CI_Model {
    
    private $viewName ='events';
    private $formHeader = "Events";
    private $pageTitle = "Events";
    private $language = "nl";
    private $eventname="Gelieve evenement naam in te geven";
    private $speaker="Spreker";
    private $speakerwarning="Gelieve de spreker in te geven";
     private $location="Locatie";
    private $locationwarning="Gelieve de locatie in te geven";
    private $datetimeg="Datum";
    private $datetimewarning="Gelieve de datum in te geven";
    private $verzendbutton="Aanmaken";
    
    	public function getViewName(){
		return $this->viewName;
	}

	public function setViewName($viewName){
		$this->viewName = $viewName;
	}

	public function getFormHeader(){
		return $this->formHeader;
	}

	public function setFormHeader($formHeader){
		$this->formHeader = $formHeader;
	}

	public function getPageTitle(){
		return $this->pageTitle;
	}

	public function setPageTitle($pageTitle){
		$this->pageTitle = $pageTitle;
	}

	public function getLanguage(){
		return $this->language;
	}

	public function setLanguage($language){
		$this->language = $language;
	}

	public function getEventname(){
		return $this->eventname;
	}

	public function setEventname($eventname){
		$this->eventname = $eventname;
	}

	public function getSpeaker(){
		return $this->speaker;
	}

	public function setSpeaker($speaker){
		$this->speaker = $speaker;
	}

	public function getSpeakerwarning(){
		return $this->speakerwarning;
	}

	public function setSpeakerwarning($speakerwarning){
		$this->speakerwarning = $speakerwarning;
	}

	public function getLocation(){
		return $this->location;
	}

	public function setLocation($location){
		$this->location = $location;
	}

	public function getLocationwarning(){
		return $this->locationwarning;
	}

	public function setLocationwarning($locationwarning){
		$this->locationwarning = $locationwarning;
	}

	public function getDatetimeg(){
		return $this->datetimeg;
	}

	public function setDatetimeg($datetimeg){
		$this->datetimeg = $datetimeg;
	}

	public function getDatetimewarning(){
		return $this->datetimewarning;
	}

	public function setDatetimewarning($datetimewarning){
		$this->datetimewarning = $datetimewarning;
	}

	public function getVerzendbutton(){
		return $this->verzendbutton;
	}

	public function setVerzendbutton($verzendbutton){
		$this->verzendbutton = $verzendbutton;
	}
    
    
    
    
    
}
