<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css-dados.css">
    <title>Editando dados</title>

</head>

<body>

    <?php

    include __DIR__ . '/../../conectaBD.php';

    $IDqFunc = $_GET['id'];

    session_start();
    $_SESSION['IDqFunc'] = $IDqFunc;


    ?>
    <form action="Funcionario-dados.php" method="GET">
        <div class="head">
            <div id="dadosCompetenciaNova">
                <?php

                $busca = "SELECT * FROM qualificacaofunc WHERE IDqualificacaoFunc = '" . $_SESSION['IDqFunc'] . "'";
                $sql = mysqli_query($conexao, $busca);

                while ($resultado = mysqli_fetch_array($sql)) {
                    $qualificacao = $resultado['descricao'];
                }

                echo "<h1>" . $qualificacao . "</h1>";
                ?>
                <h1>Nível atual do funcionário:</h1>
                <br>
                <div id="Grid">
                    <div></div>

                    <div>
                        <input type="submit" name="vermelhoAtual" id="vermelho" value="0" />
                        <span id="zero">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Não realiza a <br> atividade</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>

                    <div><input type="submit" name="laranjaAtual" id="laranja" value="1" />
                        <span id="um">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Não realiza a <br> atividade</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>

                    <div><input type="submit" name="laranjaAmareloAtual" id="laranjaAmarelo" value="2" />
                        <span id="dois">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Não realiza a <br> atividade</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>

                    <div><input type="submit" name="amareloAtual" id="amarelo" value="3" />
                        <span id="tres">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Não realiza a <br> atividade</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>

                    <div><input type="submit" name="verdeAtual" id="verde" value="4" />
                        <span id="quatro">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Não realiza a <br> atividade</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>
                </div>

            </div>
        </div>
    </form>

</body>

</html>