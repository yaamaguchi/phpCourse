<?php 
	$meses = array(
		"Janeiro", "Fevereiro" , "Marco", "Abril", "Maio",
		"Junho", "Julho", "Agosto", "Setembro" , "outubro" , "Novembro", "Dezembro");

	foreach ($meses as $mes) {
		echo "O mes é $mes <br>";
	}


	foreach ($meses as $index => $mes) {
		echo "O indice $index -> $mes   <br>";
	}

?>