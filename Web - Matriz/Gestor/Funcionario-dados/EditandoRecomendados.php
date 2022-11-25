<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Nível Recomendado</title>
    <link rel="stylesheet" href="CSS/css-dados.css">
    </style>
</head>

<body>

    <form action="Funcionario-dados.php" method="GET">
        <div class="head">
            <div id="dadosCompetenciaNova">
                <?php

                include __DIR__ . '/../../conectaBD.php';

                session_start();

                $busca = "SELECT * FROM qualificacaofunc WHERE IDqualificacaoFunc = '" . $_SESSION['IDqFunc'] . "'";
                $sql = mysqli_query($conexao, $busca);

                while ($resultado = mysqli_fetch_array($sql)) {
                    $qualificacao = $resultado['descricao'];
                }

                echo "<h1>" . $qualificacao . "</h1>";
                ?>
                <h1>Nível recomendado do funcionário:</h1>
                <br>
                <div id="Grid">
                    <div></div>

                    <div>
                        <input type="submit" name="vermelhoRecomendado" id="vermelho" value="0" />
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

                    <div><input type="submit" name="laranjaRecomendado" id="laranja" value="1" />
                        <span id="um">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Em <br> aprendizagem</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>

                    <div><input type="submit" name="laranjaAmareloRecomendado" id="laranjaAmarelo" value="2" />
                        <span id="dois">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Executa a atividade sem auxílio</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>

                    <div><input type="submit" name="amareloRecomendado" id="amarelo" value="3" />
                        <span id="tres">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Consegue ensinar <br> outras pessoas</b>
                                    <br>
                                </div>

                            </div>
                        </span>
                    </div>

                    <div></div>

                    <div><input type="submit" name="verdeRecomendado" id="verde" value="4" />
                        <span id="quatro">
                            <div class="arredores">

                                <div class="info">
                                    <br>
                                    <b>Consegue propor <br> melhorias</b>
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