<?php 

$nome = "Marcos";

echo "ABC $nome", "<br>";

echo 'ABC $nome';

echo strtoupper($nome);

echo "<br>";

echo strtolower($nome);

echo ucwords($nome);

echo ucfirst($nome)

// strtoupper coloca tudo maiusculo, strtolower tudo minusculo.

// ucwords coloca maiusculo a primeira letra de toda palavra, ucfirst coloca tbm só q somente na primeira palavra.

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);

echo $empresa;

?>