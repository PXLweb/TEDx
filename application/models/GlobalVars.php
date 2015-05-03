<?php

/**
 * Description of global_vars
 *
 * @author Kristof
 */
class GlobalVars {

    private $organization = 'TEDx';
    public static $statOrganization = 'TEDx';


    function getOrganization() {
        return $organization;
    }

    function setOrganization($organization) {
        $this->$organization = $organization;
    }

}
