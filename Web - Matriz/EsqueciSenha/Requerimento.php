<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Conhecimento</title>
    <link rel="stylesheet" href="CSS/esqueci.css">
</head>

<body>
    <script src="JavaScript/java-contagem.js"></script>
    <form action="mudaSenha.php" method="GET">
        <header>
            <table id="cont-header">
                <tr id="alinhar">
                    <td class="menu">
                    </td>
                    <td id="imagem-logo">
                        <img src="../Imagens/LogoTipo.png" id="log">
                    </td>
                    <td id="texto-tabela">
                        <b id="nome-app">Matriz de conhecimento</b>
                    </td>
                </tr>
            </table>
        </header>
        <section>
            <div id="back">
                <img src="../Imagens/pc-telaFundo-index.jpg" id="inicial">
            </div>
            <div id="back-android">
                <img src="../Imagens/android-telaFundo-index.jpg" id="inicial-android">
            </div>
            <div id="loc">
                <h3>
                    <b class="log">Redefinir sua senha</b>
                </h3>
                <b class="tex">Email:</b>
                <input type="email" class="txt" id="email-usuario" name="email-usuario"
                    placeholder="Insira seu e-mail" />
                <p>Será enviado um link de recuperação de senha para seu e-mail.</p>
                <input type="submit" id="enviar" size="80" value="Enviar"/>
            </div>
        </section>
    </form>
    <script src="JavaScript/java-value.js"></script>

</body>

</html>