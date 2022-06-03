<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISÃO</title>
</head>
<body>
    <form action="divisao.php" method="post">
        valor1: <input name= "valor1" type="text"><br><br>
        valor2: <input name= "valor2" type="text"><br><br>
            <button type="submit">DIVIDIR</button><br><br>
        Resultado: <input name= "resultado" type="text" value="<?php if(isset($_GET["resultado"])) echo $_GET["resultado"] ?>">
            <button type="reset">LIMPAR</button>
    </form>
</body>
</html>