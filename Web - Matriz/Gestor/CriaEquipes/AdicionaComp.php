<?php

$IDcomp = $_GET['id'];

session_start();
$IDequipe = $_SESSION['IDequipe'];
$IDgestor = $_SESSION['IDcadastro'];

$conexao = mysqli_connect ("localhost","root","","matriz");

	if ($conexao == false){
		echo "Erro ao conectar ao banco de dados.";
	}

$dadosComp = "SELECT * FROM competencia WHERE IDcompetencia = '" . $IDcomp . "'";
$verificando = mysqli_query($conexao,$dadosComp);

while ($dados = mysqli_fetch_array($verificando)){
    $NomeComp = $dados['nome'];
}

$verificaAdicionados = "SELECT * FROM qualificacaoEqp WHERE descricao = '" . $NomeComp . "' and IDequipe = '" . $IDequipe .  "' ";
$verificando = mysqli_query($conexao,$verificaAdicionados);

while ($dados = mysqli_fetch_array($verificando)){
    Echo "<script> window.alert('Competencia já foi adicionada!!');
                    window.location.href = 'CriaEquipes.php';
            </script>";
}

$adicionandoComp = "INSERT INTO qualificacaoEqp VALUES (DEFAULT, '" . $NomeComp . "', '" . $IDequipe . "', '" . $IDgestor . "', 'Vermelho' )";
$verificando = mysqli_query($conexao,$adicionandoComp);

if (!$verificando){
    Echo "<script> window.alert('Erro ao adicionar competencia!!');
                    window.location.href = 'CriaEquipes.php';
            </script>";
}
else {
    Echo "<script>
                    window.location.href = 'CriaEquipes.php';
            </script>";
}