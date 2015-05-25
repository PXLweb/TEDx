<?php

class DataGenerator extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getViewData($_model, $_lang) {
        $model = strtolower($_model);
        $lang = strtolower($_lang);

       /* $cssLinkFooter = site_url('assets/css/sticky-footer.css');
        $cssLinkGlobal = site_url('assets/css/global.css'); 
        $data['cssLinks']['$cssLinkFooter'] = '<link rel="stylesheet" href="' . $cssLinkFooter . '" />';
        $data['cssLinks']['global'] = '<link rel="stylesheet" href="' . $cssLinkGlobal . '" />'; */

        switch ($model) {
            case 'header':
                $this->load->model('lang/Global_nl');
                $data['lang'] = new Global_nl();
                return $data;

            case 'navbar':
                if ($lang === 'en') {
                    $this->load->model('lang/Navbar_en');
                    $data['navbar'] = new Navbar_en();
                    return $data;
                } else {
                    $this->load->model('lang/Navbar_nl');
                    $data['navbar'] = new Navbar_nl();
                    return $data;
                }

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
                    $data['lang'] = new Register_nl();// lang
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Register_en');
                    $data['lang'] = new Register_en();
                    return $data;
                }

            case 'forum':
                $cssLinkForum = site_url('assets/css/forum.css');
                $data['cssLinks']['forum'] = '<link rel="stylesheet" href="' . $cssLinkForum . '" />';

                if ($lang === 'nl') {
                    $this->load->model('lang/Forum_nl');
                    $data['lang'] = new Forum_nl();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Forum_en');
                    $data['lang'] = new Forum_en();
                    return $data;
                }

            case 'topics':
                $cssLink = site_url('assets/css/topics.css');
                $data['cssLinks']['topics'] = '<link rel="stylesheet" href="' . $cssLink . '" />';

                if ($lang === 'nl') {
                    $this->load->model('lang/TopicsNL');
                    $data['lang'] = new TopicsNL();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Topics_en');
                    $data['lang'] = new Topics_en();
                    return $data;
                }

            case 'posts':
                $cssLinkPosts = site_url('assets/css/posts.css');
                $data['cssLinks']['posts'] = '<link rel="stylesheet" href="' . $cssLinkPosts . '" />';

                if ($lang === 'nl') {
                    $this->load->model('lang/Forum_nl');
                    $data['lang'] = new Forum_nl();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Forum_en');
                    $data['lang'] = new Forum_en();
                    return $data;
                }
             case 'events':
                $cssLinkPosts = site_url('assets/css/posts.css');
                $data['cssLinks']['posts'] = '<link rel="stylesheet" href="' . $cssLinkPosts . '" />';

                if ($lang === 'nl') {
                    $this->load->model('lang/Events_nl');
                    $data['lang'] = new Events_nl();
                    return $data;
                } else if ($lang === 'en') {
                    $this->load->model('lang/Events_en');
                    $data['lang'] = new Events_en();
                    return $data;
                }
        }
    }

}
