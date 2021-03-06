 
<html>
    <head>
        
        <title><?php echo basename(__FILE__); ?></title>
  <meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/GoogleMap.js'); ?>" ></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo site_url('assets/dist/js/bootstrap.min.js'); ?>"></script>

</head>
    <body>

<script type="text/javascript" src="<?php echo site_url('assets/js/cal.js'); ?>" ></script>  

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">

                <p> evenment toevoegen</p>
            </div>
            <div class="modal-footer">
                <button  class="btn btn-default" data-toggle="modal" data-dismiss="modal" href="#stack2" >Toevoegen</button>
                <button  class="btn btn-default" data-dismiss="modal">Sluiten</button>
            </div>
            <div class="modal-footer">   
            </div>
        </div> 
    </div>
</div>


<?php
echo form_open('events/create', [
    'class' => 'form-group',
    'data-toggle' => 'validator',
    'role' => 'form',
    'id' => 'myForm'
]);
?>

<div id="stack2" class="modal fade" tabindex="-1" data-focus-on="input:first" >   
    <div class="modal-dialog"> 
        <!-- Modal content-->
        <div class="modal-content">     
            <div class="modal-body" >          
                <div onload="codeAddress()">
                    <input name="eventnaam" id="name" type="textbox" value="event naam"/><br />
                    <input name="speaker" id="Speaker" type="textbox" value="spreker"/><br />
                    <input name="location" id="location" type="textbox" value="Hasselt" onchange="codeAddress()"/><br />
                    <input name="date" id="datum" type="text" hidden="true" value=""  />    <br />    
                </div>                   
                <div id="map-canvas" style="width:500px;height:180px;" ></div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-default" name="submit" value="voeg toe" id="myButton" />

                <button  class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div> 
    </div>
</div>
<?php echo form_close(); ?> 

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
    </body>
</html>