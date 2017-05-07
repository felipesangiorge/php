<?php

require_once 'config.php';

$stmt = $conn -> prepare ("UPDATE tb_usuarios SET des_nome = :DESNOME , des_senha = :DESSENHA WHERE id_usuario = 3");

$login = "Lucas";
$password = "123qwes4556";

$stmt -> bindParam(":DESNOME",$login);
$stmt -> bindParam(":DESSENHA",$password);

$stmt -> execute();

echo "Sucesso!";

?>
