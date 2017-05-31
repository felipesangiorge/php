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
	
	
	/**
     * @return the $id_prod
     */
    public function getId_prod()
    {
        return $this->id_prod;
    }

    /**
     * @return the $nome_prod_curto
     */
    public function getNome_prod_curto()
    {
        return $this->nome_prod_curto;
    }

    /**
     * @return the $nome_prod_longo
     */
    public function getNome_prod_longo()
    {
        return $this->nome_prod_longo;
    }

    /**
     * @return the $codigo_interno
     */
    public function getCodigo_interno()
    {
        return $this->codigo_interno;
    }

    /**
     * @return the $id_cat
     */
    public function getId_cat()
    {
        return $this->id_cat;
    }

    /**
     * @return the $preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @return the $peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @return the $largura_centimetro
     */
    public function getLargura_centimetro()
    {
        return $this->largura_centimetro;
    }

    /**
     * @return the $altura_centimetro
     */
    public function getAltura_centimetro()
    {
        return $this->altura_centimetro;
    }

    /**
     * @return the $quantidade_estoque
     */
    public function getQuantidade_estoque()
    {
        return $this->quantidade_estoque;
    }

    /**
     * @return the $preco_promorcional
     */
    public function getPreco_promorcional()
    {
        return $this->preco_promorcional;
    }

    /**
     * @return the $foto_principal
     */
    public function getFoto_principal()
    {
        return $this->foto_principal;
    }

    /**
     * @return the $visivel
     */
    public function getVisivel()
    {
        return $this->visivel;
    }

    /**
     * @return the $comprimento_centimetro
     */
    public function getComprimento_centimetro()
    {
        return $this->comprimento_centimetro;
    }

    /**
     * @param field_type $id_prod
     */
    public function setId_prod($id_prod)
    {
        $this->id_prod = $id_prod;
    }

    /**
     * @param field_type $nome_prod_curto
     */
    public function setNome_prod_curto($nome_prod_curto)
    {
        $this->nome_prod_curto = $nome_prod_curto;
    }

    /**
     * @param field_type $nome_prod_longo
     */
    public function setNome_prod_longo($nome_prod_longo)
    {
        $this->nome_prod_longo = $nome_prod_longo;
    }

    /**
     * @param field_type $codigo_interno
     */
    public function setCodigo_interno($codigo_interno)
    {
        $this->codigo_interno = $codigo_interno;
    }

    /**
     * @param field_type $id_cat
     */
    public function setId_cat($id_cat)
    {
        $this->id_cat = $id_cat;
    }

    /**
     * @param field_type $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @param field_type $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @param field_type $largura_centimetro
     */
    public function setLargura_centimetro($largura_centimetro)
    {
        $this->largura_centimetro = $largura_centimetro;
    }

    /**
     * @param field_type $altura_centimetro
     */
    public function setAltura_centimetro($altura_centimetro)
    {
        $this->altura_centimetro = $altura_centimetro;
    }

    /**
     * @param field_type $quantidade_estoque
     */
    public function setQuantidade_estoque($quantidade_estoque)
    {
        $this->quantidade_estoque = $quantidade_estoque;
    }

    /**
     * @param field_type $preco_promorcional
     */
    public function setPreco_promorcional($preco_promorcional)
    {
        $this->preco_promorcional = $preco_promorcional;
    }

    /**
     * @param field_type $foto_principal
     */
    public function setFoto_principal($foto_principal)
    {
        $this->foto_principal = $foto_principal;
    }

    /**
     * @param field_type $visivel
     */
    public function setVisivel($visivel)
    {
        $this->visivel = $visivel;
    }

    /**
     * @param field_type $comprimento_centimetro
     */
    public function setComprimento_centimetro($comprimento_centimetro)
    {
        $this->comprimento_centimetro = $comprimento_centimetro;
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