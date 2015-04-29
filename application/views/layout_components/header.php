<?php
require 'application/helpers/bootstrap-includes.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="A short description." />
        <meta name="keywords" content="put, keywords, here" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" href="assets/css/forum.css" type="text/css" />
    </head>
    <body>
        <div  class="container">
            <h1>Forum</h1>
            <?php require 'application/views/layout_components/navbar-tabs.php'; ?>