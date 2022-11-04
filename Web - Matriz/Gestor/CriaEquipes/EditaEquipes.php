<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CriaEquipes.css">
    <title>Criar Equipes</title>
</head>

<?php

$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
    echo "Erro ao conectar ao banco de dados.";
}

?>

<body>

    <script src="JavaScript/java-CriaEquipe.js"></script>

    <?php

    include __DIR__ . '/../../Menu/menuEqp.php';

    $IDequipe = $_SESSION['IDequipe'];
    $IDgestor = $_SESSION['IDcadastro'];
    ?>

    <form action="EditaEquipes.php" method="GET">

        <section id="Menu-funcionarios">

            <?php
            $dados = "SELECT * FROM equipe WHERE IDequipe = '" . $IDequipe . "'";
            $coectado = mysqli_query($conexao, $dados);
            while ($recebendo = mysqli_fetch_array($coectado)) {
                echo "<h3 id='Txt'>Nome da Equipe: <input type='text' name='NameEquipe' placeholder='" . $recebendo['nome'] . "'/> <input class='inputButton' type='submit' name='SalvaNome' id='SalvaNome' value='Salvar Nome da Equipe' /></h3>";
            }
            ?>
            <div id="txtContainer">
                <h3 id="Txt1">Integrantes <input type="checkbox" onchange="Funcionario()" id="btnSalvaFuncionario" />
                </h3>

                <h3 id="Txt2">Competências <input type="checkbox" onchange="Competencias()"
                        id="btnSalvarCompetencias" />
                </h3>

                <h3 id="Txt3">Excluir Integrantes <input type="checkbox" onchange="EXFuncionario()" id="btnEXfunc" />
                </h3>

                <h3 id="Txt4">Excluir Competências <input type="checkbox" onchange="EXCompetencias()" id="btnEXquali" />
                </h3>

            </div>

            <div class="card" id="AdicionarFuncionario">
                <br>
                <br>
                <div class="flex">

                    <h3 id="TxtEmail">*Email: <input id="Email" name="Email" type="text" /></h3>

                    <h3 id="TxtNome">*Nome funcionário: <input id="Nome" name="Nome" type="text" />
                    </h3>

                    <h3 id="TxtCargo">Função: <input id="Cargo" type="text" name="Cargo" /></h3>

                    <h3>Escolher foto: <input type="file" id="foto" /></h3>

                    <br>
                    <br>
                    <br>

                    <input type="submit" name="SalvarFuncionario" id="btnSalvarBD" value="Salvar Funcionario" />

                </div>

                <div class="flex">

                    <img src="../CSS/Imagens/user.png" id="imagem-funcionario">

                </div>

            </div>

            <div class="card2" id="EXfunc">

                <?php
                $funcionarios = "SELECT * FROM integrantes WHERE IDequipe = '" . $IDequipe . "' and gestor = '" . $IDgestor . "' ";
                $sql = mysqli_query($conexao, $funcionarios);
                if (!$sql) {
                    echo ("Erro");
                }
                while ($buscando = mysqli_fetch_array($sql)) {
                    echo "<table class='table-funcionarios'>
        <tr>
            <td class='td-imagem'>
                <img src='../../Imagens/user.png' style='width:100%'>
            </td>
            <td>
                <div class='container'>
                    <h4><b><p>" . $buscando['nome'] . "</p></b></h4>
                    <p>" . $buscando['funcao'] . "</p>
                    <p><a href='ApagaIntegrante2.php?id=" . $buscando['IDintegrantes'] . "'>Clique aqui para retirar o integrante</a></p>
                </div>
            </td>
        </tr>
    </table>";
                }
                ?>

            </div>

            <div class="card2" id="EXquali">

                <?php
                $funcionarios = "SELECT * FROM qualificacaoeqp WHERE IDequipe = '" . $IDequipe . "' and gestor = '" . $IDgestor . "' ";
                $sql = mysqli_query($conexao, $funcionarios);
                if (!$sql) {
                    echo ("Erro");
                }
                while ($buscando = mysqli_fetch_array($sql)) {
                    echo "<table class='table-funcionarios'>
        <tr class='trColor'>
            <td class='td-imagem'>
                <img src='../../Imagens/user.png' style='width:100%'>
            </td>
            <td>
                <div class='container'>
                    <h4><b><p>" . $buscando['descricao'] . "</p></b></h4>
                    <p><a href='ApagaComp2.php?id=" . $buscando['IDqualificacaoEqp'] . "'>Clique aqui para retirar a qualificação</a></p>
                </div>
            </td>
        </tr>
    </table>";
                }
                ?>

            </div>

            <div id=" mostraFuncionarios">
                <br>
                <div id="btn">
                    <a id="excluirEQP" href="Confirmar.php">Excluir equipe</a>
                    <input type="button" class="inputButton" value="Voltar a tela inicial!" onclick="Volta()" />
                </div>
            </div>
            <div class="card" id="adicionarCompetencias">
                <table id="table">
                    <tr>
                        <td colspan="4">
                            <center>
                                <h2>Clique na competencia para adicionar ela a equipe</h2>
                            </center>
                        </td>
                    </tr>
                </table>

                <div class="grid-container">

                    <div class="grid-item">
                        <i id="Outro"><input type="checkbox" onclick="CriaCompetencia()" value="Outro" />Outro</i>
                    </div>

                    <?php
                    $flagComp = false;
                    $busca = "SELECT * FROM competencia ORDER BY nome";
                    $resultadoBuscaCompetencias = mysqli_query($conexao, $busca);
                    while ($competencias = mysqli_fetch_array($resultadoBuscaCompetencias)) {
                        echo "<div class='grid-item'>
                     <a href='AdicionaComp1.php?id=" . $competencias['IDcompetencia'] . "'> " . $competencias['nome'] . " </a>
                </div>";
                    }
                    ?>

                </div>

            </div>

            <div id="dadosCompetenciaNova">
                <div class="head"></div>
                <h1>Nome competência: <input type="text" name="NomeCompetencia" /></h1>
                <br>
                <div>
                    <input class="inputButton" type="submit" name="vermelho" id="" value="Salvar competencia"
                        onclick="SalvarCompetencias()" />
                </div>
            </div>

        </section>
    </form>

    <section id="popUp">
    </section>

</body>

</html>

<?php

if (isset($_GET["SalvaNome"])) {

    $nomeNovoEquipe = $_GET['NameEquipe'];

    $selecionarNome = "UPDATE equipe
           SET nome = '" . $nomeNovoEquipe . "'
           WHERE IDequipe = ' " . $IDequipe . "';";
    $resultadoNomeEquipe = mysqli_query($conexao, $selecionarNome);
    if (!$resultadoNomeEquipe) {
        echo "<script> window.alert('" . $nomeNovoEquipe . " Nome da equipe não foi trocado :( ');
    </script>";
    }
}

if (isset($_GET["vermelho"])) {

    $nomeComp = $_GET['NomeCompetencia'];

    if (empty($nomeComp)) {
        echo "<script> window.alert('Dados incompletos!!');</script>";
        exit();
    }

    $verifica = "SELECT * FROM competencia WHERE nome = ' " . $nomeComp . "'";
    $verificando = mysqli_query($conexao, $verifica);

    while ($ver = mysqli_fetch_array($verificando)) {
        echo "
<script> window.alert('Competencia já foi registrada!');
window.location.href='EditaEquipes.php';
</script>";
        exit;
    }

    $criaComp = "INSERT INTO competencia VALUES (DEFAULT, ' " . $nomeComp . " ')";
    $criandoComp = mysqli_query($conexao, $criaComp);

    if (!$criaComp) {
        echo "<script> window.alert('Erro ao adicionar competencia!!');</script>";
    }

    $AdicionaComp = "INSERT INTO qualificacaoeqp VALUES (DEFAULT, '" . $nomeComp . "', ' " . $IDequipe . " ', '" . $IDgestor . "', 'Vermelho' )";
    $verificacao = mysqli_query($conexao, $AdicionaComp);

    if (!$verificacao) {
        echo "<script> window.alert('Erro ao adicionar competência a equipe!!');
    </script>";
    }
}

if (isset($_GET["SalvarFuncionario"])) {

    $Nome = $_GET['Nome'];
    $Email = $_GET['Email'];
    $Funcao = $_GET['Cargo'];
    $flag = false;

    if (empty($Nome) or empty($Email) or empty($Funcao)) {
        echo "<script> window.alert('Erro ao adicionar integrante, dados incompletos!!');
    </script>";
        exit();
    }

    $buscar = "SELECT * FROM cadastro WHERE nome = '" . $Nome . "'and email='" . $Email . "'";
    $resultado = mysqli_query($conexao, $buscar);

    while ($registro = mysqli_fetch_array($resultado)) {
        $IDcadastro = $registro['IDcadastro'];
        $flag = true;
    }

    if ($flag == false) {
        echo "<script> window.alert('Cadastro não encontrado');
    </script>";
        exit();
    }

    $verifica = "SELECT * FROM integrantes WHERE IDcadastro = '" . $IDcadastro . "' and IDequipe = '" . $IDequipe . "'";
    $resultado = mysqli_query($conexao, $verifica);

    while ($registro = mysqli_fetch_array($resultado)) {
        echo "<script> window.alert('Funcionário já existe!!');
    </script>";
        exit();
    }

    $AdicionaFuncao = "INSERT INTO funcao VALUES (DEFAULT, '" . $Funcao . "', '" . $IDequipe . "' , '" . $IDcadastro . "')";
    $resultadoFuncao = mysqli_query($conexao, $AdicionaFuncao);

    if (!$resultadoFuncao) {
        echo "<script> window.alert('Erro ao adicionar função!!');
    </script>";
    }

    $AdicionaFuncionario = "INSERT INTO integrantes VALUES (DEFAULT, ' " . $Nome . " ' , ' " . $Funcao . " ' , '" . $IDcadastro . "', '" . $IDgestor . "' , '" . $IDequipe . "')";
    $resultadoEquipe = mysqli_query($conexao, $AdicionaFuncionario);

    if (!$resultadoEquipe) {
        echo "<script> window.alert('Erro ao adicionar integrante a equipe!!');
    </script>";
    }
}

if (isset($_GET["SalvarEquipe"])) {

    echo "<script> window.location.href = 'ConfirmaSenhaFinal.php';
    </script>";
}

if (isset($_GET["SalvarComp"])) {
    $vendoSeFoiMarcado = "SELECT * FROM competencia";
    $sql = mysqli_query($conexao, $vendoSeFoiMarcado);

    while ($dadosComp = mysqli_fetch_array($sql)) {
        if (isset($_GET[$dadosComp['nome']])) {
            $AdicionaComp = "INSERT INTO qualificacaoeqp VALUES (DEFAULT, '" . $dadosComp['nome'] . "', ' " . $IDequipe . " ', '" . $IDgestor . "' )";
            $verificacao = mysqli_query($conexao, $AdicionaComp);

            if (!$verificacao) {
                echo "<script> window.alert('Erro ao adicionar Competência!!');
    </script>";
            }
        }
    }
}

if (isset($_GET["Salvar"])) {

    $senha = $_GET['senha'];
    if (empty($senha)) {
        echo "<script> window.alert('Por favor, digite a senha!!');
    </script>";
        exit();
    }

    $flag = false;
    $verificaSenha = "SELECT * FROM cadastro WHERE IDcadastro = '" . $IDgestor . "' and senha = '" . $senha . "'";
    $sql = mysqli_query($conexao, $verificaSenha);
    while ($dados = mysqli_fetch_array($sql)) {
        $flag = true;
    }

    if ($flag == false) {
        echo "<script> var confirmacao = confirm('Deseja tentar novamente?');

if (confirmacao == true) {
var confirma = confirm('Deseja editar algo na equipe?');
if (confirma == true){}
else {window.location.href = 'ConfirmaSenha.php';}
}

else {
alert('Você selecionou Cancelar!');
window.location.href = 'ExcluirEquipe.php';
}
    </script>";
    } else {
        echo "<script> window.alert('Todos os dados da equipe já foram salvos!!');
        window.location.href = '../Gestor.php';
    </script>";
    }
}

if (isset($_GET["Esqueci"])) {
    echo "<script> 
    window.location.href = '../ponte-senha.php';
</script>";
}

?>