<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autumn&Cia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Autumn&Cia</h1>
    </header>
     <main>
        <?php 
        $produto = $_REQUEST ?? 0;
        $quant_produto = $_REQUEST ?? 0 ;
        $valor = $_REQUEST ?? 0;
        ?>
     <h1>
            Bem-vindos ao Autumn&Cia
        </h1>
        <p>Por favor, informe-nos o valor do produto que comprastes e também o seu valor</p>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="prod">Valor do Produto</label>
            <input type="number" name="prod" id="prod" step="0.01">

            <label for="quant">Quantidade de produtos</label>
            <input type="number" name="quant" id="quant" step="1">
            <input type="submit" value="Calcular">
        </form>
    
        <section>
      <?php 
       
      ?>
      <h2>Orçamento dos Produtos</h2>
        <ul>
            <li>Produto: R$ <?=number_format($produto, 2, ",", ".")?>  </li>
            <li>Subtotal: R$ <?=number_format($Subtotal, 2, ",",".")?></li>
        </ul>

    </section>

</main>

    
</body>
</html>