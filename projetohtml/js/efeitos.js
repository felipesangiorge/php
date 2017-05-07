$(document).ready(function(){

		$("#search-input").on("focus",function(){

			$("#searchBtn").addClass("ativo");

		}).on("blur",function(){

			$("#searchBtn").removeClass("ativo");

		});

		$(".thumbnails").owlCarousel({

				
				items : 4,
				autoplay:true,
				autoplayTimeout:7000,
				autoplayHoverPause:true

			});	
		$(".video-carousel").owlCarousel({
				 items:3,
				 loop:true,
				 autoplay:true,
				 autoplayTimeout:7000,
				 autoplayHoverPause:true

		});
		$("#btn-bars,#menu-mobile-mask ").on("click",function(){

			$("header").toggleClass("open-menu");

		});

		$("#menu-header-fechar").on("click",function(){

		$("header").removeClass("open-menu");

		});

		$("#btn-search").on("click",function(){

			$("header").toggleClass("open-search");

			$("#input-search-mobile").focus();
		});

		

	
	});