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
        <tr>
                <td></td>
                <td style="width: 16%; height:30px;">0</td>
                <td style="width: 16%; height:30px;">1</td>
                <td style="width: 16%; height:30px;">2</td>
                <td style="width: 16%; height:30px;">3</td>
                <td style="width: 16%; height:30px;">4</td>
            </tr>

            <?php

$Sql = "SELECT * FROM qualificacaofunc WHERE IDcadastro = '" . $ID . "'";
$Selecionando = mysqli_query($conexao,$Sql);

while ($qualidades = mysqli_fetch_array($Selecionando)){


    while ($qualidades = mysqli_fetch_array($Selecionando)){
        echo "<tr><td class='tamanho'><a href='EditandoDados.php?id=" . $qualidades['IDqualificacaoFunc'] . "'> " . $qualidades['descricao'] . " </a></td>";
        if($qualidades['nivelRecomendado'] == 5){
            echo "<td colspan='5' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width: 20%'></div>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width: 40%'></div>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width: 60%'></div>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width: 80%'></div>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width: 100%'></div>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 4){
            echo "<td colspan='4' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:25%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:50%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:75%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width125%'></div></div></td><td colspan='1'>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 3){
            echo "<td colspan='3' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:33.3%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:66.6%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:133.3%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width:166.6%'></div></div></td><td colspan='2'>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 2){
            echo "<td colspan='2' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:50%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:150%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:200%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width:250%'></div></div></td><td colspan='3'>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 1){
            echo "<td colspan='1' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:200%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:300%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:400%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width:500%'></div></div></td><td colspan='4'>";
            }
        }
    
        echo "</td></tr>";

}}


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