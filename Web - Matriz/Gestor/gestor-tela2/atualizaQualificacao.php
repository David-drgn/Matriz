<?php

session_start();

$IDequipe = $_GET['id'];

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
	echo "Erro ao conectar ao banco de dados.";
}

$seleciona = "SELECT descricao from qualificacaoEqp WHERE IDqualificacaoEqp = '" . $IDequipe . "'";
$verifica = mysqli_query($conexao, $seleciona);

while ($row = mysqli_fetch_array($verifica)) {
	$descricao = $row['descricao'];
}

$soma = "SELECT SUM(nivelAtual) from qualificacaoFunc WHERE IDgestor = '" . $_SESSION['IDcadastro'] . "' and descricao = '" . $descricao . "'";
$verifica = mysqli_query($conexao, $soma);
$Soma = mysqli_fetch_row($verifica);

if (!$verifica) {
}

$somaTotal = "SELECT COUNT(nivelRecomendado) from qualificacaoFunc WHERE IDgestor = '" . $_SESSION['IDcadastro'] . "' and descricao = '" . $descricao . "'";
$verifica = mysqli_query($conexao, $somaTotal);
$Somatotal = mysqli_fetch_row($verifica);

if (!$verifica) {
	echo "<script>alert('Erro ao atualizar');
	window.location.href = 'semaforoCompetencias.php';</script>";
}

if ($Soma[0] == 0) {
	echo "<script>alert('Erro ao atualizar');
	window.location.href = 'semaforoCompetencias.php';</script>";
}

if ($Somatotal[0] == 0) {
	echo "<script>alert('Erro ao atualizar');
	window.location.href = 'semaforoCompetencias.php';</script>";
}

$resultado = round($Soma[0] / $Somatotal[0]);

if ($resultado == 5) {
	$atualiza = "
		UPDATE qualificacaoeqp
		SET semaforo = 'Verde'
		WHERE IDqualificacaoEqp = '" . $IDequipe .  "';";
	$sql = mysqli_query($conexao, $atualiza);
	if (!$atualiza) {
		echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforoCompetencias.php';</script>";
	}
	echo "<script>window.location.href = 'semaforoCompetencias.php';</script>";
} else if ($resultado == 4) {
	$atualiza = "
		UPDATE qualificacaoeqp
		SET semaforo = 'VerdeAmarelo'
		WHERE IDqualificacaoEqp = '" . $IDequipe .  "';";
	$sql = mysqli_query($conexao, $atualiza);
	if (!$atualiza) {
		echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforoCompetencias.php';</script></script>";
	}
	echo "<script>window.location.href = 'semaforoCompetencias.php';</script>";
} else if ($resultado == 3) {
	$atualiza = "
		UPDATE qualificacaoeqp
		SET semaforo = 'Laranja'
		WHERE IDqualificacaoEqp = '" . $IDequipe .  "';";
	$sql = mysqli_query($conexao, $atualiza);
	if (!$atualiza) {
		echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforoCompetencias.php';</script></script>";
	}
	echo "<script>window.location.href = 'semaforoCompetencias.php';</script>";
} else if ($resultado == 2) {
	$atualiza = "
		UPDATE qualificacaoeqp
		SET semaforo = 'VermelhoLaranja'
		WHERE IDqualificacaoEqp = '" . $IDequipe .  "';";
	$sql = mysqli_query($conexao, $atualiza);
	if (!$atualiza) {
		echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforoCompetencias.php';</script></script>";
	}
	echo "<script>window.location.href = 'semaforoCompetencias.php';</script>";
} else if ($resultado == 1) {
	$atualiza = "
		UPDATE qualificacaoeqp
		SET semaforo = 'Vermelho'
		WHERE IDqualificacaoEqp = '" . $IDequipe .  "';";
	$sql = mysqli_query($conexao, $atualiza);
	if (!$atualiza) {
		echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforoCompetencias.php';</script></script>";
	}
	echo "<script>window.location.href = 'semaforoCompetencias.php';</script>";
}