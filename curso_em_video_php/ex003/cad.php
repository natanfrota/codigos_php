<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"];
            $sobrenome = $_REQUEST["sobrenome"];
            echo "<p>Olá, $nome $sobrenome</p>";
            
            //$potencia = 5 ** 4;
            //echo "<p> $potencia </p>";
        ?>
    </main>
</body>
</html>