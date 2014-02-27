<?php

	require("postmark.php");
	
	$postmark = new Postmark("518ceed1-dfe1-43b9-b103-ed5320ea2953","from-email","optional-reply-to-address");
	
	$result = $postmark->to("munasinghetharindu@gmail.com.com")
		->subject("Email Subject")
		->plain_message("This is a plain text message.")
		->attachment('File.pdf', $file_as_string, 'application/pdf')
		->send();
	
	if($result === true)
		echo "Message sent";
