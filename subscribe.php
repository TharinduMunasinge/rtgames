<?php

	
	require("email.php");



if(isset($_GET['mail']))
{
	$mail=$_GET['mail'];
	
	echo "world";
	echo send($mail);
	echo "hello";

}
else
{
	header('Location:index.php');
}
?>
