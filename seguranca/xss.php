<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php
// o ataque xss consiste em colocar tags html em campos de entrada (formularios... campos de busca e etc), imagine que no campo de busca do site chega um cara mal intencionado e coloca algumas tags html em volta de algum nome, ou algum javascript pra ferrar o teu site. Isso pode ser facilmente barrado com a função "string_tags(texto que vem do campo, tags que vc quer permitir(se n quiser permitir nenhuma é só deixar sem nd))", obs: isso vai identificar qualquer tag, retirar todas ou deixar apenas a q vc quiser

if(isset($_POST["busca"])){

	//echo strip_tags($_POST["busca"]);
	    //o  /\ tira TODAS as tags que vierem, a n ser a q vc liberar (no comentario acima eu explico)

	echo htmlentities($_POST["busca"]);  
	// outro modo é esse, essa função faz com que as tags virem string, ou seja, ao contrario do strip_tags, ele vai MOSTRAR as tags na tela, mas como ele converte tudo em string, elas vão vir como texto.

}


?>