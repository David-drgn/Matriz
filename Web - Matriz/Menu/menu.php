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

    #sair {
        font-size: 10px;
        background-color: white;
        color: #a6a6a6;
        width: 40px;
        height: 40px;
        border-radius: 100%;
        position: absolute;
        border: transparent;
        top: 15px;
        left: 15px;
        transition: all 1s;
    }

    #sair:hover {
        background-color: #a6a6a6;
        color: white;
        cursor: pointer;
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
        overflow-y: auto;
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
        margin-top: 20px;
        border-radius: 50%;
        width: 290px;
        height: 290px;
    }

    #tamanho-dados {
        position: absolute;
        bottom: 0%;
        left: 0%;
        width: 100%;
        height: 40vh;
        background-color: #a6a6a6;
        border-radius: 20px;
    }

    #Progresso {
        width: 100%;
        height: auto;
        background-color: #a6a6a6;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .index-dado {
        margin-left: 7%;
    }

    .progressbar {
        background-color: black;
        border-radius: 13px;
        padding: 3px;
        width: 80%;
        margin-left: 20px;
    }

    .tdDado {
        width: 70%;
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
                <img src='../Imagens/perfilFoto/" . $Foto . "' id='imagem-usuario'> <br>
                <b>
                    <p>" . $Nome . "</p>
                </b>
                    <p>" . $Cargo . "</p>
            </center>
            </div>";

    if ($Cargo == "Gestor") {
        echo "<div id='tamanho-dados'>
                <table id='Progresso'>";
        echo "<tr>
                <td colspan='2'>
                <h2 class='index-dado'><b>Equipe:</b></h2>
                </td>
                </tr>   ";
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
                                    <div style='border-radius: 10px;height: 20px;width: 20%;background-color: red;'></div>
                                </div>
                            </td>
                            <td>
                                <h4>20%</h4>
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
                            <td class='tdDado'>
                                <div class='progressbar' class='dado'>
                                    <div style='border-radius: 10px;height: 20px;width: 60%;background-color: orange;'></div>
                                </div>
                            </td>
                            <td>
                                <h4>60%</h4>
                            </td>
                            </tr>";
            }
            if ($resultado['semaforo'] == "Amarelo") {
                echo "
            <tr>
                        <td colspan='2'>
                            <h3 class='index-dado'>" . $resultado['nome'] . "</h4>
                        </td>
                    </tr>
                            <tr>
                            <td class='tdDado'>
                                <div class='progressbar' class='dado'>
                                    <div style='border-radius: 10px;height: 20px;width: 80%;background-color: yellow;'></div>
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
                            <td class='tdDado'>
                                <div class='progressbar' class='dado'>
                                    <div style='border-radius: 10px;height: 20px;width: 100%;background-color: green;'></div>
                                </div>
                            </td>
                            <td>
                                <h4>100%</h4>
                            </td>
                            </tr>";
            }

            echo "<tr>
                <td colspan='2'>
                <h2 class='index-dado'><b>Integrantes:</b></h2>
                </td>
                </tr>   ";

            $integra = "SELECT * FROM integrantes WHERE IDequipe = '" . $resultado['IDequipe'] . "'";
            $sqli = mysqli_query($conexao, $integra);

            while ($dadosIntegrantes = mysqli_fetch_array($sqli)) {
                if ($dadosIntegrantes['semaforo'] == "Vermelho") {
                    echo "
                                <tr>
                            <td colspan='2'>
                                <h3 class='index-dado'>" . $dadosIntegrantes['nome'] . "</h4>
                            </td>
                        </tr>   
                                <tr>
                                <td  class='tdDado'>
                                    <div class='progressbar' class='dado'>
                                        <div style='border-radius: 10px;height: 20px;width: 20%;background-color: red;'></div>
                                    </div>
                                </td>
                                <td>
                                    <h4>20%</h4>
                                </td>
                                </tr>";
                }
                if ($dadosIntegrantes['semaforo'] == "Laranja") {
                    echo "
                <tr>
                            <td colspan='2'>
                                <h3 class='index-dado'>" . $dadosIntegrantes['nome'] . "</h4>
                            </td>
                        </tr>
                                <tr>
                                <td class='tdDado'>
                                    <div class='progressbar' class='dado'>
                                        <div style='border-radius: 10px;height: 20px;width: 60%;background-color: orange;'></div>
                                    </div>
                                </td>
                                <td>
                                    <h4>60%</h4>
                                </td>
                                </tr>";
                }
                if ($dadosIntegrantes['semaforo'] == "Amarelo") {
                    echo "
                <tr>
                            <td colspan='2'>
                                <h3 class='index-dado'>" . $dadosIntegrantes['nome'] . "</h4>
                            </td>
                        </tr>
                                <tr>
                                <td class='tdDado'>
                                    <div class='progressbar' class='dado'>
                                        <div style='border-radius: 10px;height: 20px;width: 80%;background-color: yellow;'></div>
                                    </div>
                                </td>
                                <td>
                                    <h4>80%</h4>
                                </td>
                                </tr>";
                }
                if ($dadosIntegrantes['semaforo'] == "Verde") {
                    echo "
                <tr>
                            <td colspan='2'>
                                <h3 class='index-dado'>" . $dadosIntegrantes['nome'] . "</h4>
                            </td>
                        </tr>
                                <tr>
                                <td class='tdDado'>
                                    <div class='progressbar' class='dado'>
                                        <div style='border-radius: 10px;height: 20px;width: 100%;background-color: green;'></div>
                                    </div>
                                </td>
                                <td>
                                    <h4>100%</h4>
                                </td>
                                </tr>";
                }
            }
        }
        echo "
                    <tr>
                    </tr>
                </table>
            </div>
        </div>
        <script src='../Menu/JavaScript/java-back.js'></script>
                        <button id='sair' onclick='TelaHome()'><b><</b></button>
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
                </table>
            </div>
        </div>
        <script src='JavaScript/java-back.js'></script>
                        <button id='sair' onclick='TelaHome()'><b><</b></button>
    </section>
    ";
        }
    }
    ?>
</body>

</html>