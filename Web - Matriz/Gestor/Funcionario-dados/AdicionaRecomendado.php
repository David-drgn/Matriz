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
    session_start();
    ?>
    <form action="Funcionario-dados.php" method="GET">
        <div class="head">
            <div id="dadosCompetenciaNova">
                <?php

                echo "<h1>" . $_SESSION['nomeComp'] . "</h1>";
                ?>
                <h1>Nível recomendado do funcionário:</h1>
                <br>
                <div id="Grid">
                    <div></div>

                    <div>
                        <input type="submit" name="vermelhoCria" id="vermelho" value="0" />
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

                    <div><input type="submit" name="laranjaCria" id="laranja" value="1" />
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

                    <div><input type="submit" name="laranjaAmareloCria" id="laranjaAmarelo" value="2" />
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

                    <div><input type="submit" name="amareloCria" id="amarelo" value="3" />
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

                    <div><input type="submit" name="verdeCria" id="verde" value="4" />
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

<?php
if (isset($_GET["vermelho"])) {
    $_SESSION['nivelAtual'] = 1;
}

if (isset($_GET["laranja"])) {
    $_SESSION['nivelAtual'] = 2;
}

if (isset($_GET["laranjaAmarelo"])) {
    $_SESSION['nivelAtual'] = 3;
}

if (isset($_GET["amarelo"])) {
    $_SESSION['nivelAtual'] = 4;
}

if (isset($_GET["verde"])) {
    $_SESSION['nivelAtual'] = 5;
}
?>