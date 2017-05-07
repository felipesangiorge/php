<?php

require_once 'config.php';

$stmt = $conn -> prepare ("DELETE FROM tb_usuarios WHERE id_usuario = :ID");


$id=4;

$stmt -> bindParam(":ID",$id);

$stmt -> execute();

echo "Sucesso!";

?>
