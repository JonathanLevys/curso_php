<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="validar.php" method="post">
    Email: <input name="email" type="text"><br><br>
    Senha: <input name="senha" type="password"><br><br>
    <button type="submit">LOGIN</button>
        <?php
           if(isset($_GET["msg"])){
               echo $_GET["msg"];
           }
        ?>
    </form>
</body>
</html>