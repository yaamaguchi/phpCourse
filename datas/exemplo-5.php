<?php 

	$dt = new DateTime();

	$periodo = new DateInterval("P15D");

	echo $dt -> format("d/m/Y H:i:s");
	echo "<br> <hr>";
////////////////////////////////////////////
	$dt -> add($periodo);

	echo $dt -> format("d/m/Y H:i:s");
	echo "<br> <hr>";
////////////////////////////////////////////
	$periodo2 = new DateInterval("P30D");
	$dt -> sub($periodo2);

	echo $dt -> format("d/m/Y H:i:s");
 ?>