<?php

include $_SERVER['DOCUMENT_ROOT'] . "/tedx/application/models/GlobalVars.php";

/**
 * Description of signin_dutch
 *
 * @author Kristof
 */
class Login_en {
    private $form_header = "Sign in";
    private $email_placeholder = "E-mail address";
    private $email_warning = "Enter your e-mail address";
    private $password_placeholder = "Password";
    private $password_warning = "Enter your password";
    private $remember_me = "Remember me";
    private $signin_button = "Sign in";

    public function getForm_header() {
        return $this->form_header;
    }

    public function setForm_header($form_header) {
        $this->form_header = $form_header;
        return $this;
    }

    public function getEmail_placeholder() {
        return $this->email_placeholder;
    }

    public function setEmail_placeholder($email_placeholder) {
        $this->email_placeholder = $email_placeholder;
        return $this;
    }

    public function getEmail_warning() {
        return $this->email_warning;
    }

    public function setEmail_warning($email_warning) {
        $this->email_warning = $email_warning;
        return $this;
    }

    public function getPassword_placeholder() {
        return $this->password_placeholder;
    }

    public function setPassword_placeholder($password_placeholder) {
        $this->password_placeholder = $password_placeholder;
        return $this;
    }

    public function getPassword_warning() {
        return $this->password_warning;
    }

    public function setPassword_warning($password_warning) {
        $this->password_warning = $password_warning;
        return $this;
    }

    public function getRemember_me() {
        return $this->remember_me;
    }

    public function setRemember_me($remember_me) {
        $this->remember_me = $remember_me;
        return $this;
    }

    public function getSignin_button() {
        return $this->signin_button;
    }

    public function setSignin_button($signin_button) {
        $this->signin_button = $signin_button;
        return $this;
    }

}
