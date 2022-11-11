<?php

session_start();

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro.";
}

$senha = $_GET['senha-usuario'];
$confirmaSenha = $_GET['confirmaSenha-usuario'];

if (empty($senha) or empty($confirmaSenha)) {
    echo "<script> 
					window.alert('Preencha os campos');
                    window.location.href='mudaSenha.php';
			</script>";
}

if ($senha === $confirmaSenha) {
    $SQL = "UPDATE cadastro
    SET senha = '" . $senha . "'
    WHERE IDcadastro = '" . $_SESSION['IDcadastro'] . "'";
    $teste = mysqli_query($conexao, $SQL);
    if (!$teste) {
        echo "<script> 
					window.alert('Erro ao atualizar senha');
                    window.location.href='mudaSenha.php';
			</script>";
    } else {
        echo "<script> 
					window.alert('Senha atualizada');
                    window.location.href='../inicial.php';
			</script>";
    }
} else {
    echo "<script> 
					window.alert('Senhas diferentes');
                    window.location.href='mudaSenha.php';
			</script>";
}