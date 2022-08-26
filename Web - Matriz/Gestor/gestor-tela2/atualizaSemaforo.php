<?php

session_start();

$IDequipe = $_GET['id'];

$conexao = mysqli_connect ("localhost","root","","matriz");

	if ($conexao == false){
		echo "Erro ao conectar ao banco de dados.";
	}

$soma = "SELECT SUM(nivelAtual) from qualificacaoFunc WHERE IDequipe = '" . $IDequipe . "'";
$verifica = mysqli_query($conexao,$soma);
$Soma = mysqli_fetch_row($verifica);

if (!$verifica){

}

$somaTotal = "SELECT COUNT(nivelRecomendado) from qualificacaoFunc WHERE IDequipe = '" . $IDequipe . "'";
$verifica = mysqli_query($conexao,$somaTotal);
$Somatotal = mysqli_fetch_row($verifica);

if (!$verifica){
	echo "<script>alert('Erro ao atualizar');
	window.location.href = 'semaforo.php';</script>";
}

if ($Soma[0] == 0){
	echo "<script>alert('Erro ao atualizar');
	window.location.href = 'semaforo.php';</script>";
}

if ($Somatotal[0] == 0){
	
}

$resultado = round($Soma[0] / $Somatotal[0]);

if ($resultado == 5){
	$atualiza = "
		UPDATE equipe
		SET semaforo = 'Verde'
		WHERE IDequipe = '" . $IDequipe . ";'
	";
	$sql = mysqli_query($conexao,$atualiza);
	if (!$atualiza){echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script>";}
		echo "<script>window.location.href = 'semaforo.php';</script>";
}

else if ($resultado == 4){
	$atualiza = "
		UPDATE equipe
		SET semaforo = 'VerdeAmarelo'
		WHERE IDequipe = '" . $IDequipe . ";'
	";
	$sql = mysqli_query($conexao,$atualiza);
	if (!$atualiza){echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script></script>";}
		echo "<script>window.location.href = 'semaforo.php';</script>";
}

else if ($resultado == 3){
	$atualiza = "
		UPDATE equipe
		SET semaforo = 'Laranja'
		WHERE IDequipe = '" . $IDequipe . ";'
	";
	$sql = mysqli_query($conexao,$atualiza);
	if (!$atualiza){echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script></script>";}
		echo "<script>window.location.href = 'semaforo.php';</script>";
}

else if ($resultado == 2){
	$atualiza = "
		UPDATE equipe
		SET semaforo = 'VermelhoLaranja'
		WHERE IDequipe = '" . $IDequipe . ";'
	";
	$sql = mysqli_query($conexao,$atualiza);
	if (!$atualiza){echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script></script>";}
		echo "<script>window.location.href = 'semaforo.php';</script>";
}

else if ($resultado == 1){
	$atualiza = "
		UPDATE equipe
		SET semaforo = 'Vermelho'
		WHERE IDequipe = '" . $IDequipe . ";'
	";
	$sql = mysqli_query($conexao,$atualiza);
	if (!$atualiza){echo "<script>alert('Erro ao atualizar');
		window.location.href = 'semaforo.php';</script></script>";}
		echo "<script>window.location.href = 'semaforo.php';</script>";
}

?>