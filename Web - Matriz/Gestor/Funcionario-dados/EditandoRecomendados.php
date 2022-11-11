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
        background-color: darkgrey;
        border-radius: 10px;
        border: transparent;
        padding: 5px;
    }

    #amarelo {
        background-color: darkgrey;
        border: transparent;
        border-radius: 10px;
    }

    #verde {
        background-color: darkgrey;
        border: transparent;
        border-radius: 10px;
    }

    #laranja {
        background-color: darkgrey;
        border: transparent;
        border-radius: 10px;
    }

    #laranjaAmarelo {
        background-color: darkgrey;
        border: transparent;
        border-radius: 10px;
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

    #verde:hover,
    #amarelo:hover,
    #laranjaAmarelo:hover,
    #vermelho:hover,
    #laranja:hover,
    #um {
        transition: all 1s;
        background-color: #0b25458c;
        cursor: pointer;
    }

    #Grid {
        width: 90%;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto;
        border-radius: 10px;
    }
    </style>
</head>

<body>

    <form action="Funcionario-dados.php" method="GET">
        <div class="head">
            <div id="dadosCompetenciaNova">
                <h1>Nível recomendado do funcionário:</h1>
                <br>
                <div id="Grid">
                    <div></div>
                    <input type="submit" name="vermelhoRecomendado" id="vermelho" value="1" />
                    <div></div>
                    <input type="submit" name="laranjaRecomendado" id="laranja" value="2" />
                    <div></div>
                    <input type="submit" name="laranjaAmareloRecomendado" id="laranjaAmarelo" value="3" />
                    <div></div>
                    <input type="submit" name="amareloRecomendado" id="amarelo" value="4" />
                    <div></div>
                    <input type="submit" name="verdeRecomendado" id="verde" value="5" />
                    <div></div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>