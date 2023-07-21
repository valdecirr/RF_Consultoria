<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    // $valueCheckInicial = isset($_POST['CheckInicio']) ? 'X' : '';
    // $valueCheckFinal = isset($_POST['CheckFinal']) ? 'X' : '';


    $nome = $_POST['nome'];
    $dias = $_POST['dias'];
    $datainicio = $_POST['datainicio'];
    $checkinicio = $_POST['checkinicio'];
    $inicioreal = $_POST['inicioreal'];
    $termino = $_POST['termino'];
    $checkfinal = $_POST['checkfinal'];
    $finalreal = $_POST['finalreal'];
    $situacao = $_POST['situacao'];
    $obs = $_POST['obs'];

    $sql = "INSERT INTO rf_consultoria (nome, dias, datainicio, checkinicio, inicioreal, termino, checkfinal, finalreal, situacao, obs) VALUES ('$nome', '$dias', '$datainicio', '$checkinicio', '$inicioreal', '$termino', '$checkfinal', '$finalreal', '$situacao', '$obs')";
    $result = mysqli_query($conexao, $sql);




   // if ($result) {
    //     echo "Os dados foram inseridos com sucesso!";
    // } else {
    //     echo "Ocorreu um erro ao inserir os dados: " . mysqli_error($conn);
    // }
    
    header("Location: index.php");
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

        #datainicio,
        #inicioreal,
        #termino,
        #finalreal {
            background-color: dodgerblue;
            border: none;
            outline: none;
            color: white;
            padding: 4px;
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
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Dados de Entrada</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="Nome" class="inputUser" value="">
                    <label for="Nome" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="dias" id="dias" class="inputUser" value="">
                    <label for="dias" class="labelInput">Dias</label>
                </div>
                <br>
                <div class="inputBox">
                    <label for="datainicio" class="">Inicio</label>
                    <input type="date" name="datainicio" id="datainicio" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <label for="checkinicio" class="">Check Início</label>
                    <input type="checkbox" name="checkinicio" id="checkinicio" class="" value="X">
                </div>
                <br>
                <div class="inputBox">
                    <label for="inicioreal" class="">Inicio Real</label>
                    <input type="date" name="inicioreal" id="inicioreal" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <label for="termino" class="">Término</label>
                    <input type="date" name="termino" id="termino" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <label for="checkfinal" class="">Check Final</label>
                    <input type="checkbox" name="checkfinal" id="checkfinal" class="" value="X">
                </div>
                <br>
                <div class="inputBox">
                    <label for="finalreal" class="">Final Real</label>
                    <input type="date" name="finalreal" id="finalreal" class="" value="">
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="situacao" id="situacao" class="inputUser" value="">
                    <label for="situacao" class="labelInput">Status</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="obs" id="obs" class="inputUser" value="">
                    <label for="obs" class="labelInput">OBS</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  -->
</body>

</html>