<?php

function funcMySQLConnect($db, $sql, $sql_type)
{
	echo "************** In funcMySQLConnect **************** </br> ";

//echo "db: $db </br>  sql: $sql </br>  sql_type:  &sql_type </br> ";
	//$con = mysql_connect("localhost","root", "pink");
	
	$db_config = funcConnectCAM_EventsDatabase();
	$con = mysql_connect("$db_config[0]","$db_config[1]", "$db_config[2]");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	
	//mysql_select_db("cam_events", $con);
	
	mysql_select_db($db, $con);
	
	
	if($sql_type == "read")
	
		{	
			$result = mysql_query($sql);
			$maxdate = mysql_result($result, 0);	
			/* while ($row = mysql_fetch_array($result)) 
			
				{		
					$array[] = $row;			
				} */
			
			mysql_close($con);
			return $maxdate;	
		}	
	else
		
		{
			mysql_query($sql);
			mysql_close($con);
		}

}
?>