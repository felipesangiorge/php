<?php

require_once 'config.php';

$stmt = $conn -> prepare ("UPDATE tb_usuarios SET des_nome = :DESNOME , des_senha = :DESSENHA WHERE id_usuario = :ID");

$login = "Lucas";
$password = "123qwes4556";
$id=4;

$stmt -> bindParam(":DESNOME",$login);
$stmt -> bindParam(":DESSENHA",$password);
$stmt -> bindParam(":ID",$id);

$stmt -> execute();

echo "Sucesso!";

?>
