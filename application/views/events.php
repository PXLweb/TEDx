
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo basename(__FILE__); ?></title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="<?php echo site_url('assets/css/events_admin.css'); ?>" />


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


 



    </body>
</html>

