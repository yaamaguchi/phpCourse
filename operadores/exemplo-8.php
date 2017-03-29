<?php

////////////////////////////////////////
//                                    //
//		        OPERADORES            //
//                                    //
////////////////////////////////////////

	$resultado = 10 + 3 / 2;
	echo $resultado . "<br>";

	$resultado2 = (10 + 3) / 2;
	echo $resultado2 . "<br>";

	$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 50;
	var_dump($resultado3);
	echo "<br>";

	$resultado4 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
	var_dump($resultado4);
	echo "<br>";
?>