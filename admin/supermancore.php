<?php
require "dbconnect.php";header('Cache-Control: private, no-cache, must-revalidate');header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');header('Content-type: application/json; charset=utf-8');
ob_implicit_flush();
function getStream(){
	$interval = mysql_fetch_array(mysql_query("SELECT `value` FROM `settings_appliste` WHERE `key` = 'interval'"));
	$idcka = str_replace("[","",str_replace("\"","",str_replace("]","",$_POST['idcka'])));
	$countremoved = mysql_result(mysql_query("SELECT COUNT(*) FROM `".$_POST['tablename']."` WHERE `ID` IN (".$idcka.") AND `removed` = '1'"),0);
	$jsonwrapper = array("stream" => array(),"interval" => array(intval($interval['value'])),"reload" => array($countremoved));
	if ($countremoved != 0) {
	$query = mysql_query("SELECT * FROM `".$_POST['tablename']."` WHERE `ID` NOT IN (0) AND `removed` != '1' ORDER BY `ID` ASC ");	
	} else {
	$query = mysql_query("SELECT * FROM `".$_POST['tablename']."` WHERE `ID` NOT IN (".$idcka.") AND `removed` != '1' ORDER BY `ID` ASC ");
	}
	while ($vysledky = mysql_fetch_array($query)) {	
		$streamitem = array(
		"id" => $vysledky['ID'],
		"date" => date("H:i",substr_replace(substr_replace("".$vysledky['ID']."","",-1),"",-1)),
		"text" => $vysledky['text']
		);
		array_push($jsonwrapper['stream'],$streamitem);
	}
	echo json_encode($jsonwrapper);
	exit;
}
if ($_POST['getStream'] == "yes") {getStream();}
?>