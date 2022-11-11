<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Senha</title>

    <style>
    body {
        background-color: #0B2545;
    }

    #dadosCompetenciaNova {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 160px;
        width: 505px;
        background-color: lightgray;
        border-radius: 15px;
        margin-top: 5px;
        margin-left: 5px;
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

    .head {
        display: grid;
        height: 170px;
        width: 515px;
        background-color: darkgrey;
        border-radius: 15px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 33vh;
    }

    input[type="submit"] {
        background-color: #0B2545;
        border-radius: 15px;
        color: lightgray;
    }
    </style>
</head>

<body>
    <?php
    session_start();
    $id = $_SESSION['IDequipe'];
    if ($id == "") {
        $_SESSION['IDequipe'] = $_GET['id'];
    } else {
    }

    ?>

    <form action="Confere.php" method="GET">
        <div class="head">
            <div id="dadosCompetenciaNova">
                <h1>Confirmar senha:</h1>
                <input type="password" name="senha" id="senha" size="50" />
                <br>
                <div>
                    <input type="submit" name="Salvar" id="Salvar" value="Confirmar senha" />
                    <input type="submit" name="Esqueci" id="Esqueci" value="Esqueci minha senha" />
                </div>
            </div>
        </div>
    </form>

</body>

</html>