<?php

$pessoas = array();


array_push($pessoas, array(
		
		"nome"=>"joao",
		"idade"=>25
));

array_push($pessoas, array(
		
		"nome"=>"Felipe",
		"idade"=>23
));

print_r($pessoas[0]["nome"]);

echo json_encode($pessoas);

?>