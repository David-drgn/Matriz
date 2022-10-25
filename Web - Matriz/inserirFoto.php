<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guarda fotos</title>
</head>

<body>
    <h1>Cadastro de Dados</h1>
    <form action="inserirFoto.php" method="post" enctype="multipart/form-data">
        Nome:<br />
        <input type="text" name="nome" /><br /><br />
        Email:<br />
        <input type="text" name="email" /><br /><br />
        Foto de exibição:<br />
        <input type="file" name="foto" /><br /><br />
        <input type="submit" name="cadastrar" value="Salvar" />
    </form>
</body>

</html>

<?php

if (isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $foto = $_FILES["foto"];
    $flag = false;


    if (!empty($foto["name"])) {


        if (!preg_match("/^image\/(jpeg|png|gif|bmp)$/", $foto["type"])) {
            echo   "Isso não é uma imagem.";
            exit;
        }

        $conn = mysqli_connect("localhost", "root", "", "matriz");
        if ($conn == false) {
            echo "Erro ao conectar ao BD";
            exit;
        }
        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
        // Gera um nome único para a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        // Caminho de onde ficará a imagem
        $caminho_imagem = "Imagens/perfilFoto/" . $nome_imagem;
        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);

        $buscar = "select * from cadastro where email = '" . $email . "'and nome='" . $nome . "'";
        $resultado = mysqli_query($conn, $buscar);

        while ($registro = mysqli_fetch_array($resultado)) {
            $ID = $registro['IDcadastro'];
            $sql = "update cadastro
                        set foto = '" . $nome_imagem . "'
                        where IDcadastro='" . $ID . "';";
            $resultado = mysqli_query($conn, $sql);

            if ($resultado) {
                echo "Você foi cadastrado com sucesso.<br> ";
                $flag = true;
            } else {
                echo "Erro ao salvar os dados";
            }
        }
    } else {
        echo "<span  class = 'blinking' >Selecione um arquivo para cadastrar</span> <br>";
    }

    if ($flag == false) {
        echo "
		<script> 
						window.alert('Ação não sucedida...');
						
						window.history.back();
					</script>";
    }
}
?>

<a href="index.html" style="color:green"> Ver registros</a>
<p>
    </body>

    </html>