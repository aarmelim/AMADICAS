<?php require_once("..\conexao\conexao.php")?>

<?php

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        
        $inserir  = "INSERT INTO email_subscription ";
        $inserir  .= "(email) ";
        $inserir  .= "VALUES ";
        $inserir  .= "('$email')";

        $retorno = array();
        $operacao_insercao = mysqli_query ($conecta, $inserir);

        if($operacao_insercao){
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = "Email cadastrado com sucesso. Em breve entrarei em contato.";
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Houve um erro. Tente mais tarde !!";
        }

        echo json_encode($retorno);
    }

?>