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

    .head {
        width: 100%;
        height: 30px;
        background-color: darkgray;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <form action="CriaEquipes.php" method="GET">
        <div id="dadosCompetenciaNova">
            <div class="head"></div>
            <h1>Confirmar senha:</h1>
            <input type="text" name="senha" id="senha" size="50" />
            <br>
            <div>
                <input type="submit" name="Salvar" id="Salvar" value="Confirmar senha" />
                <input type="submit" name="Esqueci" id="Esqueci" value="Esqueci minha senha" />
            </div>
        </div>
    </form>

</body>

</html>