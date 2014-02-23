<?php
$host="ec2-184-72-238-68.compute-1.amazonaws.com";
$pass="BkkLQbWiS5jzwHfwkxFGDnot17";
$user="erifhknmlngjqb";
$db="d6ferf43cg9e2h";
$link=mysql_connect($host,$user,$pass) or die("couldn't connect the host ".mysql_error());

$selcet=mysql_select_db($db,$link) or die("couldn't find the database:". mysql_error());

?>
