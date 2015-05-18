<?php

class SessionManager extends CI_Model {

    private $userManager;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/UserManager');
        $this->userManager = new UserManager();
    }

    public function init() {
//        Logged in with remember_me = true => set cookie with remember_me
        if (array_key_exists('user', $_SESSION)){
            $this->setCookie();
        } else if(array_key_exists('remember_me', $_COOKIE) && $_COOKIE['remember_me'] === '1') {
            $this->loadSessionFromCookie();
        }
    }

    function loadSessionFromCookie() {
        if (isset($_COOKIE['user_id'])) {
            $userId = filter_input(INPUT_COOKIE, 'user_id');
            $user = $this->userManager->getUserById($userId);

            if ($user) {
                $this->setUser($user[0]);
            }
            /* var_dump($query->result_array());
             * array(3) {
             *      [0] => array(8) {
             *                      'user_id' => '1',
             *                      'username' => 'administrator',
             *                      ...
             */
        }
    }
    
    function setUser($user) {
        $user['logged_in'] = TRUE;
        
        foreach ($user as $k => $v){
            $_SESSION[$k] = $v;
        }
        
        $_SESSION['guest'] = FALSE;
    }
        
    function setCookie() {
        setcookie('user_id', $_SESSION['user']['user_id'], time() + 60 * 60 * 24 * 7);
        setcookie('remember_me', $_SESSION['user']['remember_me'], time() + 60 * 60 * 24 * 7);
    }

    function restartSession() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            if (array_key_exists('user', $_SESSION)) {
                unset($_SESSION['user']);
            }
            session_destroy();
            session_start();
            $_SESSION['guest'] = TRUE;
        } else {
            session_start();
        }
    }

    function logout() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            if (array_key_exists('user', $_SESSION)) {
                unset($_SESSION['user']);
            }
            session_destroy();
            session_start();
            $_SESSION['guest'] = TRUE;
            // $_SESSION['user']['logged_in'] = FALSE;
        }
    }

    function destroy() {
        session_destroy();
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        $_SESSION['guest'] = TRUE;
    }

}
