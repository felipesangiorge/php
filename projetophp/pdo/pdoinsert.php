<?php

require_once 'config.php';

$stmt = $conn -> prepare ("INSERT INTO tb_usuarios (des_nome,des_senha) VALUES (:DESNOME,:DESSENHA)");

$login = "Camila";
$password = "1234556";

$stmt -> bindParam(":DESNOME",$login);
$stmt -> bindParam(":DESSENHA",$password);

$stmt -> execute();

echo "Sucesso!";

?>