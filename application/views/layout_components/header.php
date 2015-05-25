<!-- http://localhost/TEDx/ -->
<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html <?php echo 'lang="' . $lang->getLanguage() . '" '; ?> >
    <head>
        <title><?php echo $lang->getPageTitle(); ?></title>
        <link rel="icon" href="../../favicon.ico">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
        <link rel="stylesheet" href="newLayout/main.css" />
        <?php
        if (isset($cssLinks)) {
            foreach($cssLinks as $link){
                echo $link;
            }
        }
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        if (isset($styleTagContent)) {
            echo '<style>' . $styleTagContent . '</style>';
        }
        ?>
    </head>

    <body>