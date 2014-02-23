<?


require("connect.php");

function spamcheck($field)
  {
 
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);


  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

function send($email){
if (isset($email))
  {

  $mailcheck = spamcheck($email);
  if ($mailcheck==FALSE)
    {
    return "Invalid input";
    }
  else
    {

	

	$query="Insert into unregistered values ('','$email',Now(),".mt_rand ().")";
			$insert=mysql_query($query) or die("couln't enter any records!".mysql_error());

			if(mysql_affected_rows()>0){
			
				$m="Succesfully Subscribed!!!!";
			
			}
			else
			{
				$m="Record was not inserted";
			}


	



	$subject="subjectgoes here";
   	$message="message goes here......";

   mail($email, "Subject: $subject",$message, "From:no-reply@rtgames.com" );
    return $m;
    }
  }
}

?>
