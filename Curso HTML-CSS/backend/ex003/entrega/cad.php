<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>--- Relatório ---</h1>
    </header>
    <main>
        <?php 
        if (isset($_POST["largura"]) && isset($_POST["altura"])) {
            $largura = floatval($_POST["largura"]);
            $altura  = floatval($_POST["altura"]);

            $area = $largura * $altura;
            $quantidade_de_tinta = $area / 2;

            echo "<p> Bem... de acordo com as seguintes informações: <br>" . 
            "A sua parede possui: $largura m de largura <br>" . 
            "A sua parede possui: $altura m de altura <br>" .
            "Sua parede ao todo, mede $area m² <br>". 
            "Serão necessários $quantidade_de_tinta litros de tinta. </p>";
        } else {
            echo "<p>Erro: por favor preencha os valores da largura e altura no formulário.</p>";
        }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>