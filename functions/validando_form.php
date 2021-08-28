<?php

include('pages/contato.php');

if(isset($_POST) && !empty($_POST)) {
    if(isset($_POST["name"]) && isset($_POST["email"])) {
        if(!empty($_POST["name"]) && !empty($_POST["email"])) {
            $name = filter_input(INPUT_POST, "name");
            if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                $email = filter_input(INPUT_POST, "email");
            else
                echo "Insira um e-mail válido!";
            echo "Dados enviados com sucesso!";
        } else {
            echo "Existe algum campo vazio, confira os campos por gentileza!";
        }    
    } else {
        echo "Preencha todos os campos obrigatórios!";
    }
} else {
    echo "Erro no envio dos dados!";
}
?>