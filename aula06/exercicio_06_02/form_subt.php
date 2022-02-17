<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SUBTRAÇÃO</title>
</head>
<body>
    <form action="subtracao.php" method="post">
        Valor1: <input name= "valor1" type="text"><br><br>
        Valor2: <input name= "valor2" type="text"><br><br>
                <button type="submit">subtrair</button><br><br>
        Resultado: <input name= "resultado" type="text" value="<?php if(isset($_GET["resultado"])) echo $_GET["resultado"] ?>">
                <button type="reset">limpar</button>
    </form>

</body>
</html>