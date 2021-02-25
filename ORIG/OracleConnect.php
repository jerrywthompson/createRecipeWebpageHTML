<?php

function funcOracleConnect ($sql)


{
	
	echo "************** In funcOracleConnect **************** <br/>";
	
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
	
	oci_free_statement($stid);
	oci_close($con);
	
	
	funcWriteToDatabase($data);

}
?>