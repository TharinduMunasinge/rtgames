<?php
$host="localhost:3306";
$pass="ridwan";
$user="tharindu";
$db="rt_games";
$link=mysql_connect($host,$user,$pass) or die("couldn't connect the host ".mysql_error());

$selcet=mysql_select_db($db,$link) or die("couldn't find the database:". mysql_error());

?>
