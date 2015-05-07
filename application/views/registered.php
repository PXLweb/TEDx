<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo basename(__FILE__); ?></title>
        <style type="text/css">

        </style>
    </head>
    <body>
        <h1>Geregistreerd :)</h1>
        <?php
        if (isset($post)) {
            var_dump($post);
        }
        ?>
        
    </body>
</html>