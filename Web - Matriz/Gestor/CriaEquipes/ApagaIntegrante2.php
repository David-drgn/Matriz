<?php

session_start();

$IDequipe = $_SESSION['IDequipe'];
$IDgestor = $_SESSION['IDcadastro'];

$conexao = mysqli_connect ("localhost","root","","matriz");

	if ($conexao == false){
		echo "Erro ao conectar ao banco de dados.";
	}

$IDintegrante = $_GET['id']; 

$deletando = "DELETE FROM qualificacaofunc WHERE IDequipe = '" . $IDequipe . "' AND IDcadastro = '" . $IDintegrante . "'";
$verifica = mysqli_query($conexao,$deletando);
if (!$verifica){
    Echo "<script> window.alert('Não foi possível deletar as qualificações do funcionário');
    window.location.href = 'EditaEquipes.php';
                </script>";
}
else {
    Echo "<script> window.alert('As qualificações do funcionário foram deletadas!!');
    window.location.href = 'EditaEquipes.php';
                </script>";
}

$deletando = "DELETE FROM integrantes WHERE IDequipe = '" . $IDequipe . "' AND IDintegrantes = '" . $IDintegrante . "'";
$verifica = mysqli_query($conexao,$deletando);
if (!$verifica){
    Echo "<script> window.alert('Não foi possível deletar o integrante da equipe');
    window.location.href = 'EditaEquipes.php';
                </script>";
}
else {
    Echo "<script> window.alert('O integrante foi retirado!!');
    window.location.href = 'EditaEquipes.php';
                </script>";
}

?>