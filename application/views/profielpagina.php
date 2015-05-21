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
        <div>
            username: <?php echo $user['username'];?></br>
             voornaam: <?php echo $user['firstname']?></br>
             achternaam: <?php echo $user['lastname'];?></br>
             emailadres: <?php echo $user['email']?></br>
             taal: <?php echo $user['taal']?></br>
             gsm nummer: <?php echo $user['cellphone']?></br>
             telefoonnummer: <?php echo $user['telephone']?></br>
        </div>
        <?php
        
        ?>
    </body>
</html>
