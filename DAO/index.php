<form>
<input type = "text" name = "Login">
<input type = "text" name = "Senha">
<input type = "submit" value = "Confirmar">

</form>
<?php

require_once("config.php");

if (isset($_GET)){
foreach($_GET as $key => $value) {

if ($key == "Login"){

$login = $value;
}

else {
$password = $value;
}
}
}

// Criei um sisteminha de validação, "aquele projeto antigo", agr só tem que tratar a excessão, pq antes mesmo de inserir os dados ele ja ta o erro.


//perceba que na classe usuario, ele cria um objeto da classe sql, só que la nós não temos um require da classe sql e tbm não temos um require do config.php que é o autoload e pegaria a classe automaticamente, porém, quando criamos um objeto da classe usuario aqui, o autoload faz o require dele bonitinho e tal e passa a função "autoload" pra o arquivo que ele trouxe pra ca tbm, ou seja, vc n precisa colocar outro require la, pq ele meio q ja pega esse daqui e utiliza pq a função em si vai ser retornada pra ca, então ele utiliza todos os recursos disponiveis aqui.

//$kk = new Sql();

//$printar = $kk->select("SELECT * FROM tb_usuarios");

//echo json_encode($printar);

//$teste = new Usuario("Teste", "55555555");
//$teste->Insert();

$teste = new Usuario();

//$teste->delete(3);
//$teste->update("jorge", "malukete", 4);

/*$login = "mudança";
$id = "3";
$teste->update("UPDATE tb_usuarios SET deslogin = :LOGIN WHERE idusuario = :ID", array(
':LOGIN'=>$login,
':ID'=>$id
));
*/
// devolve um usuario \/
//$teste->loadByid(8);

//$teste->setDeslogin("Kias");
//$teste->setDesenha("123");
//$tt = lastID();

//echo $teste->lastID();
//echo $teste->getLastInsertId();

// com o toString la, vc pode printar o objeto direto, vai aparecer o que tiver dentro do escopo do __toString, não tente jogar o resultado pra uma variavel e printar ela, pois da erro.

//echo $teste;
// devolve uma lista de usuarios \/
//$printando = Usuario::getList();

//echo json_encode($printando);

//echo json_encode(Usuario::search("A"));

if (isset($login) && $login != '') {
    $teste->validacao($login, $password);
    echo $teste;
}

?>