<?php

class SessionManager extends CI_Model {

    private $userManager;

    public function __construct() {
        parent::__construct();
        $this->load->model('managers/UserManager');
        $this->userManager = new UserManager();
    }

    public function init() {
        if (isset($_SESSION['user']) && $_SESSION['user']['logged_in'] == FALSE) {
            setcookie('remember_me', '0', time() + 60 * 60 * 24 * 7);
        } else if (isset($_SESSION['user']) && $_SESSION['user']['logged_in'] == TRUE) {
            $this->setCookie();
        } else if (isset($_COOKIE['remember_me']) && $_COOKIE['remember_me']) {
            $this->loadSessionFromCookie();
        }
    }

    function restartSession() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            session_destroy();
            session_start();
        } else {
            session_start();
        }
    }

    function destroy() {
        session_destroy();
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    }

    function setUser($user) {
//        if (!(session_status() === PHP_SESSION_ACTIVE)) {
//            session_start();
//        }
//        var_dump($user);
        $user['logged_in'] = TRUE;
        $_SESSION['user'] = $user;
    }

    function saveRememberMeToSession($rememberMe) {
        if ($rememberMe == 'yes') {
            $_SESSION['remember_me'] = '1';
        } else {
            $_SESSION['remember_me'] = '0';
        }
    }

    function setCookie() {
        setcookie('user_id', $_SESSION['user']['user_id'], time() + 60 * 60 * 24 * 7);
        setcookie('remember_me', $_SESSION['user']['remember_me'], time() + 60 * 60 * 24 * 7);
    }

    function loadSessionFromCookie() {
        if (isset($_COOKIE['user_id'])) {
            $userId = filter_input(INPUT_COOKIE, 'user_id');
            $user = $this->userManager->getUserById($userId);

//            echo 'var_dump($user); sessionmanager->loadSessionFromCookie()';
//            var_dump($user);

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

}
