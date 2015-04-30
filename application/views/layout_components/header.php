<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
    </head>
    <body>
        <div  class="container">
            <?php require 'application/views/layout_components/forum-navbar.php'; ?>
            <div id="content">
