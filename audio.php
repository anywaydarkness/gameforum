<?php

	$_SESSION['userId'] = 1;

	include_once('config.php');
	
	if(!isset($_SESSION['userId']))
	{
		header('Location /');
		die();
	}
	
	include_once('tpl/audio.php');

?>