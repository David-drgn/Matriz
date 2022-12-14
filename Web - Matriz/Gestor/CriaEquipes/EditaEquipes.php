<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CriaEquipes.css">
    <title>Editar Equipes</title>
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

    <form action="EditaEquipes.php" method="POST" enctype="multipart/form-data">

        <section id="Menu-funcionarios">

            <?php
            $dados = "SELECT * FROM equipe WHERE IDequipe = '" . $IDequipe . "'";
            $coectado = mysqli_query($conexao, $dados);
            while ($recebendo = mysqli_fetch_array($coectado)) {
                echo "<h3 id='Txt'>Nome da Equipe: <input type='text' name='NameEquipe' placeholder='" . $recebendo['nome'] . "'/> <input class='inputButton' type='submit' name='SalvaNome' id='SalvaNome' value='Salvar Nome da Equipe' /></h3>";
            }
            ?>
            <div id="txtContainer">
                <label class="label">Integrantes <input type="checkbox" onchange="Funcionario()"
                        id="btnSalvaFuncionario" />
                </label>

                <label class="label">CompetĂȘncias <input type="checkbox" onchange="Competencias()"
                        id="btnSalvarCompetencias" />
                </label>

                <label class="label">Excluir Integrantes <input type="checkbox" onchange="EXFuncionario()"
                        id="btnEXfunc" />
                </label>

                <label class="label">Excluir CompetĂȘncias <input type="checkbox" onchange="EXCompetencias()"
                        id="btnEXquali" />
                </label>

            </div>

            <div class="card" id="AdicionarFuncionario">
                <br>
                <br>
                <div class="flex">

                    <h3 id="TxtEmail">*Email: <input id="Email" name="Email" type="text" /></h3>

                    <h3 id="TxtNome">*Nome funcionĂĄrio: <input id="Nome" name="Nome" type="text" />
                    </h3>

                    <h3 id="TxtCargo">FunĂ§ĂŁo: <input id="Cargo" type="text" name="Cargo" /></h3>

                    <label>
                        <h3 id="txtFoto">Escolher foto: <input type="file" onclick="preview()" name="file" id="foto" />
                        </h3>
                    </label>
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
                <img src='../../Imagens/perfilFoto/" . $buscando['foto'] . "' class='imagens'>
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
                <div id='" . $buscando['semaforo'] . "'></div>
            </td>
            <td>
                <div class='container'>
                    <h4><b><p>" . $buscando['descricao'] . "</p></b></h4>
                    <p><a href='ApagaComp2.php?id=" . $buscando['IDqualificacaoEqp'] . "'>Clique aqui para retirar a qualificaĂ§ĂŁo</a></p>
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

                    <center>

                        <div class="grid-item">
                            <label class="label"><input type="checkbox" onclick="CriaCompetencia()"
                                    value="Outro" />Outra</label>
                        </div>

                    </center>

                    <?php
                    $flagComp = false;
                    $busca = "SELECT * FROM competencia ORDER BY nome";
                    $resultadoBuscaCompetencias = mysqli_query($conexao, $busca);
                    while ($competencias = mysqli_fetch_array($resultadoBuscaCompetencias)) {
                        echo "<center><div class='grid-item'>
                     <a href='AdicionaComp1.php?id=" . $competencias['IDcompetencia'] . "'> " . $competencias['nome'] . " </a>
                </div></center>";
                    }
                    ?>

                </div>

            </div>

            <div id="dadosCompetenciaNova">
                <div class="head"></div>
                <h1>Nome competĂȘncia: <input type="text" name="NomeCompetencia" /></h1>
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

if (isset($_POST["SalvaNome"])) {

    $nomeNovoEquipe = $_POST['NameEquipe'];

    $selecionarNome = "UPDATE equipe
           SET nome = '" . $nomeNovoEquipe . "'
           WHERE IDequipe = ' " . $IDequipe . "';";
    $resultadoNomeEquipe = mysqli_query($conexao, $selecionarNome);
    if (!$resultadoNomeEquipe) {
        echo "<script> window.alert('" . $nomeNovoEquipe . " Nome da equipe nĂŁo foi trocado :( ');
    </script>";
    }
}

if (isset($_POST["vermelho"])) {

    $nomeComp = $_POST['NomeCompetencia'];

    if (empty($nomeComp)) {
        echo "<script> window.alert('Dados incompletos!!');</script>";
        exit();
    }

    $verifica = "SELECT * FROM competencia WHERE nome = ' " . $nomeComp . "'";
    $verificando = mysqli_query($conexao, $verifica);

    while ($ver = mysqli_fetch_array($verificando)) {
        echo "
<script> window.alert('Competencia jĂĄ foi registrada!');
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
        echo "<script> window.alert('Erro ao adicionar competĂȘncia a equipe!!');
    </script>";
    }
}

if (isset($_POST['SalvarFuncionario'])) {

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Funcao = $_POST['Cargo'];
    $Foto = $_FILES["file"];
    $flag2 = false;

    if (empty($Nome) or empty($Email)) {
        echo "<script> window.alert('Erro ao adicionar integrante, dados incompletos!!');
    </script>";
        exit();
    }

    $buscar = "SELECT * FROM cadastro WHERE nome = '" . $Nome . "'and email='" . $Email . "'";
    $resultado = mysqli_query($conexao, $buscar);

    while ($registro = mysqli_fetch_array($resultado)) {
        $IDcadastro = $registro['IDcadastro'];
        $flag2 = true;
    }

    if ($flag2 == false) {
        echo "<script> window.alert('Cadastro nĂŁo encontrado');
    </script>";
        exit();
    }

    $verifica = "SELECT * FROM integrantes WHERE IDcadastro = '" . $IDcadastro . "' and IDequipe = '" . $IDequipe . "'";
    $resultado = mysqli_query($conexao, $verifica);

    while ($registro = mysqli_fetch_array($resultado)) {
        echo "<script> window.alert('FuncionĂĄrio jĂĄ existe!!');
    </script>";
        exit();
    }

    $AdicionaFuncao = "INSERT INTO funcao VALUES (DEFAULT, '" . $Funcao . "', '" . $IDequipe . "' , '" . $IDcadastro . "')";
    $resultadoFuncao = mysqli_query($conexao, $AdicionaFuncao);

    if (!$resultadoFuncao) {
        echo "<script> window.alert('Erro ao adicionar funĂ§ĂŁo!!');
    </script>";
    }

    if (!empty($Foto["name"])) {


        if (!preg_match("/^image\/(jpeg|png|gif|bmp)$/", $Foto["type"])) {
            echo   "Isso nĂŁo Ă© uma imagem.";
            exit;
        }

        $conn = mysqli_connect("localhost", "root", "", "matriz");
        if ($conn == false) {
            echo "Erro ao conectar ao BD";
            exit;
        }
        // Pega extensĂŁo da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $Foto["name"], $ext);
        // Gera um nome Ășnico para a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        // Caminho de onde ficarĂĄ a imagem
        $caminho_imagem = "../../Imagens/perfilFoto/" . $nome_imagem;
        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($Foto["tmp_name"], $caminho_imagem);
    } else {
        echo "<span  class = 'blinking' >Selecione um arquivo para cadastrar</span> <br>";
    }

    $AdicionaFuncionario = "INSERT INTO integrantes VALUES (DEFAULT, ' " . $Nome . " ' , ' " . $Funcao . " ' , '" . $IDcadastro . "', '" . $IDgestor . "' , '" . $IDequipe . "', '" . $nome_imagem . "')";
    $resultadoEquipe = mysqli_query($conexao, $AdicionaFuncionario);

    if (!$resultadoEquipe) {
        echo "<script> window.alert('Erro ao adicionar integrante a equipe!!');
    </script>";
        $flag = true;
    }

    if ($flag == true) {
        echo "
		<script> 
						window.alert('AĂ§ĂŁo nĂŁo sucedida...');
					</script>";
    }
}

if (isset($_POST["SalvarEquipe"])) {

    echo "<script> window.location.href = 'ConfirmaSenhaFinal.php';
    </script>";
}

if (isset($_POST["SalvarComp"])) {
    $vendoSeFoiMarcado = "SELECT * FROM competencia";
    $sql = mysqli_query($conexao, $vendoSeFoiMarcado);

    while ($dadosComp = mysqli_fetch_array($sql)) {
        if (isset($_POST[$dadosComp['nome']])) {
            $AdicionaComp = "INSERT INTO qualificacaoeqp VALUES (DEFAULT, '" . $dadosComp['nome'] . "', ' " . $IDequipe . " ', '" . $IDgestor . "' )";
            $verificacao = mysqli_query($conexao, $AdicionaComp);

            if (!$verificacao) {
                echo "<script> window.alert('Erro ao adicionar CompetĂȘncia!!');
    </script>";
            }
        }
    }
}

if (isset($_POST["Salvar"])) {

    $senha = $_POST['senha'];
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
alert('VocĂȘ selecionou Cancelar!');
window.location.href = 'ExcluirEquipe.php';
}
    </script>";
    } else {
        echo "<script> window.alert('Todos os dados da equipe jĂĄ foram salvos!!');
        window.location.href = '../Gestor.php';
    </script>";
    }
}

if (isset($_POST["Esqueci"])) {
    echo "<script> 
    window.location.href = '../ponte-senha.php';
</script>";
}

?>