<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultataen</title>
    </head>
    <body>
        <?php
mysql_connect("localhost", "pxluser", "pxl") or die(mysql_error()); 
mysql_select_db("tedx") or die(mysql_error());

$clean = mysql_real_escape_string($_GET['search']);
$events = mysql_query("SELECT * FROM events WHERE event_name = '$clean'") or die(mysql_error());
if(mysql_num_rows($hello) >= 1) {
	while($i = mysql_fetch_array($hello)) {
		echo '<p>'. $i['event_name']. '<br/>' .$i['event_speaker']. '<br/>' .$i['event_location']. '<br/>' .$i['event_datetime']. '</p>'; 
	}
}
else {
	echo "No results found in events, sorry";
}
$topics = mysql_query("SELECT * FROM topics WHERE  = '$clean'") or die(mysql_error());
if(mysql_num_rows($topics) >= 1) {
	while($i = mysql_fetch_array($topics)) {
		echo '<p>'. $i['event_name']. '<br/>' .$i['event_speaker']. '<br/>' .$i['event_location']. '<br/>' .$i['event_datetime']. '</p>'; 
	}
}
else {
	echo "No results found in events, sorry";
}
?>
    </body>
</html>
