<?php

////////////////////////////////////////
//                                    //
//		  ESCOPO DE VARIÀVEIS         //
//                                    //
////////////////////////////////////////

	$nome = "Matheus";

	function teste(){
		global $nome;
		echo $nome;
	}

	function teste2(){
		global $nome;
		echo $nome . "teste2";
	}


	teste();

	teste2();

?>