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
        foreach ($topics as $topic) {
            echo 'Id: '                 . $topic['topic_id']        . '<br />';
            echo 'Subject: '            . $topic['subject']         . '<br />';
            echo 'Time created: '       . $topic['date_time']       . '<br />';
            echo 'Id category: '        . $topic['category_id']     . '<br />';
            echo 'Id creating user: '   . $topic['created_by']      . '<br /><br />';
        }
        ?>
    </body>
</html>