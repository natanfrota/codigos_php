<?php 
    $con = new mysqli('localhost', 'root', '', 'publicacoes');
    if($con->connect_error){
        die("Erro");
    }

    $pagina = $_GET['p'];
    $pagina = urlencode($pagina);

    $consulta = "select * from publicacao where url = ?";
    $stmt = $con->prepare($consulta);
    $stmt->bind_param("s", $pagina);

    $stmt->execute();
    $resultado = $stmt->get_result();

    $linha = $resultado->fetch_assoc();
    $texto = explode(PHP_EOL, $linha['texto']);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $linha['titulo'] ?></title>
</head>
<body>
    <h1><?= $linha['titulo'] ?></h1>
    <?php 
    foreach($texto as $t) { ?>
        <p><?= $t ?></p>
    <?php } ?>
</body>
</html>