<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix conhecimento</title>
    <link rel="stylesheet" type="text/css" href="CSS/CSS-funcionario-dados.css">
</head>

<body>

    <?php

$conexao = mysqli_connect ("localhost","root","","matriz");

if ($conexao == false){
    echo "Erro.";
}
session_start();

    $IDfuncionario = $_SESSION['IDfuncionario'];
    $IDequipe = $_SESSION['IDequipe'];
    $IDgestor = $_SESSION['IDcadastro'];

$dadosFuncionario = "SELECT * FROM cadastro WHERE IDcadastro = ' " . $IDfuncionario . " '";
$buscando = mysqli_query($conexao,$dadosFuncionario);

if(!$buscando){
    echo"Erro";
}

else{
    while($resultado = mysqli_fetch_array($buscando)){
        
        $_SESSION['IDfuncionario'] = $resultado['IDcadastro'];
        $_SESSION['IDequipe'] = $IDequipe;

        echo "<section id='Menu-funcionario'>
        <div id='alinhar-centro'>
            <center>
                <img src='CSS/Imagens/usuario.png' id='imagem-usuario'> <br>
                <b>
                    <p>" . $resultado['nome'] . "</p>
                </b>
                <p> " . $resultado['cargo'] . " </p>
            </center>
        </div>
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
                    </td
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
                        <button id='Botao-input'><a href='../gestor.php'>Voltar</a></button>
                    </td>
                </tr>
            </table>
        </div>
    </section>";
    }
}

?>

    <section id="Menu-funcionarios">

        <form action="EditandoDados.php" method="GET">
        <table id="item-tabela">
                <?php

$Sql = "SELECT * FROM qualificacaofunc WHERE IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
$Selecionando = mysqli_query($conexao,$Sql);

while ($qualidades = mysqli_fetch_array($Selecionando)){

    while ($qualidades = mysqli_fetch_array($Selecionando)){

        echo "<tr><td class='tamanho' rowspan='2'><a href='EditandoDados.php?id=" . $qualidades['IDqualificacaoFunc'] . "'> " . $qualidades['descricao'] . " </a></td>";
        if($qualidades['nivelRecomendado'] == 5){
            echo "<td colspan='5' class='tdTama'><td>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<tr><td colspan='5'><div class='nivelAtual' style='width: 20%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<tr><td colspan='5'><div class='nivelAtual' style='width: 40%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<tr><td colspan='5'><div class='nivelAtual' style='width: 60%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<tr><td colspan='5'><div class='nivelAtual' style='width: 80%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<tr><td colspan='5'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 4){
            echo "<td colspan='4' class='tdTama'><td>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 25%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 50%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 75%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 125%'></div><td><tr>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 3){
            echo "<td colspan='3' class='tdTama'><td>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<tr><td colspan='3'><div class='nivelAtual' style='width: 33.3%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<tr><td colspan='3'><div class='nivelAtual' style='width: 66.6%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<tr><td colspan='3'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<tr><td colspan='3'><div class='nivelAtual' style='width: 133.3%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<tr><td colspan='3'><div class='nivelAtual' style='width: 166.6%'></div><td><tr>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 2){
            echo "<td colspan='2' class='tdTama'><td>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<tr><td colspan='2'><div class='nivelAtual' style='width: 50%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<tr><td colspan='2'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<tr><td colspan='2'><div class='nivelAtual' style='width: 150%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<tr><td colspan='2'><div class='nivelAtual' style='width: 200%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<tr><td colspan='2'><div class='nivelAtual' style='width: 250%'></div><td><tr>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 1){
            echo "<td colspan='1' class='tdTama'><td>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 100%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 200%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 300%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 400%'></div><td><tr>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<tr><td colspan='4'><div class='nivelAtual' style='width: 500%'></div><td><tr>";
            }
        }
    
        echo "</td></tr><tr><td></td></tr>";

        /*
        echo "<tr><td class='tamanho'><a href='EditandoDados.php?id=" . $qualidades['IDqualificacaoFunc'] . "'> " . $qualidades['descricao'] . " </a></td>";
        if($qualidades['nivelRecomendado'] == 5){
            echo "<td colspan='5' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width: 20%'></div>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width: 40%'></div>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width: 60%'></div>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width: 80%'></div>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width: 100%'></div>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 4){
            echo "<td colspan='4' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:25%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:50%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:75%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='1'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width125%'></div></div></td><td colspan='1'>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 3){
            echo "<td colspan='3' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:33.3%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:66.6%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:133.3%'></div></div></td><td colspan='2'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width:166.6%'></div></div></td><td colspan='2'>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 2){
            echo "<td colspan='2' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:50%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:150%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:200%'></div></div></td><td colspan='3'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width:250%'></div></div></td><td colspan='3'>";
            }
        }
    
        if($qualidades['nivelRecomendado'] == 1){
            echo "<td colspan='1' class='tdTama'>";
            if ($qualidades['nivelAtual'] == 1){
                echo "<div class='nivelAtual' style='width:100%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 2){
                echo "<div class='nivelAtual' style='width:200%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 3){
                echo "<div class='nivelAtual' style='width:300%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 4){
                echo "<div class='nivelAtual' style='width:400%'></div></div></td><td colspan='4'>";
            }
            if ($qualidades['nivelAtual'] == 5){
                echo "<div class='nivelAtual' style='width:500%'></div></div></td><td colspan='4'>";
            }
        }
    
        echo "</td></tr>";*/ } 
    }


?>

                <tr>
                    <td></td>
                    <td style="width: 16%; height:30px;">0</td>
                    <td style="width: 16%; height:30px;">1</td>
                    <td style="width: 16%; height:30px;">2</td>
                    <td style="width: 16%; height:30px;">3</td>
                    <td style="width: 16%; height:30px;">4</td>
                </tr>
            </table>

            <br>
            <br>
            <center>
                <h2>Para Adicionar novos dados:</h2>
            </center>

            <div id="gridContainer">

                <?php

$buscandoComp = "SELECT * from qualificacaoEqp WHERE IDequipe = '" . $IDequipe . "' ";
$Verifica = mysqli_query($conexao,$buscandoComp);

while ($resultado = mysqli_fetch_array($Verifica)){
    echo "<a href='AdicionaDados.php?desc=" . $resultado['descricao'] . "'>" . $resultado['descricao'] . "</a>";
}

?>
            </div>

        </form>
    </section>
</body>

</html>

<?php

    if(isset($_GET["vermelhoAtual"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelAtual ='1' 
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
        else {
            echo "<script>
            var confirmacao = confirm('Deseja atualizar o nivél recomendado também?');

            if (confirmacao == true) {
                window.location.href = 'EditandoRecomendados.php';
            }

            else {
               alert('Ok, nível atual foi atualizado!!');
            }
            </script>";
        }
    }

    if(isset($_GET["laranjaAtual"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelAtual ='2'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
        else {
            echo "<script>
            var confirmacao = confirm('Deseja atualizar o nivél recomendado também?');

            if (confirmacao == true) {
                window.location.href = 'EditandoRecomendados.php';
            }

            else {
               alert('Ok, nível atual foi atualizado!!');
            }
            </script>";
        }

    }

    if(isset($_GET["laranjaAmareloAtual"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelAtual ='3'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
        else {
            echo "<script>
            var confirmacao = confirm('Deseja atualizar o nivél recomendado também?');

            if (confirmacao == true) {
                window.location.href = 'EditandoRecomendados.php';
            }

            else {
               alert('Ok, nível atual foi atualizado!!');
            }
            </script>";
        }
    }
    
    if(isset($_GET["amareloAtual"])){
    
        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelAtual ='4'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
        else {
            echo "<script>
            var confirmacao = confirm('Deseja atualizar o nivél recomendado também?');

            if (confirmacao == true) {
                window.location.href = 'EditandoRecomendados.php';
            }

            else {
               alert('Ok, nível atual foi atualizado!!');
            }
            </script>";
        }
    
    }

    if(isset($_GET["verdeAtual"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelAtual ='5'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
        else {
            echo "<script>
            var confirmacao = confirm('Deseja atualizar o nivél recomendado também?');

            if (confirmacao == true) {
                window.location.href = 'EditandoRecomendados.php';
            }

            else {
               alert('Ok, nível atual foi atualizado!!');
            }
            </script>";
        }

    }

    if(isset($_GET["vermelhoRecomendado"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelRecomendado ='1' 
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel recomendado da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
    }

    if(isset($_GET["laranjaRecomendado"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelRecomendado ='2'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel recomendado da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }

    }

    if(isset($_GET["laranjaAmareloRecomendado"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelRecomendado ='3'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel recomendado da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
    }
    
    if(isset($_GET["amareloRecomendado"])){
    
        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelRecomendado ='4'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel recomendado da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
    }

    if(isset($_GET["verdeRecomendado"])){

        $IDqFunc = $_SESSION['IDqFunc'];
        $atualizaNivel = 
        "update qualificacaoFunc
        set nivelRecomendado ='5'
        where IDqualificacaoFunc ='" . $IDqFunc . "';";

        $resultado = mysqli_query($conexao,$atualizaNivel);
        if (!$resultado){
            echo "<script> window.alert('Erro ao atualizar nivel recomendado da competencia!!');</script>";
            echo "<script> window.alert('IDqualificação = " . $IDqFunc . " ');</script>";
        }
    
    }
    if(isset($_GET["vermelhoCria"])){

        $descricao = $_SESSION['nomeComp'];
        $atual = $_SESSION['nivelAtual'];
        $flag = true;

        $Verifica = "SELECT * FROM qualificacaoFunc WHERE descricao = '" . $descricao . "' and IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
        $resultado = mysqli_query($conexao,$Verifica);
        while ($pegando = mysqli_fetch_array($resultado)){
            echo "<script> window.alert('A competência já foi cadastrada!!');</script>";
            $flag = false;
        }

        if (!$flag){
            echo "<script> window.alert('Competência não foi adicionada!!');</script>";
        }
        else{
            $adiciona = "INSERT INTO qualificacaoFunc VALUES (DEFAULT, '1', '" . $atual . "', '" . $descricao . "', '" . $IDequipe . "', '" . $IDfuncionario . "', '" . $IDgestor . "')";
            $confirma = mysqli_query($conexao,$adiciona);

            if (!$confirma){
                echo "<script> window.alert('Erro ao adicionar dados');</script>";
            }
        }
        
    }

    if(isset($_GET["laranjaCria"])){

        $descricao = $_SESSION['nomeComp'];
        $atual = $_SESSION['nivelAtual'];
        $flag = true;

        $Verifica = "SELECT * FROM qualificacaoFunc WHERE descricao = '" . $descricao . "' and IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
        $resultado = mysqli_query($conexao,$Verifica);
        while ($pegando = mysqli_fetch_array($resultado)){
            echo "<script> window.alert('A competência já foi cadastrada!!');</script>";
            $flag = false;
        }

        if (!$flag){
            echo "<script> window.alert('Competência não foi adicionada!!');</script>";
        }
        else{
            $adiciona = "INSERT INTO qualificacaoFunc VALUES (DEFAULT, '2', '" . $atual . "', '" . $descricao . "', '" . $IDequipe . "', '" . $IDfuncionario . "', '" . $IDgestor . "')";
            $confirma = mysqli_query($conexao,$adiciona);

            if (!$confirma){
                echo "<script> window.alert('Erro ao adicionar dados');</script>";
            }
        }

    }

    if(isset($_GET["laranjaAmareloCria"])){

        $descricao = $_SESSION['nomeComp'];
        $atual = $_SESSION['nivelAtual'];
        $flag = true;

        $Verifica = "SELECT * FROM qualificacaoFunc WHERE descricao = '" . $descricao . "' and IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
        $resultado = mysqli_query($conexao,$Verifica);
        while ($pegando = mysqli_fetch_array($resultado)){
            echo "<script> window.alert('A competência já foi cadastrada!!');</script>";
            $flag = false;
        }

        if (!$flag){
            echo "<script> window.alert('Competência não foi adicionada!!');</script>";
        }
        else{
            $adiciona = "INSERT INTO qualificacaoFunc VALUES (DEFAULT, '3', '" . $atual . "', '" . $descricao . "', '" . $IDequipe . "', '" . $IDfuncionario . "', '" . $IDgestor . "')";
            $confirma = mysqli_query($conexao,$adiciona);

            if (!$confirma){
                echo "<script> window.alert('Erro ao adicionar dados');</script>";
            }
        }
    }
    
    if(isset($_GET["amareloCria"])){
    
        $descricao = $_SESSION['nomeComp'];
        $atual = $_SESSION['nivelAtual'];
        $flag = true;

        $Verifica = "SELECT * FROM qualificacaoFunc WHERE descricao = '" . $descricao . "' and IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
        $resultado = mysqli_query($conexao,$Verifica);
        while ($pegando = mysqli_fetch_array($resultado)){
            echo "<script> window.alert('A competência já foi cadastrada!!');</script>";
            $flag = false;
        }

        if (!$flag){
            echo "<script> window.alert('Competência não foi adicionada!!');</script>";
        }
        else{
            $adiciona = "INSERT INTO qualificacaoFunc VALUES (DEFAULT, '4', '" . $atual . "', '" . $descricao . "', '" . $IDequipe . "', '" . $IDfuncionario . "', '" . $IDgestor . "')";
            $confirma = mysqli_query($conexao,$adiciona);

            if (!$confirma){
                echo "<script> window.alert('Erro ao adicionar dados');</script>";
            }
        }
    }

    if(isset($_GET["verdeCria"])){

        $descricao = $_SESSION['nomeComp'];
        $atual = $_SESSION['nivelAtual'];
        $flag = true;

        $Verifica = "SELECT * FROM qualificacaoFunc WHERE descricao = '" . $descricao . "' and IDcadastro = '" . $IDfuncionario . "' and IDequipe = '" . $IDequipe . "'";
        $resultado = mysqli_query($conexao,$Verifica);
        while ($pegando = mysqli_fetch_array($resultado)){
            echo "<script> window.alert('A competência já foi cadastrada!!');</script>";
            $flag = false;
        }

        if (!$flag){
            echo "<script> window.alert('Competência não foi adicionada!!');</script>";
        }
        
        else{
            $adiciona = "INSERT INTO qualificacaoFunc VALUES (DEFAULT, '5', '" . $atual . "', '" . $descricao . "', '" . $IDequipe . "', '" . $IDfuncionario . "', '" . $IDgestor . "')";
            $confirma = mysqli_query($conexao,$adiciona);

            if (!$confirma){
                echo "<script> window.alert('Erro ao adicionar dados');</script>";
            }
        }
    
    }

?>