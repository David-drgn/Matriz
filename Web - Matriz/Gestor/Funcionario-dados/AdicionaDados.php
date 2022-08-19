<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Senha</title>

    <style>
    body {
        background-color: rgba(0, 0, 0, 0.582);
    }

    #dadosCompetenciaNova {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: absolute;
        top: 30%;
        left: 28%;
        height: 200px;
        width: 500px;
        background-color: lightgray;
        border-radius: 15px;
        z-index: 1;
    }

    #vermelho {
        background-color: red;
    }

    #amarelo {
        background-color: yellow;
    }

    #verde {
        background-color: green;
    }

    #laranja{
        background-color: orange;
    }

    #laranjaAmarelo{
        background-color: greenyellow;
    }

    .head {
        width: 100%;
        height: 30px;
        background-color: darkgray;
        border-radius: 5px;
    }

    #Grid {
        width: 90%;
        display: grid;
        grid-template-columns: auto auto auto auto auto;
    }
    </style>
</head>

<body>

<?php

$desc = $_GET['desc'];

session_start();
$_SESSION['nomeComp'] = $desc;

?>
    <form action="AdicionaRecomendado.php" method="GET">
        <div id="dadosCompetenciaNova">
            <div class="head"></div>
            <h1>Nível atual do funcionário:</h1>
            <br>
            <div id="Grid">
                <input type="submit" name="vermelho" id="vermelho" value="" />
                <input type="submit" name="laranja" id="laranja" value="" />
                <input type="submit" name="laranjaAmarelo" id="laranjaAmarelo" value="" />
                <input type="submit" name="amarelo" id="amarelo" value="" />
                <input type="submit" name="verde" id="verde" value="" />
            </div>
        </div>
    </form>

</body>

</html>