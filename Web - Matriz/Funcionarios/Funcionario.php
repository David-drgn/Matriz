<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix conhecimento</title>
    <link rel="stylesheet" type="text/css" href="CSS/CSS-telaFuncionario-Inicial.css">
</head>

<body>

    <script src="JavaScript/javaFuncionario.js"></script>

    <?php
    include __DIR__ . '/../Menu/menu.php';
    $ID = $_SESSION['IDcadastro'];
    $conexao = mysqli_connect ("localhost","root","","matriz");

	if ($conexao == false){
		echo "Erro.";
	}
    ?>

    <section id="Menu-funcionarios">

        <table id="item-tabela">

            <?php

$Sql = "SELECT * FROM qualificacaofunc WHERE IDcadastro = '" . $ID . "'";
$Selecionando = mysqli_query($conexao,$Sql);

while ($qualidades = mysqli_fetch_array($Selecionando)){


if($qualidades['nivelRecomendado'] == 4){
echo "<tr>
<td class='tamanho'><a> " . $qualidades['descricao'] . " </a></td>
<td colspan='5' class='tdTama'>
<div class='tdDado4'>"; 
if ($qualidades['nivelAtual'] == 0){
echo "<div class='tdNivel'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 1){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 2){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 3){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div><div class='tdNivel3'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 4){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div><div class='tdNivel3'></div><div class='tdNivel4'></div></div></td></tr>";
}
}


else if($qualidades['nivelRecomendado'] == 3){
echo "<tr>
<td class='tamanho'><a> " . $qualidades['descricao'] . " </a></td>
<td colspan='4' class='tdTama'>
<div class='tdDado3'>";
if ($qualidades['nivelAtual'] == 0){
echo "<div class='tdNivel'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 1){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 2){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 3){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div><div class='tdNivel3'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 4){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div><div class='tdNivel3'></div></div></td><td colspan='1' class='tdAd'><div class='tdNivel4'></div></div></td></tr>";
}
}


else if($qualidades['nivelRecomendado'] == 2){
echo "<tr>
<td class='tamanho'><a> " . $qualidades['descricao'] . " </a></td>
<td colspan='3' class='tdTama'>
<div class='tdDado2'>";
if ($qualidades['nivelAtual'] == 0){
echo "<div class='tdNivel'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 1){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div>";
}
else if ($qualidades['nivelAtual'] == 2){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div>";
}
else if ($qualidades['nivelAtual'] == 3){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div></div></td><td colspan='2' class='tdAd'><div class='tdNivel3'></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 4){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div><div class='tdNivel2'></div></div></td><td colspan='2' class='tdAd'><div class='tdNivel3'></div><div class='tdNivel4'></div></div></td></tr>";
}
}


else if($qualidades['nivelRecomendado'] == 1){
echo "<tr>
<td class='tamanho'><a> " . $qualidades['descricao'] . " </a></td>
<td colspan='2' class='tdTama'>
<div class='tdDado1'>";
if ($qualidades['nivelAtual'] == 0){
echo "<div class='tdNivel'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 1){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 2){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div></div></td><td colspan='3' class='tdAd'><div class='tdNivel2'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 3){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div></div></td><td colspan='3' class='tdAd'><div class='tdNivel2'></div><div class='tdNivel3'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 4){
echo "<div class='tdNivel'></div><div class='tdNivel1'></div></div></td><td colspan='3' class='tdAd'><div class='tdNivel2'></div><div class='tdNivel3'></div><div class='tdNivel4'></div></div></td></tr>";
}
}


else if($qualidades['nivelRecomendado'] == 0){
echo "<tr>
<td class='tamanho'><a> " . $qualidades['descricao'] . " </a></td>
<td colspan='1' class='tdTama'>
<div class='tdDado'>";
if ($qualidades['nivelAtual'] == 0){
echo "<div class='tdNivel'></div></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 1){
echo "<div class='tdNivel'></div></div></td><td colspan='4' class='tdAd'><div class='tdNivel1'></div></td></td></tr></div></td></tr>";
}
else if ($qualidades['nivelAtual'] == 2){
echo "<div class='tdNivel'></div></div></td><td colspan='4' class='tdAd'><div class='tdNivel1'></div><div class='tdNivel2'></div></td></td></tr></td></tr>";
}
else if ($qualidades['nivelAtual'] == 3){
echo "<div class='tdNivel'></div></div></td><td colspan='4' class='tdAd'><div class='tdNivel1'></div><div class='tdNivel2'></div><div class='tdNivel3'></div></td></td></tr>";
}
else if ($qualidades['nivelAtual'] == 4){
echo "<div class='tdNivel'></div></div></td><td colspan='4' class='tdAd'><div class='tdNivel1'></div><div class='tdNivel2'></div><div class='tdNivel3'></div><div class='tdNivel4'></div></td></td></tr>";
}
}

}


?>

            <tr>
                <td></td>
                <td style="width: 16%; height:30px;">0</td>
                <td style="width: 16%; height:30px;">1</td>
                <td style="width: 16%; height:30px;">2</td>
                <td style="width: 16%; height:30px;">3</td>
                <td style="width: 16%; height:30px;">4</td>
            </tr>
        </table>

    </section>

</body>

</html>