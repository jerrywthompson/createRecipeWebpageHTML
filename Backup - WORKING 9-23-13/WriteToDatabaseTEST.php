<?php

function funcWriteToDatabase ($data)
{
	echo "************** In funcWriteToDatabase **************** <br/> ";
		
	
	
	//funcEchoOutput($data);

	$nbrrows =  count($data);
	// echo "<br/>question1: " . $questions[0]["question"] . "<br/>";
	// echo "<br/>question2: " . $questions[2]["question"] . "<br/>";
	$i = 0;
	
/* 	$db_config = funcConnectCAM_EventsDatabase();
	$con = mysql_connect("$db_config[0]","$db_config[1]", "$db_config[2]");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("cam_events", $con); */
	
	foreach($data as $array)
		{
			//echo "\$data[$i] => $array[$i][].\n";
			//var_dump($array);
			$alarmid = $array["ID"];
			$client = $array['CLIENT'];
			$nav_sr_nbr = $array['NAV_SR_NBR'];
			$in_time = $array['IN_TIME'];
			$host_name = $array['HOST_NAME'];
			$parameter = $array['PARAMETER'];
			$instance = $array['INSTANCE'];
			$value = $array['VALUE'];
			$icon = $array['ICON'];
			$ack_date = $array['ACK_DATE'];
			$ack_user = $array['ACK_USER'];
			$ack_username = $array['ACK_USERNAME'];
			$doc_user = $array['DOC_USER'];
			$doc_username = $array['DOC_USERNAME'];
			$conf_date = $array['CONF_DATE'];
			$doc_date = $array['DOC_DATE'];
			$action_taken = funcStripPunctuation($array['ACTION_TAKEN']);
			$source = $array['SOURCE'];
			$annotation = funcStripPunctuation($array['ANNOTATION']);

			//echo "<br/>alarmid: $alarmid <br/>";
	
			$sql = "";	
			$sql = ("INSERT INTO cam_events.events 
							(id, client, nav_sr_nbr, in_time, host_name, parameter, instance, value, icon, ack_date, ack_user, ack_username ,doc_user, doc_username, conf_date, doc_date, action_taken, source, annotation)
						VALUES('$alarmid', '$client', '$nav_sr_nbr', '$in_time', '$host_name', '$parameter', '$instance', '$value', '$icon', '$ack_date', '$ack_user', '$ack_username',
						'$doc_user', '$doc_username', '$conf_date', '$doc_date', '$action_taken', '$source', '$annotation');");
						
			//mysql_query($sql);

			//echo  "<br/>doc_user: " . $doc_user . "<br/>" . $sql . "<br/>";
			
			$db = 'cam_events';
			funcMySQLConnect($db, $sql, "write");

	//$assoc_data = funcMySQLConnect($db, $sql);
	
	
	//funcMySQLConnect($db, $sql);
	//funcEchoOutput($assoc_data);
	
	//funcEchoOutput(funcMySQLConnect($db, $sql));
	
			echo "Counter: $i of $nbrrows<br/>";	
			$i++;
		}
	//mysql_close($con);
}
/* UPDATE cam_events.events 
SET doc_user = '$doc_user'
WHERE id = '$alarmid' */




?>