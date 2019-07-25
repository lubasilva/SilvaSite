<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "lubapisilva@gmail.com";
$subject = "Serviço Silva's";
$body = "Nome: ".$nome. "\n". "Email: ".$email. "\n". "Mensagem".$mensagem;

$header = "From: lukka.silva@gmail.com". "\r\n". "Reply-to: ".$emai. "\e\n". "X=Mailer:PHP/".phpversion();

if (mail($to, $subject, $body, $header)) {

    echo("Email enviado com sucesso");
}else {
    echo("Email nao pode ser enviado");
}

}


?>