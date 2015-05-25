


<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo basename(__FILE__); ?></title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="<?php echo site_url('assets/css/events_admin.css'); ?>" />


    </head>
    <body>  


<div class="container"> 

    <div class="agenda">
<?php echo $calendar; ?>
    </div>


    <div class="events">
        <?php
        foreach ($events as $event) {
            echo '<h4>'.'Name: ' . $event['event_name'] . '</h4><br />';
            echo 'Spreker: ' . $event['speaker'] . '<br />';
            echo 'Locatie: ' . $event['location'] . '<br />';
            echo 'Datum: ' . $event['date_time'] . '<br /><br />';
        }
        ?>

    </div>
</div>
  </bod>
  </ht
  


