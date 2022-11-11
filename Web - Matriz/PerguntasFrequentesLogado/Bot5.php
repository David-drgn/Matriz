<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CSS-bot.css">
    <link rel="shortcut icon" href="../Imagens/LogoTipo.ico">
    <title>Perguntas frequentes!!</title>
</head>

<body>
    <?php
    include __DIR__ . '/../Menu/menu.php';
    ?>

    <form action="BotController.php" method="GET">
        <section id="bot">
            <div id="complete"></div>
            <article class="head">
                <h1 align="left" id="oliver">Wagner</h1>
                <h1 align="right" id="duvidas">Dúvidas Comuns</h1>
            </article>

            <table class="table">

                <thead>
                    <tr>
                        <td></td>
                    </tr>
                </thead>

                <tbody id="tbody">

                    <tr class="body">
                        <td colspan="2" class="mensagem">
                            <img src="../Imagens/Oliver.png">
                            <div class="card" id="respostas">
                                <br>
                                <input class="button" type="submit" name="1"
                                    value="1 - Como alterar minha senha?" /><br>
                                <input class="button" type="submit" name="2"
                                    value="2 - Minhas atualizações de treinamento não foram realizadas" /><br>
                                <input class="button" type="submit" name="3"
                                    value="3 - Não concordo com minha matriz atual" /><br>
                                <input class="button" type="submit" name="4"
                                    value="4 - Como visualizar o nível recomendado de cada área? " /><br>
                                <input class="button" type="submit" name="5" value="5 - Outro" /><br>
                                <input class="button" type="submit" name="sair" value="Deseja sair?" /><br>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="right" class="resposta">

                            <div class="card-pessoa">
                                <h2 id="nro">5</h2>
                            </div>
                            <img id="usuario" src="../Imagens/user.png">
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>

                    <tr class="body">
                        <td colspan="2" class="mensagem">
                            <img src="../Imagens/Oliver.png">
                            <div class="card">
                                <h2>Ok, a pergunta será outra...</h2>
                                <h2>Por favor mande sua pergunta para nossa ouvidoria:
                                    volks.matrizouvidoria@volks.com.br</h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>

                    <tr class="body">
                        <td colspan="2" class="mensagem">
                            <img src="../Imagens/Oliver.png">
                            <div class="card">
                                <h2>Me conta: do que mais você precisa hoje? É só escolher o assunto e responder um
                                    número. </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </form>

</body>

</html>