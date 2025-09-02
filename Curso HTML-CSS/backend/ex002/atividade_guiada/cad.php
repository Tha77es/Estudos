<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Guiada</title>
</head>
<body>
    <header>
        <h1>Resultado do Registro</h1>
    </header>

    <main>
        <?php 
        $name = $_GET["name"] ?? "Burro tu esqueceu seu nome" ;

        $lastname = $_GET["lastname"] ?? "E seu sobrenome inteligência?" ;

        echo "<p> É um prazer te conhecer $name $lastname! Este é meu site!" ;
        ?>
<p><a href="javascript:history.go(-1)"></a></p>
    </main>
</body>
</html>