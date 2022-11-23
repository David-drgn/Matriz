<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="CSS/css-dados.css">
</head>

<body>

    <?php
    session_start();
    $ID = $_GET["id"];
    $_SESSION['IDcomp'] = $ID;
    ?>
    <form action="Funcionario-dados.php" method="GET">
        <div class="head">
            <div id="dadosCompetenciaNova">
                <div id="gridData">
                    <h1>Data de conclusão:</h1>
                    <br>
                    <div id="Grid2">
                        <input type="date" name="date" id="data" value="" />
                        <br>
                        <input type="submit" value="Salvar" name="data" id="salvaData" />
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>