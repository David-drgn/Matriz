<?php

session_start();

$IDequipe = $_GET['id'];

$_SESSION['IDequipe'] = $IDequipe;

echo "<script>window.location.href='CriaEquipes.php';</script>"

?>