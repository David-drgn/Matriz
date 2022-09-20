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
        width: 600px;
        background-color: lightgray;
        border-radius: 15px;
        z-index: 1;
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
    }
    </style>
</head>

<body>

    <?php
    session_start();
    $ID = $_GET["id"];
    $_SESSION['IDcomp'] = $ID;
    ?>
    <form action="Funcionario-dados.php" method="GET">
        <div id="dadosCompetenciaNova">
            <div class="head"></div>
            <h1>Nível recomendado para o funcionário:</h1>
            <br>
            <div id="Grid">
                <input type="date" name="date" id="data" value="" />
                <br>
                <input type="submit" value="Salvar" name="data" />
            </div>
        </div>
    </form>

</body>

</html>