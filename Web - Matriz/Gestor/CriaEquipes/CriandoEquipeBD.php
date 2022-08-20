<?php

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro.";
}

if (isset($_GET["Salvar"])) {

    $senha = $_GET['senha'];
    if (empty($senha)) {
        echo "<script> window.alert('Por favor, digite a senha!!');
        window.location.href = 'ConfirmaSenha.php';
                    </script>";
        exit();
    }

    session_start();
    $IDgestor = $_SESSION['IDcadastro'];

    $flag = 1;

    $verificaSenha = "SELECT * FROM cadastro WHERE IDcadastro = '" . $IDgestor . "' and senha = '" . $senha . "'";
    $sql = mysqli_query($conexao, $verificaSenha);
    while ($dados = mysqli_fetch_array($sql)) {
        $flag = 2;
    }

    if ($flag == 1) {
        echo "<script>var confirmacao = confirm('Deseja tentar novamente?');

        if (confirmacao == true) {
            window.location.href = 'ConfirmaSenha.php';
        }

        else {
            alert('Você selecionou Cancelar!');
            window.location.href = '../gestor.php';
        }</script>";
    } else if ($flag == 2) {
        $nome = md5(uniqid(""));
        $Criando = "INSERT INTO equipe VALUES (DEFAULT,'" . $nome . "','Descrição', 'Vermelho', '" . $IDgestor . "' )";

        $Resultado = mysqli_query($conexao, $Criando);
        if (!$Resultado) {

            echo "<script> window.alert('Erro ao criar equipe!!');
                                   window.history.back();
                          </script>";
        } else {
        }

        $buscar = "SELECT * FROM equipe WHERE nome = '" . $nome . "'";
        $result = mysqli_query($conexao, $buscar);

        while ($registro = mysqli_fetch_array($result)) {

            $_SESSION['IDequipe']   =   $registro['IDequipe'];

            echo "<script> window.alert('Equipe criada com sucesso!!');
                                    window.location.href='CriaEquipes.php';
                        </script>";
        }
        echo "<script> window.alert('Todos os dados da equipe já foram salvos!!');
                        window.location.href = 'CriaEquipes.php';
                    </script>";
    }
}