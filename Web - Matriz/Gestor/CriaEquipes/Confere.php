<?php
if (isset($_GET["Salvar"])) {

    $conexao = mysqli_connect("localhost", "root", "", "matriz");

    if ($conexao == false) {
        echo "Erro ao conectar ao banco de dados.";
    }

    $senha = $_GET['senha'];
    if (empty($senha)) {
        echo "<script> window.alert('Por favor, digite a senha!!');
    window.location.href = 'ConfirmaSenha2.php';
                </script>";
        exit();
    }

    session_start();
    $IDgestor = $_SESSION['IDcadastro'];

    $flag = true;

    $verificaSenha = "SELECT * FROM cadastro WHERE IDcadastro = '" . $IDgestor . "' and senha = '" . $senha . "'";
    $sql = mysqli_query($conexao, $verificaSenha);
    while ($dados = mysqli_fetch_array($sql)) {
        $flag = false;
    }

    if ($flag == true) {
        echo "<script>var confirmacao = confirm('Deseja tentar novamente?');

    if (confirmacao == true) {
        window.location.href = 'ConfirmaSenha2.php';
    }

    else {
        alert('Você selecionou Cancelar!');
        window.location.href = 'ApagaSession.php';
    }</script>";
    } else if ($flag == false) {
        echo "<script> window.alert('Acesso liberado!!');</script>";
        echo "<script> window.alert('" . $_SESSION['IDequipe'] . "!!');</script>";
        echo "<script>window.location.href = 'EditaEquipes.php';</script>";
    }
}

if (isset($_GET["Esqueci"])) {
    echo "<script>window.location.href = '../../EsqueciSenha/Requerimento.php';</script>";
}