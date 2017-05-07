<!DOCTYPE html>
<html ng-app="shop">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Felipe Sangiorge">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=2, user-scalable=yes">
		<title>Degustando</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/owl-carousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/index-mobile.css">
		<script src="lib/angularjs/angular.min.js"></script>

	</head>

<body style="overflow-x: hidden;">

<header>
	<div id="menu-mobile-mask" class="visible-xs">
		
		
	</div>

	<div id="menu-mobile" class="visible-xs">

		<ul>
					<li><a href="videos.html">Vídeos</a></li>
					<hr>
					<li><a href="#">Novidades</a></li>
					<hr>
					<li><a href="#">Sobre</a></li>
					<hr>
					<li><a href="#">Contato</a></li>
					<hr>

					<li><a href="#" id="menu-header-fechar">Fechar</li>
		</ul>
	</div>

	<div class="container">
	 	<img class="img-circle" id="logotipo" src="img/coffe.jpg" alt="Logotipo" height="150" width="150" shape="circle">
	</div>

	<input type="search" id="input-search-mobile" class="visible-xs" placeholder="Pesquisar...">

	<div class="header-red"></div>

			<button id="btn-bars" class="pull-left" type="button"><i class="fa fa-bars"></i></button>
			
			<button id="btn-search" class="pull-right" type="button"><i class="fa fa-search"></i></button>

			
			
		<div class="row">

			<nav id="menu" class="pull-right">
				<ul>
					<li><a href="index.php">Início</a></li>
					<li><a href="videos">Vídeos</a></li>
					<li><a href="#">Novidades</a></li>
					<li><a href="#">Sobre</a></li>
					<li><a href="#">Contato</a></li>
					<li><a href="shop">loja</a></li>

					<li id="search">
					 <div class="col-lg-6">
    					<div class="input-group">
     						<input id="search-input" type="search" class="form-control" placeholder="Pesquisar">
      							<span class="input-group-btn">
        							<button class="btn btn-default" id="searchBtn"  type="button">   </button>
      							</span>
    					</div><!-- /input-group -->
 					 </div><!-- /.col-lg-6 -->

					</li>
				</ul>
			</nav>

		</div>

</header>