<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = $_POST["mensagem"];


    $destinatario = "seu-email@example.com";
    $assunto = "Contato do Site";

    
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Telefone: $telefone\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    
    $envio = mail($destinatario, $assunto, $corpo_email);

    
    if ($envio) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Por favor, tente novamente.";
    }
}
?>