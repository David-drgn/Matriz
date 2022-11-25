<?php

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro.";
}

$select = "SELECT * from integrantes WHERE IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
$teste = mysqli_query($conexao, $select);
while ($dadosQualificacao = mysqli_fetch_array($teste)) {
    $IDcadastro = $dadosQualificacao['IDcadastro'];
}

$soma = "SELECT SUM(nivelAtual) from qualificacaoFunc WHERE IDequipe = '" . $IDequipe . "' and IDcadastro = '" . $IDcadastro . "'";
$verifica = mysqli_query($conexao, $soma);
$Soma = mysqli_fetch_row($verifica);

if (!$verifica) {
    echo "<script>alert('Erro ao atualizar');</script>";
}

$somaTotal = "SELECT COUNT(nivelRecomendado) from qualificacaoFunc WHERE IDequipe = '" . $IDequipe . "' and IDcadastro = '" . $IDcadastro . "'";
$verifica = mysqli_query($conexao, $somaTotal);
$Somatotal = mysqli_fetch_row($verifica);

if (!$verifica) {
    echo "<script>alert('Erro ao atualizar');</script>";
}

if ($Soma[0] == 0) {
    echo "<script>alert('Erro ao atualizar');</script>";
}

if ($Somatotal[0] == 0) {
    echo "<script>alert('Erro ao atualizar');</script>";
}

$resultado = round($Soma[0] / $Somatotal[0]);

if ($resultado == 5) {
    $atualiza = "UPDATE `integrantes` SET `semaforo` = \'Verde\' WHERE `integrantes`.`IDintegrantes` = " . $IDcadastro . ";";
    $sql = mysqli_query($conexao, $atualiza);
    if (!$atualiza) {
        echo "<script>alert('Erro ao atualizar');";
    }
}

if ($resultado == 4) {
    $atualiza = "UPDATE `integrantes` SET `semaforo` = \'Amarelo\' WHERE `integrantes`.`IDintegrantes` = " . $IDcadastro . ";";
    $sql = mysqli_query($conexao, $atualiza);
    if (!$atualiza) {
        echo "<script>alert('Erro ao atualizar');</script>";
    }
}

if ($resultado == 3 || $resultado == 2) {
    $atualiza = "UPDATE `integrantes` SET `semaforo` = \'Laranja\' WHERE `integrantes`.`IDintegrantes` = " . $IDcadastro . ";";
    $sql = mysqli_query($conexao, $atualiza);
    if (!$atualiza) {
        echo "<script>alert('Erro ao atualizar')</script>";
    }
}

if ($resultado == 1) {
    $atualiza = "UPDATE `integrantes` SET `semaforo` = \'Vermelho\' WHERE `integrantes`.`IDintegrantes` = " . $IDcadastro . ";";
    $sql = mysqli_query($conexao, $atualiza);
    if (!$atualiza) {
        echo "<script>alert('Erro ao atualizar')</script>";
    }
}