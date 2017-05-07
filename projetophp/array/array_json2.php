<?php

$json = '[{"nome":"joao","idade":25},{"nome":"Felipe","idade":23}]';

$data = json_decode($json,true);

var_dump($data);

//CONSTANT

define("SERVIDOR","192.168.1.24");

echo SERVIDOR;

define("BANCO_DE_DADOS",[
		
		"127.0.0.1",
		"root",
		"root",
		"teste"
]);

print_r(BANCO_DE_DADOS);

?>