<?php
use Slim\Http\Response as Response;

require 'vendor/autoload.php';
require 'inc/configuration.php';
require_once ('src/DB/Sql.php');
require_once ('src/Model/Products.php');
require_once ('src/Model/User.php');



$app = new \Slim\App();


$app->get(
    '/',
    function () {
        require_once("view/index.php");
    }
);

$app->get(
    '/videos',
    function () {
        require_once("view/videos.php");
    }
);

$app->get(
    '/shop',
    function () {
        require_once("view/shop.php");
    }
);

$app->get(
		'/shop-produto-insert',
		function () {
			require_once("view/shop-produto-insert.php");
		}
		);

$app->get(
    '/cart',
    function () {
        require_once("view/cart.php");
    }
);

$app->get('/produtos', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos where preco_promorcional > 0 order by RAND() limit 4");

    foreach ($data as &$produto) {
        $preco = $produto['preco'];
        $centavos = explode(".", $preco);
        $produto['preco'] = number_format($preco, 0, ",", ".");
        $produto['centavos'] = end($centavos);
        $produto['parcelas'] = 10;
        $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    }

    echo json_encode($data);

});


$app->get('/produtos-mais-buscados', function(){

         $sql = new Sql();

    $data = $sql->select("

    	SELECT 
tb_produtos.id_prod,
tb_produtos.nome_prod_curto,
tb_produtos.nome_prod_longo,
tb_produtos.codigo_interno,
tb_produtos.id_cat,
tb_produtos.preco,
tb_produtos.peso,
tb_produtos.largura_centimetro,
tb_produtos.altura_centimetro,
tb_produtos.quantidade_estoque,
tb_produtos.preco_promorcional,
tb_produtos.foto_principal,
tb_produtos.visivel,
cast(avg(review) as dec(10,2)) as media, 
count(id_prod) as total_reviews
FROM tb_produtos 
INNER JOIN tb_reviews USING(id_prod) 
GROUP BY 
tb_produtos.id_prod,
tb_produtos.nome_prod_curto,
tb_produtos.nome_prod_longo,
tb_produtos.codigo_interno,
tb_produtos.id_cat,
tb_produtos.preco,
tb_produtos.peso,
tb_produtos.largura_centimetro,
tb_produtos.altura_centimetro,
tb_produtos.quantidade_estoque,
tb_produtos.preco_promorcional,
tb_produtos.foto_principal,
tb_produtos.visivel
LIMIT 10;

    	");

    foreach ($data as &$produto) {
        $preco = $produto['preco'];
        $centavos = explode(".", $preco);
        $produto['preco'] = number_format($preco, 0, ",", ".");
        $produto['centavos'] = end($centavos);
        $produto['parcelas'] = 10;
        $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    }

    echo json_encode($data);


});


$app->get("/produto-:id_prod",function($id_prod){

$sql = new Sql();


$produtos = $sql->select("SELECT * FROM tb_produtos where id_prod = $id_prod");

$produto = $produtos[0];

        $preco = $produto['preco'];
        $centavos = explode(".", $preco);
        $produto['preco'] = number_format($preco, 0, ",", ".");
        $produto['centavos'] = end($centavos);
        $produto['parcelas'] = 10;
        $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    


	require_once("view/shop-produto.php");
});

$app->get('/carrinho-dados', function(){

$sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $carrinho['produtos'] = $sql->select("CALL sp_carrinhosprodutos_list(".$carrinho['id_car'].")");

    $carrinho['total_car'] = number_format((float)$carrinho['total_car'], 2, ',', '.');
    $carrinho['subtotal_car'] = number_format((float)$carrinho['subtotal_car'], 2, ',', '.');
    $carrinho['frete_car'] = number_format((float)$carrinho['frete_car'], 2, ',', '.');

    echo json_encode($carrinho);

});

$app->post('/carrinho', function(){

    $request_body = json_decode(file_get_contents('php://input'), true);

    var_dump($request_body);

});

$app->get("/carrinhoAdd-:id_prod",function($id_prod){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql -> query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].",".$id_prod.")");

    header("Location: cart");

    exit;
});
//SELECT * FROM tb_produtos where preco_promorcional > 0 order by RAND() limit 3;

$app->delete("/carrinhoRemoveAll-:id_prod",function($id_prod){

     $sql = new Sql();

     $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

     $sql = new Sql();

    $sql -> query("CALL sp_carrinhosprodutostodos_rem(".$carrinho['id_car'].",".$id_prod.")");


    echo json_encode(array(

        "sucess"=>true

        ));

});

$app ->post("/carrinho-produto",function(){

    $data = json_decode(file_get_contents("php://input"),true);

     $sql = new Sql();

     $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

     $sql = new Sql();

    $sql -> query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].",".$data['id_prod'].")");


    echo json_encode(array(

        "sucess"=>true

        ));
});

$app ->delete("/carrinho-produto",function(){

    $data = json_decode(file_get_contents("php://input"),true);

     $sql = new Sql();

     $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

     $sql = new Sql();

    $sql -> query("CALL sp_carrinhosprodutos_rem(".$carrinho['id_car'].",".$data['id_prod'].")");


    echo json_encode(array(

        "sucess"=>true

        ));
});

// ADMINISTRAÇÃO ---------------

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
					
$app->get('/admin/editarprod-todos',function () {
						
						$sql = new Sql();
						
						$data = $sql->select('SELECT * FROM tb_produtos');
						
						echo json_encode($data);
						
				});

$app->get('/admin/editarprod',function () {

	require_once("view/adminlte/pages/editarprod.php");
	
});
					
$app->get('/admin/cadastroprod-last-id', function(){
							
				$sql = new SqlAdm();
							
				$data = $sql->select("SELECT id_prod FROM tb_produtos ORDER BY id_prod DESC LIMIT 1");
							
				echo json_encode($data);
							
				});
							
$app->post('/admin/cadastroprod',function($request,$response) use ($app){
								
				$sql = new SqlAdm();
								
				$results = $sql->select("SELECT id_prod FROM tb_produtos WHERE id_prod = :id_prod",array(
										
				":id_prod"=>$_POST["id_prod"]
				));
								
								if(empty($results)){
									
								
								
									$products = new Products();
									
					
									$products -> insert( 	$_POST["id_prod"],
											$_POST["nome_prod_curto"],
											$_POST["nome_prod_longo"],
											$_POST["codigo_interno"],
											$_POST["id_cat"],
											$_POST["preco"],
											$_POST["peso"],
											$_POST["largura_centimetro"],
											$_POST["altura_centimetro"],
											$_POST["quantidade_estoque"],
											$_POST["preco_promorcional"],
											$_POST["foto_principal"],
											$_POST["visivel"],
											$_POST["comprimento_centimetro"]);
									
						
									
									
								}else{
									
									$response = $this->router->pathFor('cadastroprod');
									
								/* 	$result = array("result","1");
									
								 	$app = new \Slim\Slim();
									$app->response;
									$app->response->setStatus(400);
									$app->response->headers->set('Content-Type', 'application/json');
									
									$app->response->write($result); */
									
									/* $res = new \Slim\Http\Response();
									$res->setStatus(302);
									$res->write('You made a bad request');
									$res->headers->set('Content-Type', 'text/plain');  */
									
								/* 	$response = new Response();
									
									$result = array("result","1");
									
									$result = $response->withStatus(302);
									
									header("Location: http://localhost/projetohtml/admin/cadastroprod",json_encode($result));
								
									exit; */
									
									
	
								}
										
								
								
								//header("Location: http://localhost/projetohtml/admin/cadastroprod");
								
								//exit;
								
							});

$app->run();


