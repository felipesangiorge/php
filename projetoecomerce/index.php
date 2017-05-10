<?php

require_once ('inc/Slim-2.x/Slim/Slim.php');
require_once ('src/DB/Sql.php');
require_once ('src/Model/User.php');


\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


$app->get('/',function () {
    	
       $sql = new Sql();
       
       $results = $sql->select("SELECT * FROM tb_users");
       
       echo json_encode($results);
       
    });


$app->get('/admin',function () {
	
	
		User::verifyLogin();
		
		require_once("view/adminlte/index.php");
		
		
	});

$app->get('/admin/login',function () {
			require_once("view/adminlte/pages/login.php");
		});

$app->post('/admin/login',function () {
	

		$user = new User();
		
		$user -> login($_POST["login"], $_POST["password"]);
	
		//header("Location: /projetoecomerce/admin");
		
		//exit;
	});

$app->run();


