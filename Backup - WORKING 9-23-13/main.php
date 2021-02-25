<!--     

 5/13/10	
 
 -->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload_CAM main.php</title>
<!--   <meta http-equiv="refresh" content="900" >    -->
</head>

  <meta http-equiv="refresh" content="900">  <!--   refresh if the script gets hung  -->

<body>

<p style="color: blue; margin-left: 20px; font-size: 32px"><br>
<b><em> Upload_CAM main.php </em></b></p>


<?php

$data = "";
$begin_time = time();
$start_time = time();

$edate1 = (date("F d\, Y h:i:s A") . " <br/> " );
echo ("<font color='blue'>" . "<b>" . "Script started at: " . $edate1 . "</b>" . "</font>" . "<br / >");
$audit_data = ("\nScript stated at: " . $edate1);


include("db_config.php");
include("EchoOutput.php");
include("GetCAMData.php");
include("WriteToDatabase.php");
include("OracleConnect.php");
include("StripPunctuation.php");
include("MySQLConnect.php");
include("GetMaxDocDate.php");



 
//include("../weighted_alarm_measurement/weighted_alarm_measurement_PHP_Scripts/main2.php");


//funcGetActiveCAMAssociateID($CAMConn);
//funcGetActiveAssocINFO($CAM_EventsConn,$CAMConn);
#funcGetCAMData();
funcGetMaxDocDate();

	

?>




<!--#######################################################
#         Echo our runtime & COMPLETE statements          #
########################################################-->

<p style="color: blue; margin-left: 20px; font-size: 24px"><br>
<b><em> main.php COMPLETE..................</em></b> last run at:</p>

<?php

$edate = (date("F d\, Y h:i:s A") . " <br/> " );
echo ($edate);

// #1b added The calculation of client run time
$end_time = time();
$client_run_time = ($end_time - $begin_time);
echo (" <br/> <font color='green'> <b> Total script runtime: " . $client_run_time . " seconds </b> </font> <br/> ");