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

	$conexao = mysqli_connect ("localhost","root","","matriz");

	if ($conexao == false){
		echo "Erro ao conectar ao banco de dados.";
	}

?>

<body>

    <script src="JavaScript/java-CriaEquipe.js"></script>

    <?php
    include __DIR__ . '/../ponte.php';
    $IDequipe = $_SESSION['IDequipe'];
    $IDgestor = $_SESSION['IDcadastro'];
    ?>

    <form action="CriaEquipes.php" method="GET">

        <section id="Menu-funcionarios">

            <?php
            $dados = "SELECT * FROM equipe WHERE IDequipe = '" . $IDequipe . "'";
            $coectado = mysqli_query($conexao,$dados);
            while ($recebendo = mysqli_fetch_array($coectado)){
                echo "<h3 id='Txt'>Nome da Equipe: <input type='text' name='NameEquipe' placeholder='" . $recebendo['nome'] . "'/> <input type='submit' name='SalvaNome' id='SalvaNome' value='Salvar Nome da Equipe' /></h3>";
            }
            ?>

            <h3 id="Txt1">Integrantes <input type="checkbox" onchange="Funcionario()" id="btnSalvaFuncionario" /></h3>

            <h3 id="Txt2">Competências <input type="checkbox" onchange="Competencias()" id="btnSalvarCompetencias" />
            </h3>

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

            <div id="mostraFuncionarios">
                <br>
                <?php
                echo "
                <div id='btn'>
                    <input type='submit' name='SalvarEquipe' value='Salvar Equipe' onclick='Envio()' />
                </div>
                ";
                ?>
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
                    while ($competencias = mysqli_fetch_array($resultadoBuscaCompetencias)){
                        echo "<div class='grid-item'>
                                 <a href='AdicionaComp.php?id=" . $competencias['IDcompetencia'] . "'> " . $competencias['nome'] . " </a>
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
                    <input type="submit" name="vermelho" id="" value="Salvar competencia" onclick="SalvarCompetencias()" />
                </div>
            </div>

        </section>
    </form>

    <section id="popUp">
    </section>

</body>

</html>

<?php

if(isset($_GET["SalvaNome"])){

    $nomeNovoEquipe = $_GET['NameEquipe'];

    $selecionarNome = "UPDATE equipe
                       SET nome = '" . $nomeNovoEquipe . "'
                       WHERE IDequipe = ' " . $IDequipe . "';";
    $resultadoNomeEquipe = mysqli_query($conexao,$selecionarNome);
    if (!$resultadoNomeEquipe){
        Echo "<script> window.alert('" . $nomeNovoEquipe . " Nome da equipe não foi trocado :( ');
                </script>";
    }

}

if(isset($_GET["vermelho"])){

    $nomeComp = $_GET['NomeCompetencia'];

    if(empty($nomeComp)){
        echo "<script> window.alert('Dados incompletos!!');</script>";
        exit();
    }

    $verifica = "SELECT * FROM competencia WHERE nome = ' " . $nomeComp . "'";
    $verificando = mysqli_query($conexao,$verifica);

    while ($ver = mysqli_fetch_array($verificando)){
        echo "
		<script> window.alert('Competencia já foi registrada!');
		window.location.href='CriaEquipes.php';
		</script>";
        exit;
    }

    $criaComp = "INSERT INTO competencia VALUES (DEFAULT, ' " . $nomeComp . " ')";
    $criandoComp = mysqli_query($conexao,$criaComp);

    if (!$criaComp){
        echo "<script> window.alert('Erro ao adicionar competencia!!');</script>";
    }

    $AdicionaComp = "INSERT INTO qualificacaoeqp VALUES (DEFAULT, '" . $nomeComp . "', ' " . $IDequipe . " ', '" . $IDgestor . "' )";
    $verificacao = mysqli_query($conexao,$AdicionaComp);

    if (!$verificacao){
       Echo "<script> window.alert('Erro ao adicionar Competência!!');
                </script>";
    }

}

if(isset($_GET["SalvarFuncionario"])){

    $Nome = $_GET['Nome'];
    $Email = $_GET['Email'];
    $Funcao = $_GET['Cargo'];

    if (empty($Nome) or empty($Email) or empty($Funcao)){
        Echo "<script> window.alert('Erro ao adicionar integrante, dados incompletos!!');
                </script>";
        exit();
    }

    $buscar = "SELECT * FROM cadastro WHERE nome = '" . $Nome . "'and email='". $Email ."'";
    $resultado = mysqli_query($conexao,$buscar);

    while ($registro = mysqli_fetch_array($resultado)){
        $IDcadastro = $registro['IDcadastro'];
    }

    $AdicionaFuncao = "INSERT INTO funcao VALUES (DEFAULT, '" . $Funcao . "', '" . $IDequipe . "' , '" . $IDcadastro . "')";
    $resultadoFuncao = mysqli_query($conexao,$AdicionaFuncao);

    if (!$resultadoFuncao){
        Echo "<script> window.alert('Erro ao adicionar função!!');
                </script>";
    }

    $AdicionaFuncionario = "INSERT INTO integrantes VALUES (DEFAULT, ' " . $Nome . " ' , ' " . $Funcao . " ' , '" . $IDcadastro . "', '" . $IDgestor . "' , '" . $IDequipe . "')";
    $resultadoEquipe = mysqli_query($conexao,$AdicionaFuncionario);

    if (!$resultadoEquipe){
        Echo "<script> window.alert('Erro ao adicionar integrante a equipe!!');
                </script>";
    }

}

if(isset($_GET["SalvarEquipe"])){
    
    Echo "<script> window.location.href = 'ConfirmaSenhaFinal.php';
                </script>";
}

if(isset($_GET["SalvarComp"])){
    $vendoSeFoiMarcado = "SELECT * FROM competencia";
    $sql = mysqli_query($conexao,$vendoSeFoiMarcado);

    while ($dadosComp = mysqli_fetch_array($sql)){
        if(isset($_GET[$dadosComp['nome']])){
            $AdicionaComp = "INSERT INTO qualificacaoeqp VALUES (DEFAULT, '" . $dadosComp['nome'] . "', ' " . $IDequipe . " ', '" . $IDgestor . "' )";
            $verificacao = mysqli_query($conexao,$AdicionaComp);

            if (!$verificacao){
                Echo "<script> window.alert('Erro ao adicionar Competência!!');
                </script>";
            }
        }
    }
}

if(isset($_GET["Salvar"])){
    
    $senha = $_GET['senha'];
    if (empty($senha)){
        Echo "<script> window.alert('Por favor, digite a senha!!');
                </script>";
        exit();
    }

    $flag = false;
    $verificaSenha = "SELECT * FROM cadastro WHERE IDcadastro = '" . $IDgestor . "' and senha = '" . $senha . "'";
    $sql = mysqli_query($conexao,$verificaSenha);
    while ($dados = mysqli_fetch_array($sql)){
        $flag = true;
    }

    if ($flag == false){
        Echo "<script> var confirmacao = confirm('Deseja tentar novamente?');

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
    }

    else {
        Echo "<script> window.alert('Todos os dados da equipe já foram salvos!!');
                    window.location.href = '../Gestor.php';
                </script>";
    }

}

if(isset($_GET["Esqueci"])){
    Echo "<script> 
                window.location.href = '../ponte-senha.php';
            </script>";
}

?>