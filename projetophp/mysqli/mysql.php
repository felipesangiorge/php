<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
	
	echo "Error".$conn ->connect_error;
	exit;
}

$stmt = $conn -> prepare("INSERT INTO tb_usuarios(des_nome,des_senha) VALUES(?,?)");

$stmt -> bind_param("ss",$login,$pass);

$login = "felipe2";
$pass = "213124";

$stmt -> execute();

$login = "felipe3";
$pass = "21312213";

$stmt -> execute();

echo "dados inseridos!"

?>