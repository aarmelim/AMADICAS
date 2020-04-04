<?php
    $to = 'aarmelim@gmail.com';
    $nome = $_POST["nome"];
    $email= $_POST["email"];
    $mensagem= $_POST["mensagem"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $mensagem ='<table style="width:100%">
        <tr>
            <td>'.$nome.' </td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Mensagem: '.$mensagem.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $mensagem, $headers))
    {
        echo 'Muito obrigado por sua mensagem. Asism que possível entramos em contato.';
    }else{
        echo 'Falha no envio do email';
    }

?>
