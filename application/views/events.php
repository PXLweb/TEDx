<<<<<<< HEAD
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
=======

        
         <?php
>>>>>>> ed8a8d8f10498f84b0fe7795635390edb445a2ad
         
          
               foreach ($events as $event)
                    {
                        echo 'Name: '          . $event['event_name']       . '<br />';
                        echo 'Speaker: '        . $event['speaker']         . '<br />';
                        echo 'Location: ' . $event['location']  . '<br />';
                        echo 'Date: ' . $event['date_time']  . '<br /><br />';
                    }
                
            
            ?>
<<<<<<< HEAD

 



    </body>
</html>
=======
         
>>>>>>> ed8a8d8f10498f84b0fe7795635390edb445a2ad
