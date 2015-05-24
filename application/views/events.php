<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo basename(__FILE__); ?></title>
  
        </style>     
    </head>
    <body>
        
         <?php
         
          
                foreach ($events as $event)
                    {
                        echo 'Event_naam: '          . $event['event_name']       . '<br />';
                        echo 'Spreker: '        . $event['speaker']         . '<br />';
                        echo 'Locatie: ' . $event['location']  . '<br />';
                        echo 'Datum: ' . $event['date_time']  . '<br /><br />';
                    }
                
            
            ?>
         
    </body>
</html>