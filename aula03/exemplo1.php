<!DOCTYPE html>
<html>

<body>

    <?php
$txt = "Olá mundo!";
$x = 5;
$y = 10.5;
$salario = 3500;

echo $txt . "</br>"; 
// A quebra linha feita "</br>" é elemento do HTLM.
echo $x . "\n";
// A quebra linha feita "\n" faz parte do corpo do PHP.
echo "</br>" . $y . "</br>";
// concatenar (.) é o mesmo que somar os juntar texto.
echo "R$" . $salario;

?>

</body>
</html>