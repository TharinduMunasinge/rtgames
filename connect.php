<?php
$host="mysql.pixelexplorere.com";
$pass="tharpixel";
$user="pixeltharindu";
$db="pixelwordpress";
$link=mysql_connect($host,$user,$pass) or die("couldn't connect the host ".mysql_error());

$selcet=mysql_select_db($db,$link) or die("couldn't find the database:". mysql_error());

?>
