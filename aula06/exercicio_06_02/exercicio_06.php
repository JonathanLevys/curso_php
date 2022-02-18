<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = "4";
        $y = "6";

        echo " X = " . $x . "<br>";
        echo " Y = " . $y . "<br>";
        echo $x. " + " .$y. " = " .($x+$y). "<br>";
        echo $x. " - " .$y. " = " .($x-$y). "<br>";
        echo $x. " x " .$y. " = " .($x*$y). "<br>";
        echo $x. " / " .$y. " = " .($x/$y). "<br>";
        echo $x. " / " .$y. " = " .($y/$x). "<br>";
        echo $x. " resto " .$y. " = " .($y%$x). "<br>";
        echo $x. " resto " .$y. " = " .($x%$y). "<br>";
        echo $x. " elevado " .$y. " = " .($x**$y). "<br>";

    ?>
</body>
</html>