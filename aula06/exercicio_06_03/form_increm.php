<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="incremento.php" method="post">
        Contador: <input name="valor1" type="text" value="<?php if(isset($_GET["result"])) echo $_GET["result"] ?>">
<!--  O ciclo do POST, inicia na ação do botão SUBMIT, que puxa do INPUT, que contem valores no campo NAME e o NAME define os indices (indices são valores no var_dump).--> 
        <br>
        <br>
        <button type="submit">incrementar</button>
        <br>
        <br>

    </form>
</body>
</html>