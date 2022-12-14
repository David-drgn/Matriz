<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz conhecimento</title>
    <link rel="stylesheet" type="text/css" href="CSS/CSS-telaGestor-tela2.css">
</head>

<body>

    <script src="semaforo.js"></script>

    <?php
    include __DIR__ . '/../../Menu/menuSemaforo.php';
    $conexao = mysqli_connect("localhost", "root", "", "matriz");

    if ($conexao == false) {
        echo "Erro ao conectar ao banco de dados.";
    }
    $IDgestor = $_SESSION['IDcadastro'];
    $semaforo = $_GET['semaforo'];
    ?>

    <section id="Menu-funcionarios">
        <?php
        $BuscaEqp = "SELECT * FROM qualificacaoeqp WHERE gestor = '" . $IDgestor . "' AND semaforo = '" . $semaforo . "' ORDER BY descricao";
        $sql = mysqli_query($conexao, $BuscaEqp);
        while ($resultado = mysqli_fetch_array($sql)) {

            if ($resultado['semaforo'] == "Vermelho") {
                echo "
                <div class='card'>
                <table>
                <tr>
                    <td class='td-imagem'>
                        <div class='cor' id='vermelho'></div>
                    </td>
                    <td>
                        <div class='container'>
                            <h4><b>" . $resultado['descricao'] . "</b></h4>
                            <p><a href='../Funcionario-dados/Competencias.php?id=" . $resultado['IDqualificacaoEqp'] . "&IDeqp=" . $resultado['IDequipe'] . "'>Ver detalhes</a></p>
                        </div>
                    </td>
                </tr>
                </table>
                </div>
                ";
            } else if ($resultado['semaforo'] == "VermelhoLaranja") {
                echo "
                    <div class='card'>
                <table>
                <tr>
                    <td class='td-imagem'>
                        <div class='cor' id='VermelhoLaranja'></div>
                    </td>
                    <td>
                        <div class='container'>
                            <h4><b>" . $resultado['descricao'] . "</b></h4>
                            <p><a href='../Funcionario-dados/Competencias.php?id=" . $resultado['IDqualificacaoEqp'] . "&IDeqp=" . $resultado['IDequipe'] . "'>Ver detalhes</a></p>
                        </div>
                    </td>
                </tr>
                </table>
                </div>
                ";
            } else if ($resultado['semaforo'] == "Laranja") {
                echo "
                    <div class='card'>
                <table>
                <tr>
                    <td class='td-imagem'>
                        <div class='cor' id='laranja'></div>
                    </td>
                    <td>
                        <div class='container'>
                        <h4><b>" . $resultado['descricao'] . "</b></h4>
                        <p><a href='../ge../Funcionario-dados/Competencias.php?id=" . $resultado['IDqualificacaoEqp'] . "&IDeqp=" . $resultado['IDequipe'] . "'>Ver detalhes</a></p>
                        </div>
                    </td>
                </tr>
                </table>
                </div>
                ";
            } else if ($resultado['semaforo'] == "VerdeAmarelo") {
                echo "
                    <div class='card'>
                <table>
                <tr>
                    <td class='td-imagem'>
                        <div class='cor' id='VerdeAmarelo'></div>
                    </td>
                    <td>
                        <div class='container'>
                        <h4><b>" . $resultado['descricao'] . "</b></h4>
                        <p><a href='../Funcionario-dados/Competencias.php?id=" . $resultado['IDqualificacaoEqp'] . "&IDeqp=" . $resultado['IDequipe'] . "'>Ver detalhes</a></p>
                        </div>
                    </td>
                </tr>
                </table>
                </div>
                ";
            } else if ($resultado['semaforo'] == "Verde") {
                echo "
                    <div class='card'>
                <table>
                <tr>
                    <td class='td-imagem'>
                        <div class='cor' id='verde'></div>
                    </td>
                    <td>
                        <div class='container'>
                        <h4><b>" . $resultado['descricao'] . "</b></h4>
                        <p><a href='../Funcionario-dados/Competencias.php?id=" . $resultado['IDqualificacaoEqp'] . "&IDeqp=" . $resultado['IDequipe'] . " '>Ver detalhes</a></p>
                        </div>
                    </td>
                </tr>
                </table>
                </div>
                ";
            }
        }

        echo "<br></br>";

        ?>

    </section>

    <section id="Menu-funcao">
        <button id="funcao" onclick="semaforo()">N??vel da compet??ncia:</button>
    </section>
    <div id="nivel" class="show">
        <center>
            <br>
            <a href="semaforoCompetencias.php">Todos</a> <br><br>
            <a href="semaforoNivel2.php?semaforo=Vermelho">Vermelho</a> <br><br>
            <a href="semaforoNivel2.php?semaforo=Laranja">Laranja</a> <br><br>
            <a href="semaforoNivel2.php?semaforo=VerdeAmarelo">Amarelo</a> <br><br>
            <a href="semaforoNivel2.php?semaforo=Verde">Verde</a> <br><br>
        </center>
    </div>

</body>

</html>