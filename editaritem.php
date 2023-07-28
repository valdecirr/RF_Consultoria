<?php
// if (isset($_POST['submit'])) {
include_once('config.php');
$resultID = $_GET['id'];

$result = mysqli_query($conexao, "SELECT* FROM rf_consultoria  WHERE id = '$resultID'");

while ($row = mysqli_fetch_array($result)) {

    if(strlen($row['finalreal']) == 0) {
        $resultdatafinal = '';
        echo $resultdatafinal;
    } else {                                   
        //$resultdatafinal = date_format(date_create($row['finalreal']), 'Y-m-d');
        //$resultdatafinal = substr($row['finalreal'],0,4).'-'.substr($row['finalreal'],5,2).'-'.substr($row['finalreal'],8,2);
        $resultdatafinal = explode('-',$row['finalreal']);
        $resultdatafinal = $resultdatafinal[0].'-'.$resultdatafinal[1].'-'.$resultdatafinal[2];
        echo $resultdatafinal;
        // $resultdatafinal = $resultdatafinal->format('Y-m-d');
    };

    $rID = $row['id'];
    $nome = $row['nome'];
    $dias = $row['dias'];
    $inicio = date_format(date_create($row['datainicio']), 'Y-m-d');
    $checkinicio = $row['checkinicio'];
    $inicioreal = date_format(date_create($row['inicioreal']), 'Y-m-d');
    $checkfinal = $row['checkfinal'];
    $finalreal =  $resultdatafinal;
    $status = $row['situacao'];
    $obs = $row['obs'];
    $empresa = $row['empresa'];
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

        #submit,
        #return {
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            border: none;
            outline: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 10px;
            width: 50%;
            cursor: pointer;
            float: right;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

        #return:hover {
            background-image: linear-gradient(to right, rgb(200, 180, 72), rgb(150, 119, 95));
        }
       
    </style>
</head>

<body>
    <div class="box">
        <form action="atualizaritem.php?id=<? echo ($rID) ?>;<? echo ($empresa) ?>" method="POST">
            <fieldset>
                <legend><b>Dados de Entrada</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" value="<? echo ($nome) ?>">
                    <label for="Nome" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Dias" id="Dias" class="inputUser" value="<? echo ($dias) ?>">
                    <label for="Dias" class="labelInput">Dias</label>
                </div>
                <br>
                <div class="inputBox">
                    <label for="Inicio" class="">Inicio</label>
                    <input type="date" name="Inicio" id="Inicio" class="" value="<? echo ($inicio) ?>">
                </div>
                <br>
                <div class="inputBox">
                    <label for="CheckInicio" class="">CheckInicio</label>
                    <?php
                    if ($checkinicio != "") {
                        echo ('<input type="checkbox" name="CheckInicio" id="CheckInicio" class="" checked >');
                    } else {
                        echo ('<input type="checkbox" name="CheckInicio" id="CheckInicio" class="" >');
                    }
                    ?>

                </div>
                <br>
                <div class="inputBox">
                    <label for="InicioReal" class="">InicioReal</label>
                    <input type="date" name="InicioReal" id="InicioReal" class="" value="<? echo ($inicioreal) ?>">
                </div>
                <br>
                <div class="inputBox">
                    <label for="Termino" class="">Término</label>
                    <input type="date" name="Termino" id="Termino" disabled value="<?php echo (date('Y-m-d', strtotime($inicio . ' + ' . $dias . 'days'))) ?>">
                </div>
                <br>
                <div class="inputBox">
                    <label for="CheckFinal" class="">CheckFinal</label>
                    <?php
                    if ($checkfinal != "") {
                        echo ('<input type="checkbox" name="CheckFinal" id="CheckFinal" class="" checked >');
                    } else {
                        echo ('<input type="checkbox" name="CheckFinal" id="CheckFinal" class="" >');
                    }
                    // <input type="checkbox" name="CheckFinal" id="CheckFinal" class="">
                    ?>
                </div>
                <br>
                <div class="inputBox">
                    <label for="FinalReal" class="">FinalReal</label>
                    <input type="date" name="FinalReal" id="FinalReal" class="" value="<? echo ($finalreal) ?>">
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Status" id="Status" class="inputUser" value="<? echo ($status) ?>">
                    <label for="Status" class="labelInput">Status</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="OBS" id="OBS" class="inputUser" value="<? echo ($obs) ?>">
                    <label for="OBS" class="labelInput">OBS</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
                <a href="tabelaprincipal.php?empresa=<? echo ($empresa) ?>"><input type="button" name="return" id="return" value="Voltar"></a>
            </fieldset>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  -->
</body>

</html>