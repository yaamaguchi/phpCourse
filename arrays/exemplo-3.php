<?php 
	
	$pessoas = array();


	array_push($pessoas, array(
		'nome' => 'Jao',
		'idade' => '24'
	));


	array_push($pessoas, array(
		'nome' => 'eurico',
		'idade' => '20'
	));


	print_r($pessoas);
	echo "<br><hr>";
	print_r($pessoas[0]);
	echo "<br><hr>";
	print_r($pessoas[0]['nome']);
	echo "<br><hr>";
?>