<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>profielpagina</title>
    </head>
    <body>
      
        <h1>uw gegevens</h1>
        <h2><?php foreach ($user as $arr) { $persoon = $arr; }       ?> </h2>
        <div>
            username: <?php echo $persoon['username'];?></br>
             voornaam: <?php echo $persoon['firstname']?></br>
             achternaam: <?php echo $persoon['lastname'];?></br>
             emailadres: <?php echo $persoon['email']?></br>
             taal: <?php echo $persoon['lang']?></br>
             gsm nummer: <?php echo $persoon['cellphone']?></br>
             telefoonnummer: <?php echo $persoon['telephone']?></br>
        </div>
        <?php
        
        ?>
    </body>
</html>
