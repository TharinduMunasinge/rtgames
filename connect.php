<?php
$url=parse_url(getenv("DATABASE_URL"));
$host=$url['host'];

$pass=$url['pass'];
$user=$url['user'];
$db=substr($url['path'],1);
$link=mysql_connect($host,$user,$pass) or die("couldn't connect the host ".mysql_error());

$selcet=mysql_select_db($db,$link) or die("couldn't find the database:". mysql_error());

?>
