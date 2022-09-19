<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix conhecimento</title>
    <style>
    .nivelAtual {
        border-radius: 15px;
        height: 100%;
        background-color: gray;
    }

    #Menu-gestor {
        display: flex;
        flex-direction: column;
        position: absolute;
        left: 0%;
        top: 0%;
        width: 30%;
        height: 100%;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .desc {
        margin-left: 20px;
        font-size: large;
        margin-bottom: 5px;
    }

    #alinhar-centro {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        background-color: #d9d9d9;
        border-top-right-radius: 20px;
    }

    table {
        overflow-y: scroll;
    }

    #imagem-usuario {
        width: 60%;
        height: 60%;
    }

    #tamanho-dados {
        position: absolute;
        bottom: 0%;
        left: 0%;
        width: 100%;
        height: 50%;
    }

    #Progresso {
        width: 100%;
        height: 100%;
        background-color: #a6a6a6;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .index-dado {
        margin-left: 30px;
    }

    .progressbar {
        background-color: black;
        border-radius: 13px;
        padding: 3px;
        width: 80%;
        margin-left: 20px;
    }

    #Botao {
        text-align: center;
    }

    button {
        font-size: 20px;
        background-color: #d9d9d9;
        width: 60%;
        border-radius: 10px;
    }

    .tdDado {
        width: 80%;
    }

    b {
        font-size: 30px;
    }
    </style>
</head>

<body>

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
                <img src='Foto/" . $Foto . "' id='imagem-usuario'> <br>
                <b>
                    <p>" . $Nome . "</p>
                </b>
                    <p>" . $Cargo . "</p>
            </center>
            </div>";

    if ($Cargo == "Gestor") {
        echo "<div id='tamanho-dados'>
                <table id='Progresso'>";
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
        echo "
                    <tr>
                        <td id='Botao' colspan='2'>
                        <br>
                            <script src='JavaScript/java-back.js'></script>
                            <button onclick='BackHistory()''>Sair</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    ";
    } else {

        if ($Cargo == "Funcionario") {
            echo "<div id='tamanho-dados'>
                <table id='Progresso'>";
            $Sql = "SELECT * FROM qualificacaofunc WHERE IDcadastro = '" . $IDdados . "'";
            $Selecionando = mysqli_query($conexao, $Sql);

            while ($qualidades = mysqli_fetch_array($Selecionando)) {
                echo "<tr><td colspan='2'><h3 class='index-dado'> " . $qualidades['descricao'] . " </h3></td></tr>";
                echo "<tr><td class='tdTama'>";
                if ($qualidades['nivelAtual'] == 1) {
                    echo "<div class='progressbar' class='dado'>
                    <div style='border-radius: 10px;height: 30px;width: 20%;background-color: #113159;'></div>
                    </div>";
                }
                if ($qualidades['nivelAtual'] == 2) {
                    echo "<div class='progressbar' class='dado'>
                    <div style='border-radius: 10px;height: 30px;width: 40%;background-color: #113159;'></div>
                    </div>";
                }
                if ($qualidades['nivelAtual'] == 3) {
                    echo "<div class='progressbar' class='dado'>
                    <div style='border-radius: 10px;height: 30px;width: 60%;background-color: #113159;'></div>
                    </div>";
                }
                if ($qualidades['nivelAtual'] == 4) {
                    echo "<div class='progressbar' class='dado'>
                    <div style='border-radius: 10px;height: 30px;width: 80%;background-color: #113159;'></div>
                    </div>";
                }
                if ($qualidades['nivelAtual'] == 5) {
                    echo "<div class='progressbar' class='dado'>
                    <div style='border-radius: 10px;height: 30px;width: 100%;background-color: #113159;'></div>
                    </div>";
                }
            }
            echo "
                    <tr>
                        <td id='Botao' colspan='2'>
                        <br>
                            <script src='JavaScript/java-back.js'></script>
                            <button onclick='BackHistory()'>Sair</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    ";
        }
    }
    ?>
</body>

</html>