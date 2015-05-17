<?php

class SessionManager extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function startSession() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
            session_start();
        } else {
            session_start();
        }
    }

    function setUser($user) {
        if (!session_status() === PHP_SESSION_ACTIVE) {
            session_start();
        }
        $_SESSION['user'] = $user;
    }

    function setCookie($user){
        $cookieName = 'user_id';
        $cookieValue = $user['user_id'];
        $expire = time() + 60 * 60 * 24 * 7;
        setcookie($cookieName, $cookieValue, $expire);
    }
}
