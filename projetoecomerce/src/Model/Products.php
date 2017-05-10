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
	
	
	public function insert(		$idproduct,
								$desproduct,
								$vlprice,
								$vlwidth,
								$vlheight,
								$vllength,
								$vlweigth,
								$desurl){
		
									
			$sql = new Sql();
			
			$sql ->query("INSERT INTO tb_products (idproduct,desproduct,vlprice,vlwidth,vlheight,vllength,vlweight,desurl)
								VALUES (:idproduct,:desproduct,:vlprice,:vlwidth,:vlheight,:vllength,:vlweight,:desurl)",array(
										
										"idproduct"=>$idproduct,
										":desproduct"=>$desproduct,
										":vlprice"=>$vlprice,
										":vlwidth"=>$vlwidth,
										":vlheight"=>$vlheight,
										":vllength"=>$vllength,
										":vlweight"=>$vlweigth,
										":desurl"=>$desurl
										
								));
			
		
	}
	
	
}

?>