<?php

    if (isset($_POST["email"])) {
        $email = $_POST("email");
        
        $inserir  = "INSERT INTO email_subscription ";
        $inserir  .= "(email, data_inclusao) ";
        $inserir  .= "VALUES ";
        $inserir  .= "($email, date)";

        
    }

?>