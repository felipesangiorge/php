<?php

function soma(int ...$valores){
	
	return array_sum($valores);
}

echo soma(1,2,3,4,5,6,7,8,9,10);

//anonima

function teste($callback){
	
	//processo
	
	$callback();
	
}

teste(function(){
	
	echo "terminou";
});

$fn = function($a){
	
	var_dump($a);
	
};
	
$fn("oi")
?>