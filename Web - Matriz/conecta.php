<?php

session_start();
$conexao = mysqli_connect("localhost", "root", "", "matriz");

if ($conexao == false) {
	echo "Erro.";
} else {
	$email = $_GET['email-usuario'];
	$senha = $_GET['senha-usuario'];
	$flag = false;

	$buscar = "select * from cadastro where email = '" . $email . "'and senha='" . $senha . "'";
	$resultado = mysqli_query($conexao, $buscar);

	while ($registro = mysqli_fetch_array($resultado)) {

		$_SESSION['IDcadastro'] = $registro['IDcadastro'];
		$_SESSION['nome']   	= $registro['nome'];
		$_SESSION['cargo']		= $registro['cargo'];
		$_SESSION['foto']		= $registro['foto'];
		$_SESSION['senha']		= $registro['senha'];
		$_SESSION['email']		= $registro['email'];

		$cargo = $registro['cargo'];

		if ($cargo == "Gestor") {
			echo "<script>
					  window.location.href='TelaEspera/Gestor.php';
					  </script>";
			$flag = true;
		} else {
			echo "<script>
					  window.location.href='TelaEspera/Funcionario.php';
					  </script>";
			$flag = true;
		}
	}

	if ($flag == false) {

		$IDcriado = $_SESSION['Criado'];

		if ($IDcriado == 1) {
			$ID = $_SESSION['ID'];
		}
		$ID = md5(uniqid(""));

		$INSERT = "INSERT INTO testedecaixapreta VALUES (DEFAULT, '0', '" . $ID . "')";
		$sql = mysqli_query($conexao, $INSERT);

		if (!$sql) {
			echo "<script> window.alert('ERRO AO REALIZAR CONTAGEM!!');
					  window.location.href='Gestor/gestor.php';
					  </script>";
		}

		echo "<script> 
						window.alert('Acesso negado...');
						
						window.history.back();
					</script>";
	}
}