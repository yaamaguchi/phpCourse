<?php 


	session_id('fhgna9dhvhs8qes623p4eobraiarray');

	
	require_once("config.php");


	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);
 ?>