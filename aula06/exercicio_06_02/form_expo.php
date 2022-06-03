<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPONENCIAL</title>
</head>
<body>
    <form action="exponencial.php" method="post">
        Valor1: <input name= "valor1" type="text"><br><br>
        Valor2: <input name= "valor2" type="text"><br><br>
                <button type="submit">elevar</button><br><br>
                <button type="reset">limpar</button>
        Resultado: <input name= "resultado" type="text" value="<?php if(isset($_GET["result"])) echo $_GET["result"] ?>">
    </form>
    
</body>
</html>