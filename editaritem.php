<?php
// if (isset($_POST['submit'])) {
include_once('config.php');
$resultID = $_GET['id'];

$result = mysqli_query($conexao, "SELECT* FROM rf_consultoria  WHERE id = '$resultID'");

while ($row = mysqli_fetch_array($result)) {

    if (strlen($row['finalreal']) == 0) {
        $resultdatafinal = '';
        echo $resultdatafinal;
    } else {
        //$resultdatafinal = date_format(date_create($row['finalreal']), 'Y-m-d');
        //$resultdatafinal = substr($row['finalreal'],0,4).'-'.substr($row['finalreal'],5,2).'-'.substr($row['finalreal'],8,2);
        $resultdatafinal = explode('-', $row['finalreal']);
        $resultdatafinal = $resultdatafinal[0] . '-' . $resultdatafinal[1] . '-' . $resultdatafinal[2];
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
    <link href="/jquery-ui.min.css">
    <link href="/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/estiloEditarItem.css">
    <title>Formulário</title>
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
                    <input type="date" name="FinalReal" id="FinalReal" onchange="ObterValor(this.value)" value="<? echo ($finalreal) ?>"/>
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
    <script type="text/javascript" src="/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="/jquery-ui.js"></script>
    <script type="text/javascript" src="/bootstrap.min.js"></script>
    <script type="text/javascript" src="/javascript.js"></script>

</body>

</html>