<?php

session_start();
$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro.";
} else {
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $flag = false;

    $buscar = "select * from cadastro where email = '" . $email . "'and senha='" . $senha . "'";
    $resultado = mysqli_query($conexao, $buscar);

    while ($registro = mysqli_fetch_array($resultado)) {

        if ($registro['cargo'] == "Gestor") {
            echo "<script> window.alert('Bem vindo gestor!!');
					  window.location.href='HomePage/HomePage.php';
					  </script>";
            $flag = true;
        } else {
            echo "<script> window.alert('Bem vindo!!');
					  window.location.href='HomePage/HomePage.php';
					  </script>";
            $flag = true;
        }
    }
}
