<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix conhecimento</title>
    <link rel="stylesheet" href="CSS/CSS-telaGestor-Inicial.css">
</head>

<body>
    <script src="java-Gestor.js"></script>

    <?php
    include __DIR__ . '/../Menu/menu.php';

    $_SESSION['IDequipe'] = "";
    ?>

    <section id="Menu-funcionarios">

        <form action="funcionario-dados/RecebeID.php" method="GET">

            <?php

            $conexao = mysqli_connect("localhost", "root", "", "matriz");

            if ($conexao == false) {
                echo "Erro.";
            }

            $IDgestor = $_SESSION['IDcadastro'];

            $selecionaEquipes = "SELECT * FROM integrantes WHERE gestor = ' " . $IDgestor . " ' ORDER BY nome";
            $teste = mysqli_query($conexao, $selecionaEquipes);

            if (!$teste) {
            }

            while ($buscando = mysqli_fetch_array($teste)) {
                echo "<div class='card'>
    <table class='table-funcionarios'>
        <tr>
            <td class='td-imagem'>
                <img src='../Imagens/perfilFoto/" . $buscando['foto'] . "' style='margin:10px; width:150px;height:150px;border-radius:100%'>
            </td>
            <td>
                <div class='container'>
                    <h4><b><a class='linkFuncionario' href='funcionario-dados/RecebeID.php?id=" . $buscando['IDcadastro'] . "&idEquipe=" . $buscando['IDequipe'] . "'>" . $buscando['nome'] . "</a></b></h4>
                    <p>" . $buscando['funcao'] . "</p>
                </div>
            </td>
        </tr>
    </table>
</div>";
            }

            ?>
        </form>
        <br>
    </section>

    <section id="Menu-equipe">
        <button name="equipe" class="button" id="equipe" onclick="Equipes()">Escolha a equipe</button>
        <br>
        <br>

    </section>

    <div id="Equipes" class="Show">
        <center>
            <br><a class="linkEquipe" href="gestor.php">Todas as equipes</a> <br><br>
            <a class="linkEquipe" href="CriaEquipes/ConfirmaSenha.php">Criar nova equipe</a> <br><br>
            <?php

            $pegaEquipes = "SELECT * from equipe WHERE gestor = '" . $IDgestor . " ' ORDER BY nome";
            $resultado = mysqli_query($conexao, $pegaEquipes);
            $flag = false;

            while ($dados = mysqli_fetch_array($resultado)) {
                echo "<a class='linkEquipe' href='gestorEquipe.php?id=" . $dados['IDequipe'] . "'>" . $dados['nome'] . "</a> <br><br>";
            }

            ?>
        </center>
    </div>

    <div id="selecionar" class="Show">
        <center>
            <br><a class="linkEquipe" href="gestor-tela2/semaforo.php">Ver equipes</a> <br><br>
            <a class="linkEquipe" href="gestor-tela2/semaforoCompetencias.php">Ver competencias</a> <br><br>
        </center>
    </div>

    <section id="Menu-Editar" class="Show">
        <div id="EquipesEditar">
            <center>
                <?php

                $pegaEquipes = "SELECT * from equipe WHERE gestor = '" . $IDgestor . " ' ORDER BY nome";
                $resultado = mysqli_query($conexao, $pegaEquipes);

                while ($dados = mysqli_fetch_array($resultado)) {
                    echo "<br><a class='linkEquipe' href='CriaEquipes/ConfirmaSenha2.php?id=" . $dados['IDequipe'] . "'>" . $dados['nome'] . "</a> <br><br>";
                }

                ?>
            </center>
        </div>

    </section>

    <section>
        <div id="div-button">
            <table id="table-button">
                <tr>
                    <td class="btn"><input type="button" class="button" onclick="Semaforo()" value="Semáforo"
                            id="button1" /></td>
                    <td id="space"></td>
                    <td class="btn"><input type="button" class="button" onclick="EditarEqp()" value="Editar equipes"
                            id="button2" /></td>
                </tr>
            </table>
        </div>
    </section>

</body>

</html>