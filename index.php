<?php

	include_once('config.php');
	
	if(!isset($_SESSION['userId']))
	{
		include_once('tpl/welc.php');
		die();
	}

?>