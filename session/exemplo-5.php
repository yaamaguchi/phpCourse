<?php 

	require_once("config.php");

	echo session_save_path();

	echo "<br>";
	var_dump(session_status());

	switch (session_Status()) {
		case PHP_SESSION_DISABLED:
			echo "<br>As sessões estão desabilitadas";
			break;
		case PHP_SESSION_NONE:
			echo "<br>Sessoes habilitadas, mas não iniciadas";
			break;
		case PHP_SESSION_ACTIVE:
			echo "<br>Sessoes habilitadas e iniciadas";
			# code...
			break;
	}
	
 ?>