<?php

require_once 'config.php';


$stmt = $conn -> prepare("SELECT * FROM tb_usuarios");

$stmt ->execute();

$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){
	
	foreach($row as $key => $value){
		
		echo $key;
		echo $value;
	}
	
	echo "-----";
	
}

var_dump($results);

?>