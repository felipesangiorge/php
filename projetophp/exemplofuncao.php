<?php

$nome ="felipe";

function teste(){
	global $nome;
	
	echo $nome;


function teste2(){
	$nome = "doido";
	echo $nome."teste2";
}

teste();
teste2();
}

function atribuicao(){
	
	$nome = "felipe";
	
	$nome2 = 'sangiorge';
	
	var_dump($nome,$nome2);
	
	echo "ABC $nome";
	
atribuicao();
}

function stringMaiuscula(){
	
	$nome = "felipe santos avelar sangiorge";
	
	$palavra = "santos";
	
	$q= strpos($nome,"santos");
	
	var_dump($q);
	
	$texto = substr($nome, 0 , $q);
	
	echo $texto;
	
	
	$texto2 = substr($nome, $q + strlen($palavra),strlen($nome));
	
	echo $texto;

stringMaiuscula();
}

function somar($a , $b){
 
 return $a+$b;
 
}


?>

