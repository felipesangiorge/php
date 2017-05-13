<?php

require_once ('src/DB/Sql.php');

class Products{
	
	private $idproduct;
	private $desproduct;
	private $vlprice;
	private $vlwidth;
	private $vlheight;
	private $vllength;
	private $vlweight;
	private $desurl;
	private $dtregister;
	
	
	public function getIdproduct(){
		
		return $this -> idproduct;
		
	}
	
	public function setIdproduct($value){
		
		$this->idproduct = $value;
		
	}
	
	public function getDesproduct(){
		
		return $this -> desproduct;
		
	}
	
	public function setIdDesproduct($value){
		
		$this->desproduct = $value;
		
	}
	
	public function getVlprice(){
		
		return $this -> vlprice;
		
	}
	
	public function setVlprice($value){
		
		$this->vlprice = $value;
		
	}
	
	public function getVlwidth(){
		
		return $this -> vlwidth;
		
	}
	
	public function setVlwidth($value){
		
		$this->vlwidth = $value;
		
	}
	
	public function getVlheight(){
		
		return $this -> vlheight;
		
	}
	
	public function setVlheight($value){
		
		$this->vlheight = $value;
		
	}
	
	public function getVllength(){
		
		return $this -> vllength;
		
	}
	
	public function setVllength($value){
		
		$this->vllength = $value;
		
	}
	
	public function getVlweight(){
		
		return $this -> vlweight;
		
	}
	
	public function setVlweight($value){
		
		$this->vlweight = $value;
		
	}
	
	public function getDesurl(){
		
		return $this -> desurl;
		
	}
	
	public function setDesurl($value){
		
		$this->desurl = $value;
		
	}
	
	public function getDtregister(){
		
		return $this -> dtregister;
		
	}
	
	public function setDtregister($value){
		
		$this->dtregister = $value;
		
	}
	
	
	public function insert(		$id_prod,
								$nome_prod_curto,
								$nome_prod_longo,
								$codigo_interno,
								$id_cat,
								$preco,
								$peso,
								$largura_centimetro,
								$altura_centimetro,
								$quantidade_estoque,
								$preco_promorcional,
								$foto_principal,
								$visivel,
								$comprimento_centimetro){
		
									
			$sql = new SqlAdm();
			
			$sql ->query("INSERT INTO tb_produtos (id_prod,
								nome_prod_curto,
								nome_prod_longo,
								codigo_interno,
								id_cat,
								preco,
								peso,
								largura_centimetro,
								altura_centimetro,
								quantidade_estoque,
								preco_promorcional,
								foto_principal,
								visivel,
								comprimento_centimetro) VALUES (:id_prod,
								:nome_prod_curto,
								:nome_prod_longo,
								:codigo_interno,
								:id_cat,
								:preco,
								:peso,
								:largura_centimetro,
								:altura_centimetro,
								:quantidade_estoque,
								:preco_promorcional,
								:foto_principal,
								:visivel,
								:comprimento_centimetro)",array(
										
										"id_prod"=>$id_prod,
										"nome_prod_curto"=>$nome_prod_curto,
										"nome_prod_longo"=>$nome_prod_longo,
										"codigo_interno"=>$codigo_interno,
										"id_cat"=>$id_cat,
										"preco"=>$preco,
										"peso"=>$peso,
										"largura_centimetro"=>$largura_centimetro,
										"altura_centimetro"=>$altura_centimetro,
										"quantidade_estoque"=>$quantidade_estoque,
										"preco_promorcional"=>$preco_promorcional,
										"foto_principal"=>$foto_principal,
										"visivel"=>$visivel,
										"comprimento_centimetro"=>$comprimento_centimetro
										
										
								));
			
		
	}
	
	
}

?>