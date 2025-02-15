<?php
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];

    $url = urlencode(str_replace(' ', '-', strtolower($titulo)));

    $con = new mysqli('localhost', 'root', '', 'publicacoes');

    $consulta = 'insert into publicacao(titulo, texto, url) values (?, ?, ?)';
    $stmt = $con->prepare($consulta);
    $stmt->bind_param("sss", $titulo, $texto, $url);

    $res = $stmt->execute();

    if($res){
        echo "Inserção bem-sucedida!";
    }

    $stmt->close();
    $con->close();
?>