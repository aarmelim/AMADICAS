<?php
    function enviarEmail($dados) {
        // Dados do formulario
        $email_usuario      = $dados['email'];
        
        // Criar variaveis de envio
        $destino            = "aarmelim@gmail.com";
        $remetente          = "aarmelim@hotmail.com";
        $assunto            = "Mensagem do site";
        
        // Montar o corpo da mensagem
        $mensagem           .= "email do usuario: " . $email_usuario . "</BR>";
                
        return mail($destino, $assunto, $mensagem, $remetente);
    }

?>