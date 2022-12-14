<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Conhecimento</title>
    <link rel="stylesheet" href="CSS/Inicial.css">
    <link rel="shortcut icon" href="Imagens/LogoTipo.ico">
</head>

<body>
    <script src="JavaScript/java-contagem.js"></script>
    <form action="conecta.php" method="GET">
        <header>
            <table id="cont-header">
                <tr id="alinhar">
                    <td class="menu">
                        <a class="menu-btn" id="loc-bar"><img src="Imagens/Cardapio.png" class="tamanho-card"></a>
                        <div class="menu-cnt">
                            <a href="#" class="links">Compartilhar</a>
                            <a href="SobreNos/SobreNos.php" class="links">Sobre nós</a>
                            <a href="PerguntasFrequentes/BotIndex.php" class="links">Perguntas frequentes</a>
                        </div>
                    </td>
                    <td id="imagem-logo">
                        <img src="Imagens/LogoTipo.png" id="log">
                    </td>
                    <td id="texto-tabela">
                        <b id="nome-app">Matriz de conhecimento</b>
                    </td>
                </tr>
            </table>
        </header>
        <section>
            <div id="back">
                <img src="Imagens/pc-telaFundo-index.jpg" id="inicial">
            </div>
            <div id="back-android">
                <img src="Imagens/android-telaFundo-index.jpg" id="inicial-android">
            </div>
            <table id="loc">
                <tr class="alinhar">
                    <td class="alinhar">
                        <h1>
                            <b class="log">Acesso</b>
                        </h1>
                        <b class="tex">Email:</b> <br> <br>
                        <input type="email" class="txt" id="email-usuario" name="email-usuario" /> <br>
                        <b class="tex">Senha:</b> <br> <br>
                        <input type="password" class="txt" id="senha-usuario" name="senha-usuario" /> <br> <br>
                        <input type="submit" value="Entrar" class="Botao" /> <br> <br>
                        <p class="senha"><a href="EsqueciSenha/Requerimento.php" id="senha">Esqueceu sua senha?</a></p>
                    </td>
                </tr>
            </table>
        </section>
        <div id="complemento"></div>
    </form>
    <script src="JavaScript/java-value.js"></script>

</body>

</html>