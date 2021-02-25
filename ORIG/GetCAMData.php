<?php

function funcGetCAMData($query_date)
{
	
	echo "************** In funcGetCAMData **************** <br/>";
	
	//funcEchoOutput($query_date);
	
	//$maxdate = $max_doc_date['max_date'];
	//echo "maxdate: " . $query_date  . "<br/>";
	//$oracle_format_date = date($query_date, "Y-m-d H:i:s");

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
			  p.lname ||', '|| p.fname AS ACK_USER,
			  p.username AS ACK_USERNAME,
			  p2.lname ||', '|| p2.fname AS DOC_USER,
			  p2.username AS DOC_USERNAME,
			  TO_CHAR(a.ack_dt_tm,'YYYY-MM-DD HH24:MI:SS') as ACK_Date,
			  TO_CHAR(a.conf_dt_tm,'YYYY-MM-DD HH24:MI:SS') as CONF_Date, 
			  TO_CHAR(a.doc_dt_tm,'YYYY-MM-DD HH24:MI:SS') as Doc_DateTime,
			  TO_CHAR(a.doc_dt_tm,'YYYY-MM-DD') as Doc_DateONLY,
			  
			  a.action_taken AS Action_Taken,
			  a.source AS Source,
			  a.annote_data AS Annotation

		FROM 	cwx.arch_events a 

			JOIN CWX.rem_party p
			  ON p.party_id = a.ack_user
			  
			JOIN CWX.rem_party p2
			  ON p2.party_id = a.doc_user_id

		WHERE 
				/*a.es_in_time > sysdate - 15 
			 		a.es_in_time > '01-Aug-2013 01:00:00.000000 AM' 
			  and      a.es_in_time < '01-OCT-2013 12:00:00.000000 PM' */
				a.es_in_time >= '$query_date'
			  and      a.ack_user is not null  
															
		ORDER BY a.cam_id";

	//funcEchoOutput($sql);

	funcOracleConnect($sql);

}
?>