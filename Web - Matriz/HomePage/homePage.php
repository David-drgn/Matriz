<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de conhecimento</title>
    <link rel="stylesheet" href="CSS/CSShomePage.css">
    <link rel="shortcut icon" href="../Imagens/LogoTipo.ico">
</head>

<body>
    <form action="../Gestor/Funcionario-dados/perfilDados.php" method="GET">
        <img src="../Imagens/pc-telaFundo-index.jpg" id="imgFundo">
        <section id="header">
            <center>
                <img id="img" src="../Imagens/LogoTipo.png">
                <h2 id="nome">Matriz de Conhecimento</h2>
            </center>
        </section>

        <section id="body">
            <article id="taskBar">

                <a href="../Funcionarios/Funcionario.php">Perfil</a>
                <?php
                session_start();
                echo "<a href='../Gestor/Funcionario-dados/perfilDados.php?id=" . $_SESSION['IDcadastro'] . "'>Competências</a>";
                if ($_SESSION['cargo'] == "Gestor") {
                    echo "<a href='../Gestor/gestor.php'>Equipes</a>";
                } else {
                    echo "<a style='pointer-events:none; cursor:default; color:gray;'>Equipes</a>";
                }
                ?>
                <a href="../PerguntasFrequentesLogado/BotIndex.php">Perguntas Frequentes</a>
                <a href="confirma.php">Sair</a>

            </article>
            <article id="dica">
                <div></div>
                <div>
                    <center>
                        <h1 id="dicaTexto">Dica:<br>
                            As habilidades interpessoais são tão importantes quanto as habilidades técnicas. Portanto,
                            não se esqueça
                            de<br>
                            desenvolvê-las!</h1>
                    </center>
                </div>
                <div></div>
            </article>
        </section>
    </form>
</body>

</html>