<?php 

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value);

		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){

		$tt = $this->conn->prepare($rawQuery);

		$this->setParams($tt, $params);

		$tt->execute();

		return $tt;

	}

	public function select($rawQuery, $params = array()):array
	{

		$teste = $this->query($rawQuery, $params);

		return $teste->fetchAll(PDO::FETCH_ASSOC);

	}
		public function Insertin($rawQuery, $params = array())
	{

		$this->query($rawQuery, $params);
}
public function getLastInsertId() {
    return $this->conn->lastInsertId();
    //o lastinsertid é difirente aqui, antes tinha last_insert_id, ja aqui é tudo junto mesmo dessa forma ai.
}
}
   ?>