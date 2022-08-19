<?php
$IDfuncionario = $_GET['id'];
$IDequipe = $_GET['idEquipe'];

session_start();

$_SESSION['IDfuncionario'] = $IDfuncionario;
$_SESSION['IDequipe'] = $IDequipe;

Echo "<script> window.location.href = 'Funcionario-dados.php';
                </script>";

?>