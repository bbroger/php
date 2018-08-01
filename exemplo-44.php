<?php

function test($callback) {
 
	//processo lento

 callback();
 
}

test(function(){
 echo "terminou!";
});

//ele joga a função por parametro pra variavel $callback, como mostra no exemplo-43.
// http://desenvolvimentoparaweb.com/php/funcoes-anonimas-closures-php/

?>