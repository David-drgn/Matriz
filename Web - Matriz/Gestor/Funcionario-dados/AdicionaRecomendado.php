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
                <h1>Nível recomendado do funcionário:</h1>
                <br>
                <div id="Grid">
                    <div></div>
                    <input type="submit" name="vermelhoCria" id="vermelho" value="1" />
                    <div></div>
                    <input type="submit" name="laranjaCria" id="laranja" value="2" />
                    <div></div>
                    <input type="submit" name="laranjaAmareloCria" id="laranjaAmarelo" value="3" />
                    <div></div>
                    <input type="submit" name="amareloCria" id="amarelo" value="4" />
                    <div></div>
                    <input type="submit" name="verdeCria" id="verde" value="5" />
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