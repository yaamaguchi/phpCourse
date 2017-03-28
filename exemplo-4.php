<?php 

//
//	VARIÁVEIS PRÈ DEFINIDAS
//
// ----->>> 
// 			$_GET[""]
//			RECEBE UM VALOR VIA URL
//			http://localhost.com.br?a=1234

	$nome = $_GET["a"];

// ----->>> 
//			para fazer o CAST do $_GET é só utilizar (int)

	$nome2 = (int)$_GET["b"];

// ----->>> 
//			PARA ENVIAR 2 OU MAIS PARAMETROS, BASTA ADICIONAR "&"
//			http://localhost.com.br?a=1234&b=3323

	var_dump($nome);
	var_dump($nome2);

// ----->>> 
//			$_SERVER["REMOTE_ADDR"]
//			RECUPERA O IP DO AMBIENTE NA QUAL O USUÀRIO ESTÀ REALIZANDO O ACCESSO

	$ip = $_SERVER["REMOTE_ADDR"];
	echo $ip;

//			$_SERVER["SCRIPT_NAME"]
//			RETORNA O LOCAL QUE O USUARIO ACESSOU

	$script = $_SERVER["SCRIPT_NAME"];
	echo $script;

//			$_SERVER["..."] RECUPERA UM "LOG" 

	
?>