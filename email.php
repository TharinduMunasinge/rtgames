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

	
	
	echo time();
	$query="INSERT INTO unregistered (email,time,temporycode) VALUES ('$email',CURRENT_TIMESTAMP,'".mt_rand ()."')";

	
			$insert=pg_query($dbconn,$query) or die("couln't enter any records!".pg_error());
	echo "4";

			if(pg_affected_rows()>0){
			
				$m="Succesfully Subscribed!!!!";
			
			}
			else
			{
				$m="Record was not inserted";
			}
	
	echo "5";

	



	$subject="subjectgoes here";
   	$message="message goes here......";

   mail($email, "Subject: $subject",$message, "From:no-reply@rtgames.com" );
    return $m;
    }
  }
}

?>
