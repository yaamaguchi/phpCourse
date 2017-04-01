<?php 

	$json = '
[{"nome":"Jao","idade":"24"},{"nome":"eurico","idade":"20"},{"nome":"julio","idade":"20"}]';


	$pessoas = json_decode($json, true);

	var_dump($pessoas);


?>