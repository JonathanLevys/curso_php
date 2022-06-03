<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
          
    if($email== "jonathanlevys@gmail.com" && $senha== "1234") {
        echo "acesso liberado";
        header("Location: PG1.php");
    }
    else {
        echo "Acesso negado";
        header("Location: login.php?msg=ACESSO NEGADO");
    }
?>