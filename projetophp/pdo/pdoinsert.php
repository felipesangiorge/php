<!DOCTYPE HTML>
	<html>
	
	<head></head>
	
		<body>
		
				<input type="text" value="<?php echo $usuario ?> placeholder="login">
				
				<input type="text" value="<?php echo $senha ?> placeholder="login">
				
				<button type="submit" class="button" name="myButton" value="foo">Entrar</button>
		
		</body>
	
	
	</html>

<?php

require_once 'config.php';

$stmt = $conn -> prepare ("INSERT INTO tb_usuarios (des_nome,des_senha) VALUES (:DESNOME,:DESSENHA)");

$login = $usuario;
$password = $senha;

$stmt -> bindParam(":DESNOME",$login);
$stmt -> bindParam(":DESSENHA",$password);

$stmt -> execute();

echo "Sucesso!";

?>