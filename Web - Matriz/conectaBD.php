<?php
$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro.";
}