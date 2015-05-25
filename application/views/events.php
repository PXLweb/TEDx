<<<<<<< HEAD

<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo basename(__FILE__); ?></title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="<?php echo site_url('assets/css/events_admin.css'); ?>" />
=======
<div class="container"> 
    <div class="agenda">
        <?php echo $calendar; ?>
    </div>
>>>>>>> 49cc79755c2591e5757d6a9ad9c95867e8f14921

    <div class="events">
        <?php
        foreach ($events as $event) {
            echo '<p>Name: ' . $event['event_name'] . '<br />';
            echo 'Speaker: ' . $event['speaker'] . '<br />';
            echo 'Location: ' . $event['location'] . '<br />';
            echo 'Date: ' . $event['date_time'] . '<br /><br /></p>';
        }
        ?>
    </div>
</div>

<<<<<<< HEAD
    </head>
    <body>  
     <?php echo $calendar; ?>
 
 <?php


        
       

         
          
               foreach ($events as $event)
                    {
                        echo 'Name: '          . $event['event_name']       . '<br />';
                        echo 'Speaker: '        . $event['speaker']         . '<br />';
                        echo 'Location: ' . $event['location']  . '<br />';
                        echo 'Date: ' . $event['date_time']  . '<br /><br />';
                    }
                
            
            ?>

=======

>>>>>>> 49cc79755c2591e5757d6a9ad9c95867e8f14921



<<<<<<< HEAD

    </body>
</html>

=======
>>>>>>> 49cc79755c2591e5757d6a9ad9c95867e8f14921
