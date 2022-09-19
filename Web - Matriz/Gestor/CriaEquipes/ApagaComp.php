<?php

session_start();

$IDequipe = $_SESSION['IDequipe'];
$IDgestor = $_SESSION['IDcadastro'];

$conexao = mysqli_connect ("localhost","root","","matriz");

	if ($conexao == false){
		echo "Erro ao conectar ao banco de dados.";
	}

$IDqualificacaoeqp = $_GET['id'];    

$deletando = "DELETE FROM qualificacaoEqp WHERE IDequipe = '" . $IDequipe . "' AND IDqualificacaoeqp = '" . $IDqualificacaoeqp . "'";
$verifica = mysqli_query($conexao,$deletando);
if (!$verifica){
    Echo "<script> window.alert('Não foi possível deletar qualificações da equipe');
    window.location.href = 'CriaEquipes.php';
                </script>";
}
else {
    Echo "<script> window.alert('Competencia da equipe foi deletada!!');
    window.location.href = 'CriaEquipes.php';
                </script>";
}

?>