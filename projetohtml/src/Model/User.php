<?php

require_once ('src/DB/Sql.php');

class User{
	

	
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
	
	public function getIdperson(){
		
		return $this ->idperson;
		
	}
	
	public function setIdperson($value){
		
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
	
	public function setData($data){
		
		$this->setIduser($data['iduser']);
		$this->setIdperson($data['idperson']);
		$this->setDeslogin($data['deslogin']);
		$this->setDespassword($data['despassword']);
		$this->setInadmin($data['inadmin']);
		$this->setDtregister($data['dtregister']);
		
	}
	
	public static function verifyLogin($user,$session){
	
		if (isset($user) & $session == "1"){
			
			require_once ('view/adminLTE/index.php');
			
		}else{
			
			throw new \Exception("Usuario sem permissão");
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
			
			$user->setData($results[0]);
			
			$user -> setDeslogin($login);
			$user -> setDespassword($password);
			
			 $_SESSION['usuario'] = $user -> getDeslogin();
			 $_SESSION['inadmin'] = $user -> getInadmin();
	
			
		}else{
			
			throw new Exception("Login ou senha Invalidos");
		}
		
	
	}
			
		
	}
	



?>