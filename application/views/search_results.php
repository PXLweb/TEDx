<html>
    <head>
        <meta charset="UTF-8">
        <title>profielpagina</title>
    </head>
    <body>
        <div>
            <?php
            $teller = 0;
            foreach ($resultaten as $arr) {
                 if (array_key_exists('Events', $arr)) {
                       $event =  'ja';
                       ?> <h3>Events</h3>
                           <h4>u kunt deze nakijken in kalander</h4><?php
                    } else {
                        $event =  'nee';
                    }
                    if (array_key_exists('Topics', $arr)) {
                        $topic = 'ja';
                        ?> <h3>Topics</h3>
                        <h4>u kunt deze nakijken in de Topics van het forum</h4><?php
                    } else {
                        $topic = 'nee';
                    }

                    if (array_key_exists('Posts', $arr)) {
                        $post = 'ja';
                        ?> <h3>Posts</h3>
                            <h4>u kunt deze nakijken in de Posts van het forum</h4><?php
                    } else {
                        $post = 'nee';
                    }
                foreach ($arr as $results) {
                    
                foreach ($results as $result) {
                   
                    ?>
                    <?php
                    $teller++;
                    if ($event == 'ja'){?>
                        <div>
            naam: <?php echo $result['event_name'];?></br>
            speker: <?php echo $result['speaker']?></br>
             locatie: <?php echo $result['location'];?></br>
                        </div>
                <?php } 
                if ($post == 'ja'){?>
                        <div>
            inhoud: <?php echo $result['content'];?></br>
                        </div>
                <?php } 
                if ($topic == 'ja'){?>
                        <div>
           inhoud: <?php echo $result['subject'];?></br>
            </div>
                <?php } 
                
            }
            
                }
            }
            ?>
        </div>
    </body>
</html>