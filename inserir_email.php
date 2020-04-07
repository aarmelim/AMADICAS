<?php require_once("conexao\conexao.php")?>

<?php

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        
        $inserir  = "INSERT INTO email_subscription ";
        $inserir  .= "(email) ";
        $inserir  .= "VALUES ";
        $inserir  .= "('$email')";

        $operacao_insercao = mysqli_query ($conecta, $inserir);

        if($operacao_insercao){
            echo ("Inclusão OK !!");
        } else {
            echo ("Inclusão falhou !!");
        }
    }

?>