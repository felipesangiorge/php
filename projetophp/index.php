<?php 

//$nome =(int)$_GET["a"];
//$idade = (int)$_GET["b"];
//var_dump($nome,$idade);

//$ip = $_SERVER["SERVER_ADDR"];

//var_dump($ip);

?>

<form>

<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" name="OK">

</form>

<?php 
if (isset($_GET)){
	foreach ($_GET as $key => $value){
		echo "nome do campo $key"."<br>";
		echo "valor do campo $value";
		echo "<hr>";
		
	}
}

?>


