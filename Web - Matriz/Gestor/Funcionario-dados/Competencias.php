<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix conhecimento</title>
    <link rel="stylesheet" type="text/css" href="CSS/CSS-funcionario-dados.css">
</head>

<body>

    <?php

    $conexao = mysqli_connect("localhost", "root", "", "matriz");

    if ($conexao == false) {
        echo "Erro.";
    }
    session_start();

    $IDqualificacao = $_GET['id'];
    $IDeqp = $_GET['IDeqp'];

    $sql = "SELECT * FROM qualificacaoeqp WHERE IDqualificacaoEqp = '" . $IDqualificacao . "'";
    $teste = mysqli_query($conexao, $sql);
    if (!$teste) {
        echo "<script>alert('Erro ao receber competencia');
        window.location.href = '../gestor.php';</script>";
    }
    while ($desc = mysqli_fetch_array($teste)) {
        $descricao = $desc['descricao'];
        echo "<section id='Menu-funcionario2'>
        <div id='alinhar-centro2'>
            <center>
            <br>
                <div class='cor' id='" . $desc['semaforo'] . "'></div> <br>
                <b>
                    <p>" . $desc['descricao'] . "</p>
                </b>
                <p> " . $desc['semaforo'] . " </p>
                <script src='../../Menu/JavaScript/java-back.js'></script>
                        <button id='Botao-input2' onclick='TelaGestor()'><b><</b></button>
            </center>
        </div>
        <div id='eqp'>
                        <div id='info'>
                        <br>
                            <div class='organiza'>
                                <div id='atual'></div>  Nivel atual
                            </div>
                            <br>
                            <div class='organiza'>
                                <div id='recomendado'></div>  Nivel recomendado
                            </div>
                        </div>
                        </div>
    </section>";
    }

    ?>

    <section id="Menu-funcionarios">

        <form action="EditandoDados.php" method="GET">
            <table id="item-tabela">
                <?php

                $Sql = "SELECT * FROM qualificacaofunc WHERE IDequipe = '" . $IDeqp . "' and descricao = '" . $descricao . "' ORDER BY IDcadastro";
                $Seleciona = mysqli_query($conexao, $Sql);

                while ($qualidades = mysqli_fetch_array($Seleciona)) {

                    $nome = "SELECT * FROM cadastro WHERE IDcadastro = '" . $qualidades['IDcadastro'] . "'";
                    $testando = mysqli_query($conexao, $nome);
                    while ($resultado = mysqli_fetch_array($testando)) {
                        $nomeFunc = $resultado['nome'];
                    }

                    $nome = "SELECT * FROM equipe WHERE IDequipe = " . $qualidades['IDequipe'] . "";
                    $testando = mysqli_query($conexao, $nome);
                    while ($resultado = mysqli_fetch_array($testando)) {
                        $nomeEqp = $resultado['nome'];
                    }

                    echo "<tr><td class='tamanho' rowspan='2' colspan='2'><a class='desc' href='RecebeID.php?id=" . $qualidades['IDcadastro'] . "&idEquipe=" . $qualidades['IDequipe'] . "'> " . $nomeFunc . " </a><br><br>
                    <a class='data' href='../gestorEquipe.php?id=" . $qualidades['IDequipe'] . "'> " . $nomeEqp . " </a></td>";
                    if ($qualidades['nivelRecomendado'] == 5) {
                        echo "<td colspan='5'><div class='tdTama'></div><td>";
                        if ($qualidades['nivelAtual'] == 1) {
                            echo "<tr><td colspan='5' class='tdAtual'><div class='nivelAtual' style='width: 20%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 2) {
                            echo "<tr><td colspan='5' class='tdAtual'><div class='nivelAtual' style='width: 40%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 3) {
                            echo "<tr><td colspan='5' class='tdAtual'><div class='nivelAtual' style='width: 60%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 4) {
                            echo "<tr><td colspan='5' class='tdAtual'><div class='nivelAtual' style='width: 80%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 5) {
                            echo "<tr><td colspan='5' class='tdAtual'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
                        }
                    }

                    if ($qualidades['nivelRecomendado'] == 4) {
                        echo "<td colspan='4'><div class='tdTama'></div><td>";
                        if ($qualidades['nivelAtual'] == 1) {
                            echo "<tr><td colspan='4' class='tdAtual'><div class='nivelAtual' style='width: 25%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 2) {
                            echo "<tr><td colspan='4' class='tdAtual'><div class='nivelAtual' style='width: 50%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 3) {
                            echo "<tr><td colspan='4' class='tdAtual'><div class='nivelAtual' style='width: 75%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 4) {
                            echo "<tr><td colspan='4' class='tdAtual'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 5) {
                            echo "<tr><td colspan='4' class='tdAtual'><div class='nivelAtual' style='width: 125%'></div><td><tr>";
                        }
                    }

                    if ($qualidades['nivelRecomendado'] == 3) {
                        echo "<td colspan='3'><div class='tdTama'></div><td>";
                        if ($qualidades['nivelAtual'] == 1) {
                            echo "<tr><td colspan='3' class='tdAtual'><div class='nivelAtual' style='width: 33.3%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 2) {
                            echo "<tr><td colspan='3' class='tdAtual'><div class='nivelAtual' style='width: 66.6%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 3) {
                            echo "<tr><td colspan='3' class='tdAtual'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 4) {
                            echo "<tr><td colspan='3' class='tdAtual'><div class='nivelAtual' style='width: 133.3%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 5) {
                            echo "<tr><td colspan='3' class='tdAtual'><div class='nivelAtual' style='width: 166.6%'></div><td><tr>";
                        }
                    }

                    if ($qualidades['nivelRecomendado'] == 2) {
                        echo "<td colspan='2'><div class='tdTama'></div><td>";
                        if ($qualidades['nivelAtual'] == 1) {
                            echo "<tr><td colspan='2' class='tdAtual'><div class='nivelAtual' style='width: 50%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 2) {
                            echo "<tr><td colspan='2' class='tdAtual'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 3) {
                            echo "<tr><td colspan='2' class='tdAtual'><div class='nivelAtual' style='width: 150%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 4) {
                            echo "<tr><td colspan='2' class='tdAtual'><div class='nivelAtual' style='width: 200%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 5) {
                            echo "<tr><td colspan='2' class='tdAtual'><div class='nivelAtual' style='width: 250%'></div><td><tr>";
                        }
                    }

                    if ($qualidades['nivelRecomendado'] == 1) {
                        echo "<td colspan='1'><div class='tdTama'></div><td>";
                        if ($qualidades['nivelAtual'] == 1) {
                            echo "<tr><td colspan='1' class='tdAtual'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 2) {
                            echo "<tr><td colspan='1' class='tdAtual'><div class='nivelAtual' style='width: 200%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 3) {
                            echo "<tr><td colspan='1' class='tdAtual'><div class='nivelAtual' style='width: 300%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 4) {
                            echo "<tr><td colspan='1' class='tdAtual'><div class='nivelAtual' style='width: 400%'></div><td><tr>";
                        }
                        if ($qualidades['nivelAtual'] == 5) {
                            echo "<tr><td colspan='1' class='tdAtual'><div class='nivelAtual' style='width: 500%'></div><td><tr>";
                        }
                    }

                    

                    /*
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
    
        echo "</td></tr>";*/
        echo "<tr><td><br></td></tr>";}

                ?>

<tr>
                    <td></td>
                    <td style="margin-left:10px; text-align: right;width: 16%; height:30px;">0</td>
                    <td style="text-align: right;width: 16%; height:30px;">1</td>
                    <td style="text-align: right;width: 16%; height:30px;">2</td>
                    <td style="text-align: right;width: 16%; height:30px;">3</td>
                    <td style="text-align: right;width: 16%; height:30px;">4</td>
                    <td style="text-align: right;width: 16%; height:30px;">5</td>
                </tr>

            </table>

            <br>
            <br>

    </section>
</body>

</html>