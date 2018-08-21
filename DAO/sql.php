<?php

class sql extends PDO{

	private $conn;

	public function __construct(){

		$this->conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

	}

	public function query($rawQuery, $params = array()){

 		$teste = $this->conn->prepare($rawQuery);
 		$this->setParams($teste, $params);

 		$teste->execute();

 		return $teste;
	}

	public function select($rawQuery, $params = array()):array{

		$tt = $this->query($rawQuery, $params);

		return $tt->fetchall(PDO::FETCH_ASSOC);

	private function SetParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {
 			
 			$this->SetParam($statment, $key, $value);

	}
	}

		private function SetParam($statment, $key, $value){
 			
 			$statment->bindParam($key, $value);

	}

	}


}

?>
