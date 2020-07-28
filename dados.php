<?php

require_once "inicia.php";

$PDO = conecta_bd();

$stmt = $PDO->prepare("SELECT idade, convenio, salario, razao FROM pesquisa");
$stmt->execute();

$ida = ["a" => 0, "b" => 0, "c" => 0, "d" => 0];
$con = ["a" => 0, "b" => 0, "c" => 0, "d" => 0];
$sal = ["a" => 0, "b" => 0, "c" => 0, "d" => 0];
$raz = ["a" => 0, "b" => 0, "c" => 0, "d" => 0];

while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($resultado['idade'] == "a") {
        $ida['a']++;
    } else if ($resultado['idade'] == "b") {
        $ida['b']++;
    } else if ($resultado['idade'] == "c") {
        $ida['c']++;
    } else if ($resultado['idade'] == "d") {
        $ida['d']++;
    }

    if ($resultado['convenio'] == "a") {
        $con['a']++;
    } else if ($resultado['convenio'] == "b") {
        $con['b']++;
    } else if ($resultado['convenio'] == "c") {
        $con['c']++;
    } else if ($resultado['convenio'] == "d") {
        $con['d']++;
    }

    if ($resultado['salario'] == "a") {
        $sal['a']++;
    } else if ($resultado['salario'] == "b") {
        $sal['b']++;
    } else if ($resultado['salario'] == "c") {
        $sal['c']++;
    } else if ($resultado['salario'] == "d") {
        $sal['d']++;
    }

    if ($resultado['razao'] == "a") {
        $raz['a']++;
    } else if ($resultado['razao'] == "b") {
        $raz['b']++;
    } else if ($resultado['razao'] == "c") {
        $raz['c']++;
    } else if ($resultado['razao'] == "d") {
        $raz['d']++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa - Dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <div class="container">
    <div class="border">
            <ul class="nav">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Início</a>
                </li>
            </ul>
        </div>
        <h1 class="text-center">Visualização dos dados da pesquisa</h1>
        <br>
        <br>
        <h3>Faixa de Idade</h3>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Até 30 anos:</th>
                    <th>De 30 a 50 anos:</th>
                    <th>De 50 a 65 anos:</th>
                    <th>Acima de 65 anos:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $ida['a'] ?></td>
                    <td><?php echo $ida['b'] ?></td>
                    <td><?php echo $ida['c'] ?></td>
                    <td><?php echo $ida['d'] ?></td>

                </tr>
            </tbody>
        </table>
        <h3>Convenio</h3>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>INSS:</th>
                    <th>SIAPE:</th>
                    <th>Forças Armadas:</th>
                    <th>Outros:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $con['a'] ?></td>
                    <td><?php echo $con['b'] ?></td>
                    <td><?php echo $con['c'] ?></td>
                    <td><?php echo $con['d'] ?></td>
                </tr>
            </tbody>
        </table>
        <h3>Faixa Salarial</h3>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Até 2 salarios mínimos:</th>
                    <th>De 2 a 4 salarios mínimos:</th>
                    <th>De 4 a 6 salarios mínimos:</th>
                    <th>Acima de 6 salarios mínimos:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $sal['a'] ?></td>
                    <td><?php echo $sal['b'] ?></td>
                    <td><?php echo $sal['c'] ?></td>
                    <td><?php echo $sal['d'] ?></td>
                </tr>
            </tbody>
        </table>
        <h3>Por que realizou o empréstimo</h3>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Pagar contas:</th>
                    <th>Reforma da casa:</th>
                    <th>Compra de carro:</th>
                    <th>Outras:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $raz['a'] ?></td>
                    <td><?php echo $raz['b'] ?></td>
                    <td><?php echo $raz['c'] ?></td>
                    <td><?php echo $raz['d'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>