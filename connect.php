<?php
$url=parse_url(getenv("DATABASE_URL"));
//$host=$url['host'];
$host = "173.236.192.64";

$pass="pixelz313";
$user="adminpixelz";
$db="wikilanka";
=======
//$pass=$url['pass'];
//$user=$url['user'];
//$db=substr($url['path'],1);

$link=mysql_connect($host,$user,$pass) or die("couldn't connect the host ".mysql_error());

$selcet=mysql_select_db($db,$link) or die("couldn't find the database:". mysql_error());

//$result=mysql_query("INSERT INTO `wikilanka`.`subscriber` SET `name`='Ridwan'",$dbhandle);
//echo ($result);
//echo "PL";

?>
