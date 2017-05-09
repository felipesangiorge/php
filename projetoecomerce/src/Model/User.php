<?php

require_once ('src/DB/Sql.php');

class User{
	
	const SESSION ="User";
	
	private $iduser;
	private $idperson;
	private $deslogin;
	private $despassword;
	private $inadmin;
	private $dtregister;
	
	public function getIduser(){
		
		return $this ->iduser;
		
	}
	
	public function setIduser($value){
		
		$this -> iduser = $value;
		
	}
	
	public function getIderson(){
		
		return $this ->idperson;
		
	}
	
	public function setIderson($value){
		
		$this -> idperson = $value;
		
	}
	
	public function getDeslogin(){
		
		return $this ->deslogin;
		
	}
	
	public function setDeslogin($value){
		
		$this -> deslogin = $value;
		
	}
	
	public function getDespassword(){
		
		return $this ->despassword;
		
	}
	
	public function setDespassword($value){
		
		$this -> despassword = $value;
		
	}
	
	public function getInadmin(){
		
		return $this ->inadmin;
		
	}
	
	public function setInadmin($value){
		
		$this -> inadmin = $value;
		
	}
		
	public function getDtregister(){
		
		return $this->dtregister;
	}
	
	public function setDtregister($value){
		
		$this->dtregister = $value;
	}
	
	public function getValues(){
		
		return ("
			$this->iduser,
			$this->idperson,
			$this->deslogin,
			$this->despassword,
			$this->inadmin,
			$this->dtregister,
			");
		
	}
	
	public static function verifyLogin(){
	
		if (!isset($_SESSION[User::SESSION]) 
				|| !$_SESSION[User::SESSION] 
				|| !(int)$_SESSION[User::SESSION]["iduser"]>0
				|| (bool)$_SESSION[User::SESSION]["inadmin"] !== $inadmin){
			
			require_once ('view/adminLTE/index.php');
		}
		
	}
	
	public static function login($login, $password){
		
		$sql = new Sql();
		
		$results = $sql -> select("SELECT * FROM tb_users WHERE deslogin = :LOGIN AND despassword = :PASSWORD",array(
				
				":LOGIN"=>$login,
				":PASSWORD"=>$password
		));
		
		if (count($results) > 0){
			
			
			$user = new User();
			
			$user -> setDeslogin($login);
			$user -> setDespassword($password);
			
			$_SESSION[User::SESSION] = $user -> getIduser();
			
			
			header("/admin");
			
		}else{
			
			throw new Exception("Login ou senha Invalidos");
		}
		
	}
			
		
	}
	



?>