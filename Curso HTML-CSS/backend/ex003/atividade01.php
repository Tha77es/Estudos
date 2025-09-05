<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>

<?php 

$preço_original = 150.00;
$percentual_desconto = 0.1;
$desconto = $preço_original * $percentual_desconto;
$preço_final = $preço_original - $desconto;

echo "Preço Original: R$ $preço_original <br>" .
"Desconto de 10%: R$ $desconto <br>" .
"Preço Final: R$ $preço_final";



?>

</body>
</html>