<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de conversão</title>
</head>
<body>

<?php 

const valor = 5.45 ;
$valor_dolar_1 = 10.00 ;
$valor_dolar_2 = 50.00 ;
$valor_dolar_3 = 100.00 ;
$valor_real_1 = 54.50 ;
$valor_real_2 = 272.50 ;
$valor_real_3 = 545.00 ;

echo "+-------------------------------------+ <br>" ;
echo "|   TABELA DE CONVERSÃO DE MOEDAS   | <br>" ;
echo "| Cotação do Dólar: " . valor . "         | <br>" ;
echo  "+-------------------------------------+ <br>" ;
echo "| Dólar (US$)   | Real (R$)         | <br>";
echo "+---------------+---------------------+ <br>" ;
echo "| US$ $valor_dolar_1     | R$ $valor_real_1          | <br>" ; 
echo "| US$ $valor_dolar_2     | R$ $valor_dolar_2         | <br> " ;
echo "| US$ $valor_dolar_3    | R$ $valor_real_3        | <br> ";
echo "+-------------------------------------+"
?> 

</body>


</html>