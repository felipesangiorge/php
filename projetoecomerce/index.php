<?php
require 'inc/Slim-2.x/Slim/Slim.php';
require 'src/DB/Sql.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->config('debug',true);

$app->get(
    '/',
    function () {
       $sql = new Sql();
       
       $results = $sql->select("SELECT * FROM tb_users");
       
       echo json_encode($results);
       
    }
);


$app->run();


