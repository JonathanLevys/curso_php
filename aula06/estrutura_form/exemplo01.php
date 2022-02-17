<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            border: solid 1px #ccc;
        }
    </style>
</head>
<body>
    <form action="nome.php" method="POST">
        Nome:<input name="nome" type="text">
        <br>
        <br>
        <button type="submit">Mensagem</button>
        <br>
        <br>
        Resultado: <input type="text" value="<?php if(isset($_GET["result"])) echo $_GET["result"] ?>">
    </form>
</body>
</html>