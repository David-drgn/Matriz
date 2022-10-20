<?php

session_start();

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro.";
} else {
    $email = $_GET['email-usuario'];
    $CPF = $_GET['cpf-usuario'];
    $flag = false;

    $CPF = preg_replace('/[^0-9]/is', '', $CPF);

    include('validando-cpf.php');

    $buscar = "select * from cadastro where email = '" . $email . "'and cpf='" . $CPF . "'";
    $resultado = mysqli_query($conexao, $buscar);

    while ($registro = mysqli_fetch_array($resultado)) {
        $flag = true;
        $_SESSION['IDcadastro'] = $registro['IDcadastro'];
    }

    if ($flag == true) {
        echo "<script> 
					window.alert('Cadastro encontrado');
                    window.location.href='mudaSenha.php';
			</script>";
    } else {
        echo "<script> 
					window.alert('Cadastro não encontrado');
                    window.location.href='Requerimento.php';
			</script>";
    }
}