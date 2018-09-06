<?php

require_once("vendor/autoload.php");
// aula 86
// aqui eu faço o require do autoload (OBRIGATORIO TODA VEZ QUE BAIXAR UM PROJETO pelo composer)
// o rainTpl faz a junção entre um codigo php e um html.
// a pasta cache é somente pra se caso o cliente tente carregar a msm pagina ( e ela não tenha nenhuma alteração) ele não precise fazer a junção com rainTpl dnv, ele ja puxa da pasta cache e ja era.

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );
// create the Tpl object
// ele precisa dos dois diretorios la em cima (tpl e cache) POR ISSO VC PASSAR ELES em um array para a função que vai cria-los 
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Obi Wan Kenoby" );
// aqui eu estou "vinculando" uma variavel com um valor, ou seja, a variavel "name" = $name armazena o valor "Obi wan ke..." AGORA eu posso utiliza-la dessa forma no html sem problemas. é pra isso que ser o rainTPL, é uma ferramente pra vc vincular o php ao html dboa.
// assign an array
$tpl->assign( "teste2", PHP_VERSION );
//msm coisa aqui
// draw the template
$html = $tpl->draw( "index", true);
// o metodo draw além de gerar o junção do arquivo e armazena-lo no cache, ele tbm fica armazenado no retorno que vai pra $tpl, ai eu pego a variavel $html que criei e coloco o retorno nela. OBS IMPORTANTE: pra ele passar pra a variavel vc tem que colocar um "true" como segundo parametro, se não ele vai printar na tela o html apenas e n vai retornar.
// aqui eu passo pro metodo draw eu tenho que mandar o NOME DO ARQUIVO HTML,( por padrão ele ja vai buscar um html, ou seja, n precisa colocara a extensão), ele sempre é o ultimo metodo chamado pq tem q estar tudo pronto antes dele.

// pra vc usar a variavel que foi vinculada aqui no html basta edita-lo e colocar {$nome da viravel} "exatamente como vc faz normalmente só que com chaves" no codigo html e ele vai puxar o valor delas.

//Create a new PHPMailer instance
require_once("vendor/phpmailer/phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "nunesnery37@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "33222233";

//Set who the message is to be sent from
$mail->setFrom('nunesnery37@gmail.com', 'Nery');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('Viniciusneryb13@hotmail.com', 'Teste');

//Set the subject line
$mail->Subject = 'Teste disparo de e-mail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);
// AQUI EU PASSO A VARIAVEL COM ONOME DO MEU ARQUIVO HTML

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Mensagem Enviada!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}


?>


?>