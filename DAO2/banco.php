<?php

class banco extends PDO {

	private $conn;

	public function __construct(){

	$this->conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

	}

	public function SetParams($teste, $params = array()){

		foreach ($params as $key => $value) {
		
		$this->SetParam($key, $value);

	}
}

	public function SetParam($teste, $key, $value){

		
		$teste->bindParam($teste, $key, $value);

	}

	public function query ($rawQuery, $params = array()){

	$st = $this->conn->prepare($rawQuery);

    $this->SetParams($st, $params);

	$st->execute();

	return $st;

	}

	public function select ($rawQuery, $params = array()){

		$tt = $this->query($rawQuery, $params = array());

		return $tt->fetchall(PDO::FETCH_ASSOC);

		return $tt;
	}

}



?>