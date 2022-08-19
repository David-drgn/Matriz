<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix conhecimento</title>
    <style>
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

    #alinhar-centro {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0%;
        left: 0%;
        background-color: #d9d9d9;
        border-top-right-radius: 20px;
    }

    table {
        overflow-y: scroll;
    }

    #imagem-usuario {
        width: 60%;
        height: 60%;
    }

    #tamanho-dados {
        position: absolute;
        top: 50%;
        left: 0%;
        width: 100%;
        height: 100%;
    }

    #Progresso {
        position: absolute;
        bottom: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: #a6a6a6;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .index-dado {
        margin-left: 60px;
    }

    .progressbar {
        background-color: black;
        border-radius: 13px;
        padding: 3px;
        width: 50%;
        margin-left: 70px;
    }

    #dado>div {
        background-color: #6ce5e8;
        width: 40%;
        height: 20px;
        border-radius: 10px;
    }

    #dado2>div {
        background-color: #6ce5e8;
        width: 52%;
        height: 20px;
        border-radius: 10px;
    }

    #dado3>div {
        background-color: #6ce5e8;
        width: 80%;
        height: 20px;
        border-radius: 10px;
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

    b {
        font-size: 30px;
    }
    </style>
</head>

<body>

    <?php

    session_start();
    $Nome = $_SESSION['nome'];
    $Cargo = $_SESSION['cargo'];
    $Foto = $_SESSION['foto'];

    echo "
    <section id='Menu-gestor'>
        <div id='alinhar-centro'>
            <center>
                <img src='Foto/".$Foto."' id='imagem-usuario'> <br>
                <b>
                    <p>" . $Nome . "</p>
                </b>
                    <p>" . $Cargo . "</p>
            </center>
            <div id='tamanho-dados'>
                <table id='Progresso'>
                    <tr>
                        <td colspan='2'>
                            <h4 class='index-dado'>Dado</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class='progressbar' id='dado'>
                                <div></div>
                            </div>
                        </td>
                        <td>
                            <h4>40%</h4>
                        </td>
                    </tr>

                    <tr>
                        <td colspan='2'>
                            <h4 class='index-dado'>Dado</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class='progressbar' id='dado2'>
                                <div></div>
                            </div>
                        </td>
                        <td>
                            <h4>53%</h4>
                        </td>
                    </tr>

                    <tr>
                        <td colspan='2'>
                            <h4 class='index-dado'>Dado</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class='progressbar' id='dado3'>
                                <div></div>
                            </div>
                        </td>
                        <td>
                            <h4>80%</h4>
                        </td>
                    </tr>
                    <tr>
                        <td id='Botao' colspan='2'>
                            <script src='JavaScript/java-back.js'></script>
                            <button onclick='BackHistory()''>Sair</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    "
    ?>
</body>

</html>