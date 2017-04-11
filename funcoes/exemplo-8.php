<?php 

	function soma (float ...$valores) : float{
		return array_sum($valores);
	}


	var_dump( soma(2,2) );
	echo "<br><hr>";
	var_dump( soma(22,21) );
	echo "<br><hr>";
	var_dump( soma(2.2,2.9) );
	echo "<br><hr>";
 ?>