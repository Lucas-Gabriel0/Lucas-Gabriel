<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "devlukkas@gmail.com";
    $assunto = "Potencial Colaboração - Portfolio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone :".$telefone;

    $cabeca = "From: devlukkas@gmail.com". "\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("Email enviado com sucesso!");
    }else{
        echo("Não enviado!");

    }

?>