<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adicao.php" method="post">
        Valor1: <input name="valor1" type="text"><br><br>
        Valor2: <input name= "valor2" type="text"><br><br>
                <button type="submit">somar</button><br><br>
                <button type="reset">limpar</button>
        Resultado: <input name= "resultado" type="text" value="<?php if(isset($_GET["resultado"])) echo $_GET["resultado"] ?>">
    </form>
    
</body>
</html>