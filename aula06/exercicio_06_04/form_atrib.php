<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATRIBUIÇÕES</title>
</head>
<body>
    <form action="atrib.php" method="post">
    Contador: <input name="valor1" type="text" value="<?php if(isset($_GET["result"])) echo $_GET["result"] ?>">
        <br>
        <br>
        <button type="submit">incrementar</button>
        <br>
        <br>
            
    </form>
</body>
</html>