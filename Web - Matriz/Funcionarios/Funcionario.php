<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CSS-telaFuncionario-Inicial.css">
    <title>Matrix conhecimento</title>
</head>

<body>

    <script src="../JavaScript/java-back.js"></script>

    <button id="sair" onclick="Back()">
        < </button>

            <button id="perguntas">?</button>

            <section id="background"></section>


            <?php

            $conexao = mysqli_connect("localhost", "root", "", "matriz");

            if ($conexao == false) {
                echo "Erro.";
            }

            session_start();
            $Nome = $_SESSION['nome'];
            $Cargo = $_SESSION['cargo'];
            $Foto = $_SESSION['foto'];
            $IDdados = $_SESSION['IDcadastro'];

            echo "
    <section id='Menu-gestor'>
        <div id='alinhar-centro'>
            <center>
                <img src='CSS/Imagens/usuario.png' id='imagem-usuario'> <br>
                <p id='nomeFunc'>" . $Nome . "</p>
                ";
            if ($IDdados >= 1000) {
                echo "
                    <b>
                        <p>ID: " . $IDdados . "</p>
                    </b>";
            } else if ($IDdados <= 100) {
                echo "
                    <b>
                        <p>ID: 00" . $IDdados . "</p>
                    </b>";
            } else if ($IDdados <= 10) {
                echo "
                    <b>
                        <p>ID: 000" . $IDdados . "</p>
                    </b>";
            }
            echo "
    </center>
    </div>
    <div id='tamanho-dados'>
        <table id='Progresso'>";
            if ($Cargo == "Gestor") {
                $pegandoDados = "SELECT * FROM equipe WHERE gestor = '" . $IDdados . "' ORDER BY nome";
                $SQL = mysqli_query($conexao, $pegandoDados);

                while ($resultado = mysqli_fetch_array($SQL)) {
                    if ($resultado['semaforo'] == "Vermelho") {
                        echo "
                                    <tr>
                                <td colspan='2'>
                                    <h3 class='index-dado'>" . $resultado['nome'] . "</h4>
                                </td>
                            </tr>
                                    <tr>
                                    <td  class='tdDado'>
                                        <div class='progressbar' class='dado'>
                                            <div style='border-radius: 10px;height: 30px;width: 20%;background-color: red;'></div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4>20%</h4>
                                    </td>
                                    </tr>";
                    }
                    if ($resultado['semaforo'] == "VermelhoLaranja") {
                        echo "
                    <tr>
                                <td colspan='2'>
                                    <h3 class='index-dado'>" . $resultado['nome'] . "</h4>
                                </td>
                            </tr>
                                    <tr>
                                    <td>
                                        <div class='progressbar' class='dado'>
                                            <div style='border-radius: 10px;height: 30px; width: 40%;background-color: orangered;'></div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4>40%</h4>
                                    </td>
                                    </tr>";
                    }
                    if ($resultado['semaforo'] == "Laranja") {
                        echo "
                    <tr>
                                <td colspan='2'>
                                    <h3 class='index-dado'>" . $resultado['nome'] . "</h4>
                                </td>
                            </tr>
                                    <tr>
                                    <td>
                                        <div class='progressbar' class='dado'>
                                            <div style='border-radius: 10px;height: 30px;width: 60%;background-color: orange;'></div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4>60%</h4>
                                    </td>
                                    </tr>";
                    }
                    if ($resultado['semaforo'] == "VerdeAmarelo") {
                        echo "
                    <tr>
                                <td colspan='2'>
                                    <h3 class='index-dado'>" . $resultado['nome'] . "</h4>
                                </td>
                            </tr>
                                    <tr>
                                    <td>
                                        <div class='progressbar' class='dado'>
                                            <div style='border-radius: 10px;height: 30px;width: 80%;background-color: greenyellow;'></div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4>80%</h4>
                                    </td>
                                    </tr>";
                    }
                    if ($resultado['semaforo'] == "Verde") {
                        echo "
                    <tr>
                                <td colspan='2'>
                                    <h3 class='index-dado'>" . $resultado['nome'] . "</h4>
                                </td>
                            </tr>
                                    <tr>
                                    <td>
                                        <div class='progressbar' class='dado'>
                                            <div style='border-radius: 10px;height: 30px;width: 100%;background-color: green;'></div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4>100%</h4>
                                    </td>
                                    </tr>";
                    }
                }
            } else {
                $Sql = "SELECT * FROM qualificacaofunc WHERE IDcadastro = '" . $IDdados . "'";
                $Selecionando = mysqli_query($conexao, $Sql);

                    while ($qualidades = mysqli_fetch_array($Selecionando)) {
                        echo "<tr><td class='tamanho'><p class='desc'> " . $qualidades['descricao'] . " </p></td></tr>";
                        echo "<tr><td class='tdTama'>";
                        if ($qualidades['nivelAtual'] == 1) {
                            echo "<div class='nivelAtual' style='width: 20%'></div></td><td class='txt'> 20%</td>";
                        }
                        if ($qualidades['nivelAtual'] == 2) {
                            echo "<div class='nivelAtual' style='width: 40%'></div></td><td class='txt'> 40%</td>";
                        }
                        if ($qualidades['nivelAtual'] == 3) {
                            echo "<div class='nivelAtual' style='width: 60%'></div></td><td class='txt'> 60%</td>";
                        }
                        if ($qualidades['nivelAtual'] == 4) {
                            echo "<div class='nivelAtual' style='width: 80%'></div></td><td class='txt'> 80%</td>";
                        }
                        if ($qualidades['nivelAtual'] == 5) {
                            echo "<div class='nivelAtual' style='width: 100%'></div></td><td class='txt'> 100%</td>";
                        }
                    }

                    echo "</tr>";
            }

            echo "
    </section>
    ";

            ?>

</body>

</html>