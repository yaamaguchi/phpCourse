<?php 

	function soma (int ...$valores){
		return array_sum($valores);
	}


	echo soma(2,2) . "<br><hr>";
	echo soma(22,21) . "<br><hr>";
	echo soma(2.2,2.9) . "<br><hr>";

 ?>