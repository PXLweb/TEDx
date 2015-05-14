<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo basename(__FILE__); ?></title>
        <style type="text/css">

        </style>
    </head>
    <body>
        <?php
        foreach ($categories as $category){
            echo 'Id: '          . $category['cat_id']       . '<br />';
            echo 'Name: '        . $category['name']         . '<br />';
            echo 'Description: ' . $category['description']  . '<br /><br />';
        }
        ?>
    </body>
</html>