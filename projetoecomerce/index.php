<?php

use Slim\Helper\Set;
use Slim\Http\Request;
use Slim\Http\Response;

require_once ('inc/Slim-2.x/Slim/Slim.php');
require_once ('src/DB/Sql.php');
require_once ('src/Model/User.php');
require_once ('src/Model/Products.php');


\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


$app->get('/',function () {
    	
       $sql = new Sql();
       
       $results = $sql->select("SELECT * FROM tb_users");
       
       echo json_encode($results);
       
    });


$app->get('/admin',function () {
		
	User::verifyLogin($_SESSION['usuario'],$_SESSION['inadmin']);
		
	});

$app->get('/admin/login',function () {
			require_once("view/adminlte/pages/login.php");
		});

$app->post('/admin/login',function () {
	

		$user = new User();
		
		$user -> login($_POST["login"], $_POST["password"]);
	
		 header("Location: /projetoecomerce/admin");
		
		exit; 
	});

$app->get('/admin/cadastroprod',function () {
		
		
		require_once("view/adminlte/pages/cadastroprod.php");
		
	});

$app->get('/admin/cadastroprod-existente',function () {
		
		
		
});

$app->get('/admin/cadastroprod-last-id', function(){
	
	$sql = new Sql();
	
	$data = $sql->select("SELECT idproduct FROM tb_products ORDER BY idproduct DESC LIMIT 1");
	
	echo json_encode($data);
	
});

$app->post('/admin/cadastroprod',function () use ($app) {
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT idproduct FROM tb_products WHERE idproduct = :idproduct",array(
				
				":idproduct"=>$_POST["idproduct"]
		));
		
		if(empty($results)){
		
		
			$products = new Products();
			
			$products -> insert( 	$_POST["idproduct"],
					$_POST["desproduct"],
					$_POST["vlprice"],
					$_POST["vlwidth"],
					$_POST["vlheight"],
					$_POST["vllength"],
					$_POST["vlweigth"],
					$_POST["desurl"]); 
			
			$app=Slim\Slim::getInstance();
			$response = $app->response();
			$response['Content-Type'] = 'application/json';
			$response->status(200);
			$response->body(json_encode((object)array('success'=>true)));

			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'cadastroprod.php';
			header("Location: http://$host$uri/$extra");
			exit;
		
		}else{
			
			$retorno = array();
			
			array_push($retorno, array(
					
					"retorno"=>"code-invalid:already-exists.",
			
			));
			
			
			$app=Slim\Slim::getInstance();
			$response = $app->response();
			$response['Content-Type'] = 'application/json';
			$response->status(200);
			$response->body(json_encode((object)array('success'=>false)));
			
		
			
		}
	
		/* $products = new Products();
		
		$products -> insert( 	$_POST["idproduct"], 
								$_POST["desproduct"], 
								$_POST["vlprice"], 
								$_POST["vlwidth"], 
								$_POST["vlheight"], 
								$_POST["vllength"], 
								$_POST["vlweigth"], 
								$_POST["desurl"]); */
		
		//header("Location: /projetoecomerce/admin/cadastroprod");
		
		//exit;
	});

$app->run();


