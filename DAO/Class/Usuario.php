<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $desenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;

	}
	public function setIdusuario($var){
		$this->idusuario = $var;
	}
	public function getDeslogin(){
		return $this->deslogin;

	}
	public function setDeslogin($var){
		$this->deslogin = $var;
	}
	public function getDesenha(){
		return $this->desenha;

	}
	public function setDesenha($var){
		$this->desenha = $var;
	}
	public function getDtcadastro(){
		return $this->dtcadastro;

	}
	public function setDtcadastro($var){
		$this->dtcadastro = $var;
	}

	public function loadById($id){

		$obj = new sql();

		$resultado = $obj->select("SELECT * FROM tb_usuarios WHERE :ID", array(
			":ID"=>$id
			));

		if (count($resultado)>0){
			//se for > 0 significa que tem algo no array, ou seja, deu certo e ele pegou algo.
			$row = $resultado[0];
			// depois ele joga a linha no array na posição que ele retornou pra uma variavel
		$this->setIdusuario($row['idusuario']);
		$this->setDeslogin($row['deslogin']);
		$this->setDesenha($row['desenha']);
		$this->setDtcadastro(New Datetime($row['dtcadastro']));

		// pq a chave ta com o nomr certinho e tal? pq quando ele me retorna um array, a minha chave vem com o nome da coluna, por isso ta dessa forma ai.
		
			// aqui ele usar o set de cada um... e passar o valor do array que está na chave tal, dessa forma -> $array['Chave']
		}

	}

	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"desenha"=>$this->getDesenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			// como o retorno do getDtcadastro é um datetime eu posso usar o metodo format nele pra deixar da forma que eu quiser.
			));
	}

	public static function getList(){

		$kilua = new Sql();

		$jj = $kilua->select("SELECT * FROM tb_usuarios");

		return $jj;
	}

	public static function search($login){
     $sql = new Sql();
     $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
         ':SEARCH'=>"%".$login."%"
     ));
     foreach ($results as &$row) {
         $row['deslogin'] = utf8_encode($row['deslogin']);
         // sem esse foreach tava dando erro pq n ta na encodação utf-8, é só passar ele dessa forma que funciona, antes tava certo, só dava erro por causa disso ai.
     }
     return $results;
 }

 	public function validacao($login, $password){

 		$obj = new sql();

		$resultado = $obj->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND desenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD" =>$password
			));

		if (count($resultado)>0){
			//se for > 0 significa que tem algo no array, ou seja, deu certo e ele pegou algo.
			$row = $resultado[0];
			// depois ele joga a linha no array na posição que ele retornou pra uma variavel
		$this->setIdusuario($row['idusuario']);
		$this->setDeslogin($row['deslogin']);
		$this->setDesenha($row['desenha']);
		$this->setDtcadastro(New Datetime($row['dtcadastro']));
	}

		else {
			throw new Exception("Dados Invalidos");
			
		}


 	}

}

?>