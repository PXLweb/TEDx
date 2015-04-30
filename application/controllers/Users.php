<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function roles() {
        $this->load->database();
        $this->load->model('Managers/TedxDB');
        $roles = $this->TedxDB->getTableRows('Roles');
        $data = ['roles' => $roles];    // same as $data = array('roles' => $roles);
        $this->load->view('forum/ShowRoles.php', $data);
    }

}
