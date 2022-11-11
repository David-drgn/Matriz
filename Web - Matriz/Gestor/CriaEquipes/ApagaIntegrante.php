<?php

session_start();

$IDequipe = $_SESSION['IDequipe'];
$IDgestor = $_SESSION['IDcadastro'];

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro ao conectar ao banco de dados.";
}

$IDintegrante = $_GET['id'];

$deletando = "DELETE FROM qualificacaofunc WHERE IDequipe = '" . $IDequipe . "' AND IDcadastro = '" . $IDintegrante . "'";
$verifica = mysqli_query($conexao, $deletando);
if (!$verifica) {
    echo "<script> window.alert('Não foi possível deletar as qualificações do funcionário');
    window.location.href = 'CriaEquipes.php';
                </script>";
} else {
    echo "<script> window.alert('As qualificações do funcionário foram deletadas!!');
    window.location.href = 'CriaEquipes.php';
                </script>";
}

$deletando = "DELETE FROM integrantes WHERE IDequipe = '" . $IDequipe . "' AND IDintegrantes = '" . $IDintegrante . "'";
$verifica = mysqli_query($conexao, $deletando);
if (!$verifica) {
    echo "<script> window.alert('Não foi possível deletar o integrante da equipe');
    window.location.href = 'CriaEquipes.php';
                </script>";
} else {
    echo "<script> window.alert('O integrante foi retirado!!');
    window.location.href = 'CriaEquipes.php';
                </script>";
}