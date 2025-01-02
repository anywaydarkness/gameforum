<?php

	include_once('security.php'); // дані для підключення до бд
	include_once('class/db.class.php');
	
	session_start();
	
	$db = new Db($conf);

?>