
        
         <?php
         
          
                foreach ($events as $event)
                    {
                        echo 'Event_naam: '          . $event['event_name']       . '<br />';
                        echo 'Spreker: '        . $event['speaker']         . '<br />';
                        echo 'Locatie: ' . $event['location']  . '<br />';
                        echo 'Datum: ' . $event['date_time']  . '<br /><br />';
                    }
                
            
            ?>
         
