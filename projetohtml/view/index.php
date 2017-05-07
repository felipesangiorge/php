
<?php
 include_once("header.php");
?>
<section>

				<div class="scroll pull-right" data-spy="affix" data-offset-top="60" data-offset-bottom="200" shape="circle" >
				<a href="#" class="btn btn-primary" id="scrollTop"><i class="fa fa-arrow-up" aria-hidden="true"></i>
				</a>

			</div>

	<div id="banner">
		
		<div id="maintext">
			<div class="row">	
				<img src="img/example.png">
			</div>

			<div class="row">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis diam ut egestas pharetra. Donec consectetur et tellus vel tincidunt. 
			</p>
			</div>
		</div>

	</div>

	<div id="noticias" class="container">


		<div class="row text-center">
	
			<h1>Ultimas Noticias</h1>
			<hr>
		</div>

			<div class="row thumbnails owl-carousel owl-theme">

				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>
				
				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>

				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>

				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>

				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>
				
				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>

				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>

				<div class="col-md-3 item">
					<img src="img/noticia.jpg" alt="Notícia">
					<h4>Dica de restaurante aberto na região da savassi, confira o cardapio</h4>
					<time>Dezembro 18,2016</time>
				</div>

			</div>
	</div>

	<div id="estatisticas" class="container">
		
		<div class="col-md-4">
			<h4 class="">1239</h4>
			<h5>Restaurantes</h5>
		</div>

		<div class="col-md-4">
			<h4 class="">3429</h4>
			<h5>Parceiros</h5>
		</div>

		<div class="col-md-4">
			<h4 class="">340</h4>
			<h5>Locais</h5>
		</div>

	</div>

	<div id="call-to-action" class="container">
		
		<div class="row text-center">
			<h2> Site de receitas e restaurante numero 1° </h2>
			<hr> 
		</div>

			<div class="row">
					<p>Maecenas vitae nisi ornare, congue eros in, iaculis metus. Proin maximus ac ante congue sagittis. Nullam augue mi, tincidunt in turpis quis, venenatis condimentum dui.</p>
			</div>
			<div class="btn-call-to-action">
				<!-- <div class="row"> -->
					<div class="col-xs-6">
						<a class="btn btn-default pull-right" href="#">Comprar</a>
					</div> 
				<!-- <div class="row"> -->
					<div class="col-xs-6">
						<a class="btn btn-default pull-left" href="#">Registrar</a>
					</div>
			</div>
		</div>
	

</section>

<?php 
include_once("footer.php");
 ?>

 <script>
 	
/* 	$(window).scroll(function(){
 		var value = jQuery(window).scrollTop();

 		$('.scoll').css("margin-top",+value);
 	});
*/
 	$('.scroll').affix({
  	offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.scroll').outerHeight(true))
    }
  }

});$(window).scroll(function(){

	var valuescroll = jQuery(window).scrollTop();

	if(valuescroll >= 1000){
		$('.scroll').removeClass('displaynone');
		$('.scroll').addClass('display');

	}else{
		$('.scroll').addClass('displaynone');
	}

});

 	$('.scroll').click(function(){

	jQuery("html,body").animate({scrollTop:"0"},"slow");

});


 </script>