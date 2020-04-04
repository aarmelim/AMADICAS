<?php
    // Passo 1 - Abrir conexão desenvolvimento
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "amadicas";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    // Passo 1 - Abrir conexão produção
    // $servidor_prod = "https://www.amadicas.com.br";
    // $usuario_prod = "amadicas";
    // $senha_prod = "amadicas";
    // $banco_prod = "amadicas";
    // $conecta_prod = mysqli_connect($servidor_prod,$usuario_prod,$senha_prod,$banco_prod);

    // Passo 2 - Testar conexão
    if (!$conecta) {
        die ("Não foi possível conectar ao banco MySQL"); 
        }
?>