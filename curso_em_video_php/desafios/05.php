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
        <h1>Analisador de número real</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["num"];
            $inteiro = (int) $num;
            $decimal = number_format($num - $inteiro, 3);


            echo "<p>Analisando o número $num informado pelo usuário: </p>";
            echo "A parte inteira é $inteiro.<br>";
            echo "A parte decimal é $decimal.<br>";
        ?>
    </main>
</body>
</html>