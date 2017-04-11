<?php 

	require_once("config.php");


	session_unset(); // LIMPA VARIÀVEIS

	echo $_SESSION['nome'];

	session_destroy(); // LIMPA E REMOVE


 ?>