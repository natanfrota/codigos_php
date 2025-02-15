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
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
            $numero = $_REQUEST["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            
            echo "<p>O número escolhido foi $numero</p>";
            echo "<p>O seu antecessor é $antecessor</p>";
            echo "<p>O seu sucessor é $sucessor</p>";
        ?>
    </main>
</body>
</html>