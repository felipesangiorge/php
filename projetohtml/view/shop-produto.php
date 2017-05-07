
<?php
 include_once("header.php");
?>

<section>

    <div class="container" id="destaque-produtos-container" >

            <div id="destaque-produtos" class="">
             

                            <div class="col-sm-6 col-imagem">
                                    <img src="img/produtos/<?=$produto['foto_principal']?>" alt="<?=$produto['nome_prod_longo']?>">
                            </div>

                        <div class="col-sm-6 col-descricao">

                                <h2><?=$produto['nome_prod_longo']?></h2>

                            <div class="box-valor">
                                
                                <div class="text-noboleto text-arial-cinza">No boleto</div>
                                <div class="text-por text-arial-cinza">por</div>
                                <div class="text-reais text-orange">R$</div>
                                <div class="text-valor text-orange"><?=$produto['preco']?></div>
                                <div class="text-valor-centavos text-orange">,<?=$produto['centavos']?></div>
                                <div class="text-parcelas text-arial-cinza">ou em até <?=$produto['parcelas']?>x de R$ <?=$produto['parcela']?></div>
                                <div class="text-total text-arial-cinza">total a prazo R$ <?=$produto['total']?></div>

                            </div>

                                <a href="carrinhoAdd-<?=$produto['id_prod']?>" class="btn btn-comprar text-orange"><i class="fa fa-shopping-cart"></i>compre agora</a>
                        </div>

                    </div>
                 
            </div>
                
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

