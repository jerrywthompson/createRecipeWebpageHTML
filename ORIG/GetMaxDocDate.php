<?php

function funcGetMaxDocDate ()
{
	echo "************** In funcGetMaxDocDate **************** <br/> ";
	
	
	$sql = "
		SELECT 
			DATE_FORMAT(DATE_SUB(max(e.doc_date), INTERVAL 1 day),'%d-%b-%Y %h:%i:%s.%f %p')  as query_date
		FROM
			cam_events.events e;";
		
		
	$db = 'cam_events';
	

	//$assoc_data = funcMySQLConnect($db, $sql);
	
	
	//funcMySQLConnect($db, $sql);
	//funcEchoOutput($assoc_data);
	
	//funcEchoOutput(funcMySQLConnect($db, $sql));
	
	#funcGetWeightedParamInfo(funcMySQLConnect($db, $sql));
	
	funcGetCAMData(funcMySQLConnect($db, $sql, "read"));	

	
}
?>