<?php

session_start();
$_SESSION['IDcadastro'] = "";
$_SESSION['nome']       = "";
$_SESSION['cargo']      = "";
$_SESSION['foto']       = "";
$_SESSION['email']      = "";
$_SESSION['senha']       = "";

echo "<script>
window.alert('Login apagado!');
window.location.href='../index.php';</script>";