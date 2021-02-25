
<?php

########################################################################
#       Function to get CAM_Events Database connection info            #
########################################################################

function funcConnectCAM_EventsDatabase()
{

	$AMS_Database_db_un = 'localhost';
	$AMS_Database_db_pw = 'root';
	$AMS_Database_db_host = 'pink';

		
	$AMSDatabaseConn = array($AMS_Database_db_un,$AMS_Database_db_pw,$AMS_Database_db_host);
	return($AMSDatabaseConn);	

}


########################################################################
#       Function to get CWx_CAM Alarm Database connection info         #
########################################################################

function funcConnectCWx_CAMDatabase()
{

	$Client_db_un = 'cwx';
	$Client_db_pw = 'esmtools';
	//$Client_db_host = '(DESCRIPTION=(ADDRESS=(PROTOCOL=tcp)(HOST=10.185.82.51)(PORT=1521))(CONNECT_DATA=(SID=camprd)))';
	$Client_db_host = '10.185.82.51/camprd';
//$CAMConn = oci_connect('cwx', 'esmtools', '10.185.82.51/camprd');
	$ClientConn = array($Client_db_un,$Client_db_pw,$Client_db_host);
	return($ClientConn);


}



?>