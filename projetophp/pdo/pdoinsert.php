<!DOCTYPE HTML>
	<html>
	
	<head></head>
	
		<body>
		
			<form>
				<input type="text" value="<?php $usuario ?>" placeholder="login">
				
				<input type="text" value="<?php $senha ?>" placeholder="Senha">
				
				<button type="submit" class="button" name="myButton" value="foo">Entrar</button>
			</form>
			
		</body>
	
	
	</html>

<?php

require_once 'config.php';

$stmt = $conn -> prepare ("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (:DESNOME,:DESSENHA)");



$stmt -> bindParam(":DESNOME",$usuario);
$stmt -> bindParam(":DESSENHA",$senha);

$stmt -> execute();

?>