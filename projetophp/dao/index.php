<?php

require_once 'config.php';

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

// Carraga um usuario __________________

//$root = new Usuario();

//$root -> loadById(2);

//echo $root;

//echo "<br>";

// Carraga Lista de  usuarios __________________
//$list = Usuario::getList();

//echo json_encode($list);

//$user = Usuario::search("2");

//echo "<br>";

//echo json_encode($user);

//echo "<br>";

// Carragar Login/senha __________________
//$validarUsuario = new Usuario();

//$validarUsuario->validaUsuario("Felipe", "1234");

//echo $validarUsuario;

// Inserindo usuario __________________
//$aluno = new Usuario("alunoteste","alunotseste");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario ->loadById(3);

$usuario ->update("teste213Update", "tes1423pdates");

echo $usuario;

?>