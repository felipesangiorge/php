<?php

include_once("header.php");
?>




<section>

    <div class="container" id="destaque-produtos-container" >

            <div id="destaque-produtos" class="">         
                           
                        <div class="col-sm-6 col-descricao">
						
							<form action="" method="post">
								<input type="text" placeholder="Nome Curto" name="get-nome-curto">
	                        </form>     
                        </div>
                        
                         <div class="col-sm-6 col-descricao">
                         
						<input id="confirm-insert" type="submit">
                               
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

	$(#confirm-insert).click(function(){

		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "degustando_shop";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO tb_produtos (nome_prod_curto, nome_prod_longo)
				VALUES ('John', 'Doe')";

				if ($conn->query($sql) === TRUE) {
					
				    echo "New record created successfully";
				    
				} else {
					
				    echo "Error: " . $sql . "<br>" . $conn->error;
				    
				}

				$conn->close();
				
		
	});

</script>

