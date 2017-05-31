<?php

require_once ('src/DB/Sql.php');

class Products{
	
	private $id_prod;
	private $nome_prod_curto;
	private $nome_prod_longo;
	private $codigo_interno;
	private $id_cat;
	private $preco;
	private $peso;
	private $largura_centimetro;
	private $altura_centimetro;
	private $quantidade_estoque;
	private $preco_promorcional;
	private $foto_principal;
	private $visivel;
	private $comprimento_centimetro;
	
	
	public function getId_prod(){	
		return $this ->id_prod;	
	}

	public function setId_prod($value){
		
		$this->id_prod = $value;
		
	}
	
	public function getNome_prod_curto(){
		
		return $this ->nome_prod_curto;
		
	}
	
	public function setNome_prod_curto($value){
		
		$this->nome_prod_curto = $value;
		
	}
	public function getNome_prod_longo(){
		
		return $this ->nome_prod_longo;
		
	}
	
	public function setNome_prod_longo($value){
		
		$this->nome_prod_longo = $value;
		
	}
	public function getCodigo_interno(){
		
		return $this ->codigo_interno;
		
	}
	
	public function setCodigo_interno($value){
		
		$this->codigo_interno = $value;
		
	}
	public function getId_cat(){
		
		return $this ->id_cat;
		
	}
	
	public function setId_cat($value){
		
		$this->id_cat = $value;
		
	}
	public function getPreco(){
		
		return $this ->preco;
		
	}
	
	public function setPreco($value){
		
		$this->preco = $value;
		
	}
	public function getPeso(){
		
		return $this ->peso;
		
	}
	
	public function setPeso($value){
		
		$this->peso = $value;
		
	}
	public function getLargura_centimetro(){
		
		return $this ->largura_centimetro;
		
	}
	
	public function setLargura_centimetro($value){
		
		$this->largura_centimetro = $value;
		
	}
	public function getAltura_centimetro(){
		
		return $this ->altura_centimetro;
		
	}
	
	public function setAltura_centimetro($value){
		
		$this->altura_centimetro = $value;
		
	}
	public function getQuantidade_estoque(){
		
		return $this ->quantidade_estoque;
		
	}
	
	public function setQuantidade_estoque($value){
		
		$this->quantidade_estoque = $value;
		
	}
	public function getPreco_promorcional(){
		
		return $this ->preco_promorcional;
		
	}
	
	public function setPreco_promorcional($value){
		
		$this->preco_promorcional = $value;
		
	}
	public function getFoto_principal(){
		
		return $this ->foto_principal;
		
	}
	
	public function setFoto_principal($value){
		
		$this->foto_principal = $value;
		
	}
	public function getVisivel(){
		
		return $this ->visivel;
		
	}
	
	public function setVisivel($value){
		
		$this->visivel = $value;
		
	}
	
	public function getComprimento_centimetro(){
		
		return $this ->comprimento_centimetro;
		
	}
	
	public function setComprimento_centimetro($value){
		
		$this->comprimento_centimetro = $value;
		
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
	
	public function updateProd($id_prod,
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
				
				$sql ->query("UPDATE degustando_shop.tb_produtos SET nome_prod_curto=:nome_prod_curto,
																		nome_prod_longo=:nome_prod_longo,
																		codigo_interno=:codigo_interno,
																		id_cat=:id_cat,
																		preco=:preco,
																		peso=:peso,
																		largura_centimetro=:largura_centimetro,
																		altura_centimetro=:altura_centimetro,
																		quantidade_estoque=:quantidade_estoque,
																		preco_promorcional=:preco_promorcional,
																		foto_principal=:foto_principal,
																		visivel=:visivel,
																		comprimento_centimetro=:comprimento_centimetro 

																		WHERE id_prod=:id_prod",array(
																				
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