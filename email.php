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

	
	
	
	$query="INSERT INTO  unregistered(email,time,temporycode) values  ('$email',LOCALTIMESTAMP,".mt_rand ().")";
//Insert into ('abc@def.com',LOCALTIMESTAMP,11111111); 

	
			$insert=pg_query($query) or die("couln't enter any records!".pg_error());
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
