<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix conhecimento</title>
    <style>
    .nivelAtual {
        border-radius: 15px;
        height: 100%;
        background-color: gray;
    }

    #sair {
        font-size: 10px;
        background-color: white;
        color: #a6a6a6;
        width: 40px;
        height: 40px;
        border-radius: 100%;
        position: absolute;
        border: transparent;
        top: 15px;
        left: 15px;
        transition: all 1s;
    }

    #sair:hover {
        background-color: #a6a6a6;
        color: white;
        cursor: pointer;
    }

    #Menu-gestor {
        display: flex;
        flex-direction: column;
        position: absolute;
        left: 0%;
        top: 0%;
        width: 30%;
        height: 100%;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .desc {
        margin-left: 20px;
        font-size: large;
        margin-bottom: 5px;
    }

    #alinhar-centro {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        background-color: #d9d9d9;
        border-top-right-radius: 20px;
    }

    table {
        overflow-y: scroll;
    }

    #imagem-usuario {
        margin-top: 20px;
        border-radius: 100%;
        width: 60%;
        height: 210px;
    }

    #tamanho-dados {
        position: absolute;
        bottom: 0%;
        left: 0%;
        width: 100%;
        height: 50%;
        background-color: #a6a6a6;
        border-radius: 20px;
    }

    #Progresso {
        text-align: center;
        font-size: larger;
        width: 70%;
        margin: auto;
        margin-top: 20px;
        height: 90%;
        background-color: #d9d9d9;
        border-radius: 15px;
    }

    .index-dado {
        margin-left: 30px;
    }

    .progressbar {
        background-color: black;
        border-radius: 13px;
        padding: 3px;
        width: 80%;
        margin-left: 20px;
    }

    #Botao {
        text-align: center;
    }

    button {
        font-size: 20px;
        background-color: #d9d9d9;
        width: 60%;
        border-radius: 10px;
    }

    .cores {
        width: 20%;
    }

    .tdDado {
        width: 80%;
    }

    b {
        font-size: 30px;
    }

    #coresVerde {
        background-color: green;
        height: 60px;
        width: 60px;
        border-radius: 100%;
    }

    #coresAmarelo {
        background-color: yellow;
        height: 60px;
        width: 60px;
        border-radius: 100%;
    }

    #coresLaranja {
        background-color: orange;
        height: 60px;
        width: 60px;
        border-radius: 100%;
    }

    #coresLaranjaVermelho {
        background-color: orangered;
        height: 60px;
        width: 60px;
        border-radius: 100%;
    }

    #coresVermelho {
        background-color: red;
        height: 60px;
        width: 60px;
        border-radius: 100%;
    }
    </style>
</head>

<body>

    <?php

    $conexao = mysqli_connect("localhost", "root", "", "matriz");

    if ($conexao == false) {
        echo "Erro.";
    }

    session_start();
    $Nome = $_SESSION['nome'];
    $Cargo = $_SESSION['cargo'];
    $Foto = $_SESSION['foto'];
    $IDdados = $_SESSION['IDcadastro'];

    echo "
    <section id='Menu-gestor'>
        <div id='alinhar-centro'>
            <center>
                <img src='../../Imagens/perfilFoto/" . $Foto . "' id='imagem-usuario'> <br>
                <b>
                    <p>" . $Nome . "</p>
                </b>
                    <p>" . $Cargo . "</p>
            </center>
            </div>";

    echo "<div id='tamanho-dados'>
            <table id='Progresso'>
            <tr>
                <td class='cores'>
                    <div id='coresVerde'></div>
                </td>
                <td>Satisfatório</td>
            </tr>
            <tr>
                <td class='cores'>
                    <div id='coresAmarelo'></div>
                </td>
                <td>Relevante</td>
            </tr>
            <tr>
                <td class='cores'>
                    <div id='coresLaranja'></div>
                </td>
                <td>Médio</td>
            </tr>
            <tr>
                <td class='cores'>
                    <div id='coresLaranjaVermelho'></div>
                </td>
                <td>Vulgar</td>
            </tr>
            <tr>
                <td class='cores'>
                    <div id='coresVermelho'></div>
                </td>
                <td>Insatisfatório</td>
            </tr>
            </table>
        </div>";

    echo "
                    <tr>
                    </tr>
                </table>
            </div>
        </div>
        <script src='../../Menu/JavaScript/java-back.js'></script>
                        <button id='sair' onclick='TelaGestor()'><b><</b></button>
    </section>
    ";
    ?>
</body>

</html>