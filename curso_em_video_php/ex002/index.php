<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <?php 
        $nome = "Natan";
        $sobrenome = "Frota";
        const PAIS = "Argentina";

        echo "Meu nome é $nome $sobrenome e meu pais é " . PAIS . "<br> ";
    

        var_dump($nome);

        $vet = [4.5, "Mariana", false, 102];

        var_dump($vet);

    ?>
</body>
</html>