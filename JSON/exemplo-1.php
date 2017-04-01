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

	array_push($pessoas, array(
		'nome' => 'julio',
		'idade' => '20'
	));


	echo json_encode($pessoas);
?>