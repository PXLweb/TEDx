<?php

class DataGenerator extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getViewData($_model, $_lang) {
        $model = strtolower($_model);
        $lang = strtolower($_lang);

        $cssLinkNav = site_url('assets/css/navbar.css');
        $data['cssLinks']['navbar'] = '<link rel="stylesheet" href="' . $cssLinkNav . '" />';

        switch ($model) {
            case 'home':
                $cssLinkHome = site_url('assets/css/home.css');
                $cssLinkCarousel = site_url('assets/css/carousel.css');
                $data['cssLinks']['carousel'] = '<link rel="stylesheet" href="' . $cssLinkHome . '" />';
                $data['cssLinks']['home'] = '<link rel="stylesheet" href="' . $cssLinkCarousel . '" />';

                if ($lang === 'nl') {
                    $this->load->model('lang/Home_nl');
                    $data['lang'] = new Home_nl();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Home_nl');
                    $data['lang'] = new Home_en();
                    return $data;
                }

            case 'login':
                $cssLogin = site_url('assets/css/register.css');
                $data['cssLinks']['login'] = '<link rel="stylesheet" href="' . $cssLogin . '" />';

                if ($lang === 'nl') {
                    $this->load->model('lang/Login_nl');
                    $data['lang'] = new Login_nl();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Login_en');
                    $data['lang'] = new Login_en();
                    return $data;
                }

            case 'register':
                $cssRegister = site_url('assets/css/register.css');
                $data['cssLinks']['register'] = '<link rel="stylesheet" href="' . $cssRegister . '" />';

                if ($lang === 'nl') {
                    $this->load->model('lang/Register_nl');
                    $data['lang'] = new Register_nl();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Register_en');
                    $data['lang'] = new Register_en();
                    return $data;
                }

            case 'forum':
                if ($lang === 'nl') {
                    $this->load->model('lang/Forum_nl');
                    $data['lang'] = new Forum_nl();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Forum_en');
                    $data['lang'] = new Forum_en();
                    return $data;
                }

            default:
                return $data;
        }
    }

    public function getNavData($_lang) {
        $lang = strtolower($_lang);

        switch ($lang) {
            case 'nl':
                $this->load->model('lang/Navbar_nl');
                $data['navbar'] = new Navbar_nl();
                return $data;

            case 'en':
                $this->load->model('lang/Navbar_en');
                $data['navbar'] = new Navbar_en();
                return $data;

            default:
                $this->load->model('lang/Navbar_nl');
                $data['navbar'] = new Navbar_nl();
                return $data;
        }
    }

}
