<?php

require "dbconnect.php";

	header('Cache-Control: private, no-cache, must-revalidate');
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Content-type: application/json; charset=utf-8');

// Function for login

function login(){

	if (mysql_result(mysql_query("SELECT COUNT(*) FROM admins_appliste WHERE username = '".$_POST['username']."' AND password = '".sha1($_POST['password'])."'"),0) == 1) {

	session_start();
	$_SESSION['logedin'] = "1";
	$_SESSION['username'] = $_POST['username'];

	echo json_encode(array(1));

	flush();

	}

	exit();

}

// Function to add new message to DB, username is here hardset for check if session username is unchanged, this might be changed.

function addNew(){

	session_start();

	if ($_SESSION['logedin'] == "1" && $_SESSION['username'] == "appliste") {

	echo json_encode(array(1));

	flush();

	mysql_query("INSERT INTO `".$_POST['tablename']."` (ID,text) VALUES ('".time().rand(10,99)."','".$_POST['text']."')");

	} else {

	echo json_encode(array(2));

	flush();

	}

	exit();

}

// Function to respond if login is still valid

function amIlogedIn(){

	session_start();

	// DON'T FORGET TO CHANGE USERNAME

	if ($_SESSION['logedin'] == "1" && $_SESSION['username'] == "appliste") {

	echo json_encode(array(1));

	flush();

	} else {

	echo json_encode(array(2));

	flush();

	}

	exit();

}

// Function that writes new interval to DB where clients will read it from

function changeInterval(){

	session_start();

	// DON'T FORGET TO CHANGE USERNAME

	if ($_SESSION['logedin'] == "1" && $_SESSION['username'] == "appliste") {

	echo json_encode(array(1));

	flush();

	mysql_query("UPDATE `settings_appliste` SET `value` = '".$_POST['newinterval']."' WHERE `key` = 'interval'");

	} else {

	echo json_encode(array(2));

	flush();

	}

	exit();

}

// Function to remove messages

function removeMessage(){

	session_start();

	// DON'T FORGET TO CHANGE USERNAME

	if ($_SESSION['logedin'] == "1" && $_SESSION['username'] == "appliste") {

	echo json_encode(array(1));

	flush();

	mysql_query("UPDATE `".$_POST['tablename']."` SET `removed` = '1' WHERE `ID` = '".$_POST['idzpravy']."' LIMIT 1");

	} else {

	echo json_encode(array(2));

	flush();

	}

	exit();

}

if ($_POST['login'] == "yes") {login();}
if ($_POST['addNew'] == "yes") {addNew();}
if ($_POST['amIlogedIn'] == "yes") {amIlogedIn();}
if ($_POST['changeInterval'] == "yes") {changeInterval();}
if ($_POST['removeMessage'] == "yes") {removeMessage();}

?>
