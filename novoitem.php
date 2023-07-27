<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    // $valueCheckInicial = isset($_POST['CheckInicio']) ? 'X' : '';
    // $valueCheckFinal = isset($_POST['CheckFinal']) ? 'X' : '';


    // $nome = $_POST['Nome'];
    //print_r($nome);
    // $dias = $_POST['Dias'];
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
    <title>Formulário</title>
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
            width: 40%;
            color: white;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;

        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            /* letter-spacing: 2px; */
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -15px;
            left: 0px;
            color: dodgerblue;
            font-size: 12px;
        }

        #Inicio,
        #InicioReal,
        #Termino,
        #FinalReal {
            background-color: dodgerblue;
            border: none;
            outline: none;
            color: white;
            padding: 8px;
            margin: 5px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            border: none;
            outline: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 10px;
            width: 100%;
            cursor: pointer;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="Entrada.php" method="POST">
            <fieldset>
                <legend><b>Dados de Entrada</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" value="">
                    <label for="Nome" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Dias" id="Dias" class="inputUser" value="">
                    <label for="Dias" class="labelInput">Dias</label>
                </div>
                <br>
                <div class="inputBox">
                    <label for="Inicio" class="">Inicio</label>
                    <input type="date" name="Inicio" id="Inicio" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <label for="CheckInicio" class="">CheckInicio</label>
                    <input type="checkbox" name="CheckInicio" id="CheckInicio" class="" value="X">
                </div>
                <br>
                <div class="inputBox">
                    <label for="InicioReal" class="">InicioReal</label>
                    <input type="date" name="InicioReal" id="InicioReal" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <label for="Termino" class="">Término</label>
                    <input type="date" name="Termino" id="Termino" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <label for="CheckFinal" class="">CheckFinal</label>
                    <input type="checkbox" name="CheckFinal" id="CheckFinal" class="" value="X">
                </div>
                <br>
                <div class="inputBox">
                    <label for="FinalReal" class="">FinalReal</label>
                    <input type="date" name="FinalReal" id="FinalReal" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Status" id="Status" class="inputUser" value="">
                    <label for="Status" class="labelInput">Status</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="OBS" id="OBS" class="inputUser" value="">
                    <label for="OBS" class="labelInput">OBS</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  -->
</body>

</html>