<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$msg = addslashes($_POST['msg']);

$para = "luisfilipe1510@gmail.com"
$assunto = "Formulario - Site de Propaganda Pessoal"

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Mensagem: ".$msg;

$cabeca = "From: luisfilipe1510@gmail.com"."\n"."Reply-to: " .$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
} else{
    echo("Houve um erro ao enviar o e-mail.");
}
?>