<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de produto</title>
</head>
<body>
    
<?php 

const nome_empresa = "InfoTech" ;
$nome_produto = "Processador i9" ;
$quantidade_estoque = 15 ;
$preco_unitario = "2750.99" ;
$em_promoção = "false" ;

echo "*** Relatório de Inventário da " . nome_empresa . " 3º ano*** <br>" ;
echo"Produto: $nome_produto <br>" ;
echo"Quantidade em estoque: $quantidade_estoque unidades <br>" ;
echo"Preço por Unidade: R$ $preco_unitario <br>" ;
echo"--- Status da Promoção --- <br>" ;
var_dump($em_promoção) 

?>



</body>
</html>