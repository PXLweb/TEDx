<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap-theme.css'); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" ></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="description" content="A short description." />
        <meta name="keywords" content="put, keywords, here" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" href="assets/css/forum.css" type="text/css" />
        <style>
/*            @media (max-width: 991px) {
                .navbar-header {
                    float: none;
                }
                .navbar-toggle {
                    display: block;
                }
                .navbar-collapse {
                    border-top: 1px solid transparent;
                    box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
                }
                .navbar-collapse.collapse {
                    display: none!important;
                }
                .navbar-collapse.collapse.in {
                    display: block!important;
                }
                .navbar-nav {
                    float: none!important;
                    margin: 7.5px -15px;
                }
                .navbar-nav>li {
                    float: none;
                }
                .navbar-nav>li>a {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }
            }*/
        </style>
    </head>
    <body>
        <div  class="container">
            <h1 class="header text-center">Forum</h1>
            <?php require 'application/views/layout_components/forum-navbar.php'; ?>
            <div id="content" style="background-color: honeydew; overflow: hidden;">
