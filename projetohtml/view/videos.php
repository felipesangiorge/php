<?php include_once("header.php"); ?>

		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="lib/plyr/dist/plyr.css">
		<link rel="stylesheet" href="lib/owl-carousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="css/videos.css">
		<link rel="stylesheet" href="css/videos-mobile.css">


<section>
	<div id="banner">

			<div class="row text-center">
			<h1> Videos </h1>
			<hr> 
	</div>
		
		<div id="maintext-video" class="container">

				<div class="row">	
				
					<div class="container">

						<div class="player">
							<video src="mp4/videoplayback.mp4" controls poster="img/videoplayback.jpg"></video>
						</div>

					<!-- 	<input type="range" id="volume-video" min="0" max="1" step="0.001" value="1">

						<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button> -->
						<hr>
					</div>
		
				</div>
			<div class="row video-carousel owl-carousel owl-theme">	
				
				
					<div class="col-md-3 item" data-video="videoplayback">
					<img src="img/videoplayback.jpg" alt="Notícia">
					<h4>video 1</h4>
					
				</div>
				
				<div class="col-md-3 item" data-video="videoplayback2">
					<img src="img/videoplayback2.jpg" alt="Notícia">
					<h4>video 2</h4>
					
				</div>
		
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

	<div class="row">
		<div class="col-xs-6">
			<a class="btn btn-default pull-right" href="#">Comprar</a>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<a class="btn btn-default pull-left" href="#">Registrar</a>
	</div>

</section>

<?php include_once("footer.php"); ?>

<script src="lib/jquery/jquery.min.js" ></script>
<script src="lib/plyr/dist/plyr.js" ></script>
<script src="lib/owl-carousel/dist/owl.carousel.min.js" ></script>
<script src="lib/bootstrap/js/bootstrap.min.js" ></script>
<script src="js/efeitos.js"></script>
<script>
	(function(d, p){
		var a = new XMLHttpRequest(),
			b = d.body;
		a.open("GET", p,true);
		a.send();
		a.onload = function(){
			var c = d.createElement("div");
			c.style.display = "none";
			c.innerHTML = a.responseText;
			b.insertBefore(c,b.childNodes[0]);
		}
	})(document, "lib/plyr/dist/plyr.svg");

</script>
<script>
	$(function(){

		$(".video-carousel .item").on("click",function(){

			// console.log($(this).data('video'));
			$("video").attr({
				"src":"mp4/"+$(this).data('video')+".mp4",
				"poster":"img/"+$(this).data('video')+".jpg"
				});
		});

			$("#volume-video").on("mousemove",function(){
					$('video')[0].volume = parseFloat($(this).val());
			});

			$("#btn-play-pause").on("click",function(){

				

				var video = $("video")[0];

				if($(this).hasClass("btn-success")){
					$(this).text("STOP");
					video.play();
				}else{

					$(this).text("PLAY");
					video.pause();
				}

				$(this).toggleClass("btn-success btn-danger");
			});

			plyr.setup();//Disparando Player PLYR

	});

</script>