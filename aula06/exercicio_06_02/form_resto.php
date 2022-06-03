<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTO</title>
</head>
<body>
    <form action="resto.php" method="post">
        Valor:<input name="valor1" type="text">
        <br>
        <br>
        Valor:<input name="valor2" type="text">
        <br>
        <br>
        <button type="submit">resto</button>
        <br>
        <br>
        Resultado: <input type="result" value="<?php if(isset($_GET['result'])) echo $_GET['result'] ?>">
    </form>
</body>
</html>