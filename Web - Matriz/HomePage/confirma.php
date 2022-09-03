<?php

echo "<script>var confirmacao = confirm('Deseja fazer Logout?');

if (confirmacao == true) {
    window.location.href = 'apagaLogin.php';
}

else {
    alert('Você selecionou Cancelar!');
    window.location.href = '../index.php';
}</script>";

?>