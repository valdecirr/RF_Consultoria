<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    // $valueCheckInicial = isset($_POST['CheckInicio']) ? 'X' : '';
    // $valueCheckFinal = isset($_POST['CheckFinal']) ? 'X' : '';


    $nome = $_POST['Nome'];
    //print_r($nome);
    $dias = $_POST['Dias'];
    // $Inicio = date_format(date_create($_POST['Inicio']), 'd/m/Y');
    // $CheckInicio =  $_POST['CheckInicio'];
    // $InicioReal = date_format(date_create($_POST['InicioReal']), 'd/m/Y');
    // $Termino = date_format(date_create($_POST['Termino']), 'd/m/Y');
    // $CheckFinal =  $_POST['CheckFinal'];
    // $FinalReal = date_format(date_create($_POST['FinalReal']), 'd/m/Y');
    // // $Status = $_POST['Status'];
    // $OBS = $_POST['OBS'];

    // $result = mysqli_query($conexao, "INSERT INTO rf_consultoria(Nome,Dias,Inicio,CheckInicio,InicioReal,Termino,CheckFinal,FinalReal,OBS) 
    // VALUES('$Nome','$Dias','$Inicio','$CheckInicio','$InicioReal','$Termino','$CheckFinal','$FinalReal','$OBS')");

    $result = mysqli_query($conexao, "INSERT INTO rf_consultoria (nome, dias) VALUES ('$nome','$dias')");

    // header("Location: Entrada.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <!-- <link type="text/css" rel="stylesheet" href="css/EstiloEntrada.css"> -->
    <title>Navegação</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 10px;
            width: auto;
            color: white;
        }

        form>img {
            width: auto;
            height: auto;
            margin-top: auto;
            margin-left: auto;
            /* opacity: 0.5; */
        }

        fieldset {
            border: 3px solid dodgerblue;
            width: auto;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            border-radius: 8px;

        }

        .areabotao {
            width: auto;
        }

        .botaonavegacao {
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="Entrada.php" method="POST">
            <img src="imagem/logo.png" alt="logo">
            <fieldset>
                <legend><b>RF Consultoria e Soluções</b></legend>
                <div class="areabotao">                    
                    <a href="empresas.php"><button type="button" class="botaonavegacao">Empresas</button></a>
                    <button type="button" class="botaonavegacao">Relatório</button>
                    <button type="button" class="botaonavegacao">Dashboard</button>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  -->
</body>

</html>