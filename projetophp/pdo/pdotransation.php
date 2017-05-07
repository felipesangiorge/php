<?php

require_once 'config.php';

$conn -> beginTransaction();

$stmt = $conn -> prepare ("DELETE FROM tb_usuarios WHERE id_usuario = ?");


$id=2;

$stmt -> execute(array($id));

//$conn ->rollBack();
$conn -> commit();

echo "Sucesso!";

?>

