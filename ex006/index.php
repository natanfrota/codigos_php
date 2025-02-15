<?php 
    $con = new mysqli('localhost', 'root', '', 'sakila');

    $result = $con->query("SELECT * FROM customer LIMIT 20");

    $resultados = array();
    while ($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }

    $con->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        table {
            margin: 40px auto;
            border: 1px solid black;
            border-collapse: collapse;
            border-collapse: collapse;
        }

        thead {
            background-color: lightgray;
        }
        
        th, td {
            border: 1px solid black;
            padding: 4px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Primeiro nome</th>
                <th>Último nome</th>
                <th>Email</th>
                <th>Data de criação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($resultados as $resultado){?>
                <tr>
                    <td><?= ucfirst(strtolower($resultado['first_name'])) ?></td>
                    <td><?= ucfirst(strtolower($resultado['last_name'])) ?></td>
                    <td><?= $resultado['email'] ?></td>
                    <td><?= date_format(date_create($resultado['create_date']), 'd-m-Y H:i') ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="script.js"></script>
</body>
</html>