<?php
if(isset($_POST['submit'])){
    // Recolher dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    
    // Construir mensagem de email
    $to = "devlukkas@gmail.com";
    $subject = "Nova mensagem do formulário de contato";
    $message = "Nome: $nome\n";
    $message .= "Email: $email\n";
    $message .= "Telefone: $telefone\n";
    $message .= "Mensagem:\n$mensagem";
    
    // Enviar email
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)){
        echo "Email enviado com sucesso!";
    } else{
        echo "Erro ao enviar o email.";
    }
}
?>
