<?php
include_once("config.php");

$result = explode(';', $_GET['id']);
$resultID = intval($result[0]);
$empresa = $result[1];

$nome = $_POST['Nome'];
$dias = $_POST['Dias'];
$inicio = $_POST['Inicio'];
if(isset($_POST['CheckInicio'])){
    $checkinicio = "X";
}else{
    $checkinicio = "";
}
$inicioreal = $_POST['InicioReal'];

$finalreal = strlen($_POST['FinalReal']);
 echo $finalreal;
if($finalreal == 0 ){
    $finalreal=NULL;    
}else{
    $finalreal = $_POST['FinalReal'];  
};

echo $finalreal;

if(isset($_POST['CheckFinal'])){
    $checkfinal = "X";
}else{
    $checkfinal = "";
}
$status = $_POST['Status'];
$obs = $_POST['OBS'];

$result = mysqli_query($conexao, "UPDATE rf_consultoria SET nome='$nome', dias='$dias', datainicio='$inicio', checkinicio='$checkinicio', inicioreal='$inicioreal', finalreal='$finalreal', checkfinal='$checkfinal', situacao='$status', obs='$obs' , empresa='$empresa' WHERE id='$resultID'");  

header("Location: tabelaprincipal.php?empresa={$empresa}");
?>