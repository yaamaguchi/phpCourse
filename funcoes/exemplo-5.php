<?php 

	$a = 10;

////////////////////////////////////////////////////////////////////////////
	function trocaValor($b){
		$b += 50;

		return $b;
	}

	echo $a . "<br>";

	echo trocaValor($a) . "<br>";

	echo $a . "<br><hr>";

	////////////////////////////////////////////////////////////////////////////
	// ---> passando a referencia da variavel (PONTEIRO)
	function trocaValor2(&$b){
		$b += 50;

		return $b;
	}

	echo $a . "<br>";

	echo trocaValor2($a) . "<br>";

	echo $a . "<br>";
 ?>