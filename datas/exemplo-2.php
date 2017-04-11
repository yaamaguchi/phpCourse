<?php 

	$ts = strtotime("2001-09-11");

	echo date("l, d/m/Y", $ts);

	echo "<br> <hr>";

	$ts2 = strtotime("now");
	
	echo date("l, d/m/Y", $ts2);

 ?>