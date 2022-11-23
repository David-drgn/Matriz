<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Senha</title>
    <link rel="stylesheet" href="CSS/css-dados.css">
    </style>
</head>

<body>

    <?php

    $desc = $_GET['desc'];

    session_start();
    $_SESSION['nomeComp'] = $desc;

    ?>
    <form action="AdicionaRecomendado.php" method="GET">
        <div class="head">
            <div id="dadosCompetenciaNova">
                <?php

                echo "<h1>" . $_SESSION['nomeComp'] . "</h1>";
                ?>
                <h1>Nível atual do funcionário:</h1>
                <br>
                <div id="Grid">
                    <div></div>

                    <div>
                        <input type="submit" name="vermelho" id="vermelho" value="0" />
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

                    <div><input type="submit" name="laranja" id="laranja" value="1" />
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

                    <div><input type="submit" name="laranjaAmarelo" id="laranjaAmarelo" value="2" />
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

                    <div><input type="submit" name="amarelo" id="amarelo" value="3" />
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

                    <div><input type="submit" name="verde" id="verde" value="4" />
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