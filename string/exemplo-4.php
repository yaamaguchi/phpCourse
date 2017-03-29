<?php 

	$frase = "A repetição é a mãe da retenção.";
	$palavra = "mãe";
	$q = strpos($frase, $palavra);

	var_dump($q);


//
	$textoCortado = substr($frase, 0, $q);
	echo "<br>" . $textoCortado;

//
	$textoCortado2 = substr($frase, $q + strlen($palavra), strlen($frase));
	echo "<br>" . $textoCortado2;
	
?>