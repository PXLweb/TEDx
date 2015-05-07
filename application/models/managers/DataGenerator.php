<?php

class DataGenerator extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getViewData($model, $lang) {
        $model = strtolower($model);
        $lang = strtolower($lang);
        if ($model === 'login') {
            if ($lang === 'nl') {
                $this->load->model('lang/Login_nl');
                $data['lang'] = new Login_nl();
                $data['cssLinks'] = site_url('assets/css/register.css');
                return $data;
            }
        } else if ($model === 'register'){
            if ($lang === 'nl') {
                $this->load->model('lang/Register_nl');
                $data['lang'] = new Register_nl();
                $data['cssLinks'] = site_url('assets/css/register.css');
                return $data;
            }
        }
    }

}
