<?php
$host="pixelzexplorer.org";

$pass="pixelz313";
$user="'adminpixelz";
$db="wikilanka";
$link=mysql_connect($host,$user,$pass) or die("couldn't connect the host ".mysql_error());

$selcet=mysql_select_db($db,$link) or die("couldn't find the database:". mysql_error());

?>
