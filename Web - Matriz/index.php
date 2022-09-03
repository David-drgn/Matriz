<?php
    session_start();
    if (empty($_SESSION['IDcadastro']) and empty($_SESSION['nome']) and empty($_SESSION['email']) and empty($_SESSION['senha']) and empty($_SESSION['cargo']) and empty($_SESSION['foto'])) {
        echo "<script>window.location.href = 'inicial.php';</script>";
    }
    else {
        echo "<script>var confirmacao = confirm('Um login foi detectado, deseja entrar com este login?');

if (confirmacao == true) {
    window.location.href = 'login.php';
}

else {
    alert('Você selecionou Cancelar!');
    window.location.href = 'inicial.php';
}</script>";
    }
    ?>