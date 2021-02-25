<?php

function funcGetCAMData()


{
	
	echo "************** In funcGetCAMData **************** <br/>";
	
	//funcEchoOutput($assoc);
	
	
	//echo "assoc username: " . $assoc['username']  . "<br/>";
	
	//echo "<br/>question2: " . $questions[2]["question"] . "<br/>";
	
	//$conn = oci_connect("cwx", "esmtools", "10.185.82.51/camprd");
	
	//echo "Here is conn: " . $conn . "<br/>";
	//echo "Here is conn2: " . $conn2 . "<br/>";
	
	
	
	
	$db_config = funcConnectCWx_CAMDatabase();
	$con = OCILogon("$db_config[0]","$db_config[1]", "$db_config[2]");
	
	if (!$con) {
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

	$sql = "
		SELECT 
			  DISTINCT(A.CAM_ID) AS ID, 
			  a.cid1 AS Client,
			  a.SR_NUM AS NAV_SR_NBR,
			  TO_CHAR(a.es_in_time,'YYYY-MM-DD HH24:MI:SS') as IN_TIME,  
			  a.hostname AS Host_Name,
			  a.parameter AS Parameter,
			  a.par_instance AS Instance,
			  a.par_value AS Value,
			  a.bmc_icon_name AS Icon,
			  TO_CHAR(a.ack_dt_tm,'YYYY-MM-DD HH24:MI:SS') as ACK_Date,
			  p.lname ||', '|| p.fname AS ACK_USER,
			  p.username AS ASK_Username,        
			  p2.lname ||', '|| p.fname AS Doc_User,
			  p.username AS Doc_Username,
			  TO_CHAR(a.conf_dt_tm,'YYYY-MM-DD HH24:MI:SS') as CONF_Date, 
			  TO_CHAR(a.doc_dt_tm,'YYYY-MM-DD HH24:MI:SS') as Doc_Date, 
			  a.action_taken AS Action_Taken,
			  a.source AS Source,
			  a.annote_data AS Annotation

		FROM 	cwx.arch_events a 

			JOIN CWX.rem_party p
			  ON p.party_id = a.ack_user
        
			JOIN CWX.rem_party p2
			  ON p2.party_id = a.doc_user_id 

		WHERE 
				a.es_in_time > sysdate - 15 
					/*a.es_in_time > '01-DEC-2011 12:00:00.000000 AM' 
			  and      a.es_in_time < '01-JAN-2012 12:00:00.000000 AM' */
				
			  and      a.ack_user is not null  
															
		ORDER BY a.cam_id";



	$stid = oci_parse($con, $sql);
	oci_execute($stid);
	$array = oci_fetch_object($stid);
		//print_r($array);
	
	/* $results=array();
	$numrows = oci_fetch_all($stid, $results, null, null, OCI_FETCHSTATEMENT_BY_ROW);
	echo "Number of Errors:  " . $numrows . "<br/>"; */
	
	
	$stid = oci_parse($con, $sql);
	oci_execute($stid);
	$array = oci_fetch_object($stid);
	$ic = 0;
	$data = array();
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) 
	{
		//echo "<tr>\n";
		//echo "This is the AssocID: " . $username ;
		$ic = $ic + 1;
		//echo "counter: $ic of $numrows<br/>";
		$data[] = $row;
		//var_dump($row);
		//funcEchoOutput($row);
		//funcWriteToDatabase($row);		
	}
	
	funcWriteToDatabase($data);

}
?>