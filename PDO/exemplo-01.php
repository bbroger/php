<?php

$tt = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

//usando PDO pra acessar o banco vc tem que iniciar o objeto dele pra conectar dessa forma ai... "tipodobanco:dbname:dbphp7;host=ipdobanco","usuario","senha";

$dd = $tt->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$dd->execute();

$resultado = $dd->fetchall(PDO::FETCH_ASSOC);
// com PDO vc não precisa colocar isso num while... pra passar pra cada um e ir printando, aqui vc pode usar o metodo fecthall() que vai "fatiar" tudo pra v c bonitinho e jogar em um array, por sequencia ele vai jogar esse array pra variavel $resultado. obs: vai vir com indices, caso vc queira colocar sem os indices é só passar por parametro aquele outro metodo, só q de forma estatica "PDO::fetch_assoc", dessa forma "$dd->fetchall(PDO::fetch_assoc);" preste atenção q fetchall n tem "_"
 //var_dump($resultado);

foreach ($resultado as $linha) {
	foreach ($linha as $coluna => $value) {
		
// aqui nós temos um foreach dentro de outro, é tipo um for normal, ele vai entrar na tabela linha por linha, e dentro da linha ele vai pegar o nome da coluna ($key) e no lugar de ($value) vai pegar o valor daquele coluna naquela linha, vc ja fez isso com o for, é só lembrar, e dps q ele sair do laço interno ele printa o separador "=====" e dps vai até a proxima linha devido ao laço mais externo.

		echo "<b>". $coluna .":<b>". $value. "<br>";

	}
	echo "========================================<br>";
}

?>