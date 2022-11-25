<?php

$pessoas1 = 0;
$pessoas2 = 0;
$pessoas3 = 0;
$pessoas4 = 0;

$select = "SELECT * from qualificacaofunc WHERE IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
$teste = mysqli_query($conexao, $select);
while ($dadosQualificacao = mysqli_fetch_array($teste)) {
    $pessoas1 = 0;
    $pessoas2 = 0;
    $pessoas3 = 0;
    $pessoas4 = 0;
    $funcionarios = "SELECT * from qualificacaofunc WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] . "' AND descricao = '" . $dadosQualificacao['descricao'] . "'";
    $recebendo = mysqli_query($conexao, $funcionarios);
    while ($dadosFuncionario = mysqli_fetch_array($recebendo)) {
        switch ($dadosFuncionario['nivelAtual']) {
            case 1:
                $pessoas1 = $pessoas1 + 1;
                break;
            case 2:
                $pessoas2 = $pessoas2 + 1;
                break;
            case 3:
                $pessoas3 = $pessoas3 + 1;
                break;
            case 4:
                $pessoas4 = $pessoas4 + 1;
                break;
            case 5:
                $pessoas4 = $pessoas4 + 1;
                break;
        }
    }
    if ($pessoas1 == 0 and $pessoas2 == 1 and $pessoas3 >= 1 || $pessoas4 >= 0) {
        $atualiza = "
		UPDATE integrantes
		SET semaforo = 'Verde'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  " and IDcadastro = '" . $IDfuncionario . "';";
        $sql = mysqli_query($conexao, $atualiza);
        if (!$atualiza) {
            echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
        }
    } else if ($pessoas2 == 2) {
        $atualiza = "
		UPDATE integrantes
		SET semaforo = 'Amarelo'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  " and IDcadastro = '" . $IDfuncionario . "';";
        $sql = mysqli_query($conexao, $atualiza);
        if (!$atualiza) {
            echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
        }
    } else if ($pessoas2 > 0 || $pessoas3 > 0 || $pessoas4 > 0) {
        $atualiza = "
		UPDATE integrantes
		SET semaforo = 'Laranja'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  " and IDcadastro = '" . $IDfuncionario . "';";
        $sql = mysqli_query($conexao, $atualiza);
        if (!$atualiza) {
            echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
        }
    } else if ($pessoas2 == 0 || $pessoas3 == 0 || $pessoas4 == 0) {
        $atualiza = "
		UPDATE integrantes
		SET semaforo = 'Vermelho'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  "' and IDcadastro = '" . $IDfuncionario . "';";
        $sql = mysqli_query($conexao, $atualiza);
        if (!$atualiza) {
            echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
        }
    }
}