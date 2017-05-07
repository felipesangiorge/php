
<?php
 include_once("header.php");
?>

<section ng-controller="destaque-controller">

	<div class="container" id="destaque-produtos-container" >

			<div id="destaque-produtos" class="owl-carousel owl-theme">

				<div class="item" ng-repeat="produto in produtos">
				<a href="produto-{{produto.id_prod}}">
						<div class="col-sm-6 col-imagem">
							<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
						</div>

						<div class="col-sm-6 col-descricao">

								<h2>{{produto.nome_prod_longo}}</h2>

							<div class="box-valor">
								
								<div class="text-noboleto text-arial-cinza">No boleto</div>
								<div class="text-por text-arial-cinza">por</div>
								<div class="text-reais text-orange">R$</div>
								<div class="text-valor text-orange">{{produto.preco}}</div>
								<div class="text-valor-centavos text-orange">,{{produto.centavos}}</div>
								<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
								<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>

							</div>

								<a href="#" class="btn btn-comprar text-orange"><i class="fa fa-shopping-cart"></i>compre agora</a>
						</div>
				</a>
				</div>

				
			</div>
				
	</div>

</div>

		<div id="promocoes" class="container">

			<div class="row">
					<div class="col-md-2">
						<div class="box-promocao">
							<p> Escolha por descontos</p>
						</div>
					</div>
			

				<div class="col-md-10">
					<div class="row-fluid">
						
							<div class="col-md-3 ">
								<div class="box-promocao">
									<div class="text-ate">até</div>
									<div class="text-numero-desconto">40</div>
									<div class="text-porcentagem">%</div>
									<div class="text-off">off</div>
								</div>
							</div>

							<div class="col-md-3 ">
								<div class="box-promocao">
									<div class="text-ate">até</div>
									<div class="text-numero-desconto">60</div>
									<div class="text-porcentagem">%</div>
									<div class="text-off">off</div>
								</div>
							</div>

							<div class="col-md-3 ">
								<div class="box-promocao">
									<div class="text-ate">até</div>
									<div class="text-numero-desconto">80</div>
									<div class="text-porcentagem">%</div>
									<div class="text-off">off</div>
								</div>
							</div>

							<div class="col-md-3 ">
								<div class="box-promocao">
									<div class="text-ate">até</div>
									<div class="text-numero-desconto">85</div>
									<div class="text-porcentagem">%</div>
									<div class="text-off">off</div>
								</div>
							</div>
						
					</div>
				</div>
			</div>
		</div>

		<div id="mais-buscados" class="row text-center">
	
			<h1>Os mais buscados</h1>
			<hr>

		</div>

		<div id="mais-buscados-carrousel" class="row-fluid container owl-carousel owl-theme" >
			
							<div class="col-md-3 text-center" ng-repeat="produto in buscados">
								<a href="produto-{{produto.id_prod}}">
									<div class="item">
										<img class="img-mais-buscados" src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
										<h3>{{produto.nome_prod_longo}}</h3>
									<div class="row">
										<div class="text-estrelas" data-score="{{produto.media}}"></div>
										<div class="text-qtd reviews">Qtd({{produto.total_reviews}})</div>
									</div>
										<div class="text-valor">R$ {{produto.total}}</div>
										<div class="text-parcelado">Em até {{produto.parcelas}}x de {{produto.parcela}} sem juros</div>
									</div>
								</a>
							</div>
						
					</div>
			</div>
	</div>

	
</section>

<?php 
include_once("footer.php");
 ?>

<script src="lib/jquery/jquery.min.js" ></script>
<script src="lib/plyr/dist/plyr.js" ></script>
<script src="lib/owl-carousel/dist/owl.carousel.min.js" ></script>
<script src="lib/bootstrap/js/bootstrap.min.js" ></script>
<script src="lib/raty/lib/jquery.raty.js"></script>
<script src="js/efeitos.js"></script>

 <script>

angular.module("shop", []).controller("destaque-controller",function($scope,$http){

	$scope.produtos = [];
	$scope.buscados = [];

	var initCarousel = function(){

		$('#destaque-produtos').owlCarousel({
				 animateOut: 'fadeOut',
		 		 items:1,
				 loop:true,
				 autoplay:true,
    			 autoplayTimeout:7000,
    			 autoplayHoverPause:true,
				 nav: true,
				 navText:["<i id='btn-destaque-next' class='fa fa-angle-right owl-prev'></i>","<i id='btn-destaque-prev' class='fa fa-angle-left owl-next'></i>"]

				 
		});

		$('#mais-buscados-carrousel').owlCarousel({
				 animateOut: 'fadeOut',
		 		 items:4,
				 loop:true,
				 autoplay:true,
    			 autoplayTimeout:7000,
    			 autoplayHoverPause:true,
				 nav: true,
			
				 
	});

	}


	$http({
	 	 method: 'GET',
	  		url: 'produtos'
		}).then(function successCallback(response) {

	    		$scope.produtos = response.data;

	    		setTimeout(initCarousel, 1000);

	  	}, function errorCallback(response) {
			   	
			   	console.log("Erro ao buscar dados produtos");
	  });

		var initEstrelas = function(){

		$(".text-estrelas").each(function(){

 		$(this).raty({

 			starHalf    : 'lib/raty/lib/images/star-half.png',   // The name of the half star image.
			starOff     : 'lib/raty/lib/images/star-off.png',   // Name of the star image off.
			starOn      : 'lib/raty/lib/images/star-on.png',   // Name of the star image on.
			score       : parseFloat($(this).data("score"))

 					})

 	});

	}

		$http({
	 	 method: 'GET',
	  		url: 'produtos-mais-buscados'
		}).then(function successCallback(response) {

	    		$scope.buscados = response.data;

	    		setTimeout(initCarousel, 1000);
	    		setTimeout(initEstrelas,1000);

	  	}, function errorCallback(response) {
			   	
			   	console.log("Erro ao buscar dados produtos mais buscados");
	  });



});

 </script>


 <script>

 </script>
