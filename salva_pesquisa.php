<?php
require_once "inicia.php";

// Coleta as informações do formulário
$idade = isset($_POST['idade']) ? $_POST['idade'] : null;
$convenio = isset($_POST['convenio']) ? $_POST['convenio'] : null;
$salario = isset($_POST['salario']) ? $_POST['salario'] : null;
$razao = isset($_POST['razao']) ? $_POST['razao'] : null;

// Verifica se todos os campos estão preenchidos
if (empty($idade) || empty($convenio) || empty($salario) || empty($razao)) {
    echo "É preciso preencher todos os campos da pesquisa!";
    exit;
}

// Insere as informações no banco de dados
$PDO = conecta_bd();
$sql = "INSERT INTO pesquisa(idade, convenio, salario, razao)
    VALUES(:idade, :convenio, :salario, :razao)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":convenio", $convenio);
    $stmt->bindParam(":salario", $salario);
    $stmt->bindParam(":razao", $razao);

    if ($stmt->execute()) {
        header("Location: index.html");
    } else {
        echo "Ocorreu um erro na inclusão do registro!";
        print_r($stmt->errorInfo());
    }