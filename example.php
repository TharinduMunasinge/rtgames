<?php

	require("postmark.php");
	
	$postmark = new Postmark("518ceed1-dfe1-43b9-b103-ed5320ea2953","app22436204@heroku.com","optional-reply-to-address");
	
	$result = $postmark->to("munasinghetharindu@gmail.com")
		->subject("Email Subject")
		->plain_message("This is a plain text message.")
		->send();
	
	if($result === true)
		echo "Message sent";
	else
		echo "errror";
?>
