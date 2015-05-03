<?php

/**
 * Description of LoginManager
 *
 * @author Kristof
 */
class LoginManager {
    
    public function __construct() {
        $this->load->database();
    }
    
    function isValid($post){
        return TRUE;
    }
}
