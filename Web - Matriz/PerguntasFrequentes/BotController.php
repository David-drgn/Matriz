<?php

if (isset($_GET["1"])) {
    echo ("
    <script> window.location.href = 'Bot1.php'; </script>
    ");
}
if (isset($_GET["2"])) {
    echo ("
    <script> window.location.href = 'Bot2.php'; </script>
    ");
}
if (isset($_GET["3"])) {
    echo ("
    <script> window.location.href = 'Bot3.php'; </script>
    ");
}
if (isset($_GET["4"])) {
    echo ("
    <script> window.location.href = 'Bot4.php'; </script>
    ");
}
if (isset($_GET["5"])) {
    echo ("
    <script> window.location.href = 'Bot5.php'; </script>
    ");
}

if (isset($_GET["sair"])) {
    echo ("
    <script> window.location.href = '../index.php'; </script>
    ");
}
if (isset($_GET["enviar"])) {
    $bot = $_GET["resposta"];
    switch ($bot) {
        case 1:
            echo ("<script> window.location.href = 'Bot1.php'; </script>");
            break;
        case 2:
            echo ("<script> window.location.href = 'Bot2.php'; </script>");
            break;
        case 3:
            echo ("<script> window.location.href = 'Bot3.php'; </script>");
            break;
        case 4:
            echo ("<script> window.location.href = 'Bot4.php'; </script>");
            break;
        case 5:
            echo ("<script> window.location.href = 'Bot5.php'; </script>");
            break;
    }
}