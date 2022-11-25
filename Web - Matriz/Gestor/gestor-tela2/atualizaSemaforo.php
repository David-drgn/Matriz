<?php

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
	echo "Erro ao conectar ao banco de dados.";
}

$pessoas1 = 0;
$pessoas2 = 0;
$pessoas3 = 0;
$pessoas4 = 0;

$select = "SELECT * from equipe";
$teste = mysqli_query($conexao, $select);
while ($dadosQualificacao = mysqli_fetch_array($teste)) {
	$pessoas1 = 0;
	$pessoas2 = 0;
	$pessoas3 = 0;
	$pessoas4 = 0;
	$funcionarios = "SELECT * from integrantes WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] . "'";
	$recebendo = mysqli_query($conexao, $funcionarios);
	while ($dadosFuncionario = mysqli_fetch_array($recebendo)) {
		switch ($dadosFuncionario['semaforo']) {
			case 'Vermelho':
				$pessoas1 = $pessoas1 + 1;
				break;
			case 'Laranja':
				$pessoas2 = $pessoas2 + 1;
				break;
			case 'Amarelo':
				$pessoas3 = $pessoas3 + 1;
				break;
			case 'Verde':
				$pessoas4 = $pessoas4 + 1;
				break;
		}
	}
	if ($pessoas1 == 0 and $pessoas2 == 1 and $pessoas3 >= 1 || $pessoas4 >= 0) {
		$atualiza = "
		UPDATE equipe
		SET semaforo = 'Verde'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  "';";
		$sql = mysqli_query($conexao, $atualiza);
		if (!$atualiza) {
			echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
		}
	} else if ($pessoas2 == 2) {
		$atualiza = "
		UPDATE equipe
		SET semaforo = 'Amarelo'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  "';";
		$sql = mysqli_query($conexao, $atualiza);
		if (!$atualiza) {
			echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
		}
	} else if ($pessoas2 > 0 || $pessoas3 > 0 || $pessoas4 > 0) {
		$atualiza = "
		UPDATE equipe
		SET semaforo = 'Laranja'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  "';";
		$sql = mysqli_query($conexao, $atualiza);
		if (!$atualiza) {
			echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
		}
	} else if ($pessoas2 == 0 || $pessoas3 == 0 || $pessoas4 == 0) {
		$atualiza = "
		UPDATE equipe
		SET semaforo = 'Vermelho'
		WHERE IDequipe = '" . $dadosQualificacao['IDequipe'] .  "';";
		$sql = mysqli_query($conexao, $atualiza);
		if (!$atualiza) {
			echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";
		}
	}
}