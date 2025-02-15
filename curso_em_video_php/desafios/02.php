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
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $num = rand(0, 100);
            echo "<p>O número gerado foi $num.</p>";
        ?>
        <button type="button" onclick="document.location.reload()">Gerar outro</button>
        
    </main>
</body>
</html>