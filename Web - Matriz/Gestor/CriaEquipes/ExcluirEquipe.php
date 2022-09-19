<?php

session_start();

$IDequipe = $_SESSION['IDequipe'];
$IDgestor = $_SESSION['IDcadastro'];

$conexao = mysqli_connect ("localhost","root","","matriz");

	if ($conexao == false){
		echo "Erro ao conectar ao banco de dados.";
	}

$deletando = "DELETE FROM qualificacaoEqp WHERE IDequipe = '" . $IDequipe . "'";
$verifica = mysqli_query($conexao,$deletando);
if (!$verifica){
    Echo "<script> window.alert('Não foi possível deletar qualificações da equipe');
    window.location.href = '../Gestor.php';
                </script>";
}

$deletando = "DELETE FROM qualificacaoFunc WHERE IDequipe = '" . $IDequipe . "'";
$verifica = mysqli_query($conexao,$deletando);
if (!$verifica){
    Echo "<script> window.alert('Não foi possível deletar qualificações dos funcionários da equipe');
    window.location.href = '../Gestor.php';
                </script>";
}

$deletando = "DELETE FROM integrantes WHERE IDequipe = '" . $IDequipe . "'";
$verifica = mysqli_query($conexao,$deletando);
if (!$verifica){
    Echo "<script> window.alert('Não foi possível deletar integrantes equipe');
    window.location.href = '../Gestor.php';
                </script>";
}

$deletando = "DELETE FROM equipe WHERE IDequipe = '" . $IDequipe . "'";
$verifica = mysqli_query($conexao,$deletando);
if (!$verifica){
    Echo "<script> window.alert('Não foi possível deletar equipe, IDequipe: " . $IDequipe . "');
    window.location.href = '../Gestor.php';
                </script>";
}

Echo "<script> window.alert('Todos os dados foram excluídos com sucesso');
    window.location.href = '../Gestor.php';
                </script>";

?>