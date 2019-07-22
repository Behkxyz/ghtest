Hola mundo Docker-compose

<?php
$enlace = mysql_connect('mysql', 'root', 'TM1q2w3e.');
if (!$enlace) {
	die('No sirve, arreglalo o te despiden: ' . mysql_error());
}
echo 'Felicidades sabes hacer conexiones MySQL lol';
mysql_close($enlace);
?>
