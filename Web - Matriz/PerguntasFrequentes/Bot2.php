<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CSS-bot.css">
    <title>Olá, Oliver!!</title>
</head>

<body>
    <form action="BotController.php" method="GET">
    <table>
        <thead>
            <tr>
                <td class="oliver">
                    <h1 align="left">Oliver</h1> 
                </td>    
                <td>
                    <h1 align="right">Dúvidas Comuns</h1>
                </td>
            </tr>
        </thead>

        <tbody id="tbody">

            <tr class="perguntas">
                <td colspan="2" align="right">
                    <img>
                    <div class="card-pessoa">
                        <h2>2</h2>
                    </div>
                </td>
            </tr>

            <tr class="body">
                <td colspan="2">
                    <img>
                    <div class="card">
                        <h2>Que pena! Mas não fique triste, seu treimanto está em análise. Existe um prazo de 1 semana para a atualização,  caso contrário, entre em contato com a ouvidoria da empresa: volks.matrizouvidoria@volks.com.br</h2>
                    </div>
                </td>
            </tr>

            <tr class="body">
                <td colspan="2">
                    <img>
                    <div class="card">
                        <h2>Me conta: do que mais você precisa hoje? É só escolher o assunto e responder um número. </h2>
                    </div>
                </td>
            </tr>

            <tr class="body">
                <td colspan="2">
                    <img>
                    <div class="card" id="respostas">
                        <br>
                        <input class="button" type="submit" name="1" value="1 - Como alterar minha senha?"/><br>
                        <input class="button" type="submit" name="2" value="2 - Minhas atualizações de treinamento não foram realizadas"/><br>
                        <input class="button" type="submit" name="3" value="3 - Não concordo com minha matriz atual"/><br>
                        <input class="button" type="submit" name="4" value="4 - Como visualizar o nível recomendado de cada área? "/><br>
                        <input class="button" type="submit" name="5" value="5 - Outro"/><br>
                    </div>
                </td>
            </tr>

        </tbody>

        <tfoot>
            <tr class="responder" align="center">
                <td colspan="2"><input type="number" name="resposta" id="resposta" max="5" min="1" /> <input type="submit" value="Enviar" name="enviar"/></td>
            </tr>
        </tfoot>

    </table>
</form>
</body>

</html>