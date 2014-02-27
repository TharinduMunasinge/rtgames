<?php
require("connect.php");
if(isset($_GET['ref']))
{

	
$ref=$_GET['ref'];

if(!filter_var($ref, FILTER_VALIDATE_INT))
  {
  echo "invalid access!!!!! ";
  }
else
  {
 
		$query="select temporycode from unregistered where temporycode='{$ref}'";

			$result=pg_query($query) or die("couln't enter any records!".pg_error());
			
			if(pg_num_rows ($result)==1){
			
				
				echo  " done";					
			}
			else
			{
				echo "Record was not inserted";
			}

  }





		
}


?>
