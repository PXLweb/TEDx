<div class="container"> 
    <div class="agenda">
        <?php echo $calendar; ?>
    </div>

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





