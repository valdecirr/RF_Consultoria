<?php

include_once("config.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navegação</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            position: absolute;
            /* top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); */
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 10px;
            width: 95%;
            color: white;
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

        #tabelaempresa {
            border: 1px solid dodgerblue;

        }

        #tabelaempresa th {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            background-color: dodgerblue;
            color: white;
        }

        #tabelaempresa td {
            border: 1px solid dodgerblue;
            padding: 5px;
            text-align: center;
            border-radius: 8px;
            background-color: white;
            color: black;
        }

        #btnvoltar {
            margin-top: 10px;
            padding: 5px;
            background-color: dodgerblue;
            color: white;
            border-radius: 8px;
            width: 100px;
        }

        #btnempresa {
            margin-top: 10px;
            padding: 5px;
            background-color: green;
            color: white;
            border-radius: 8px;
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="" method="">
            <fieldset>
                <legend><b>RF Consultoria e Soluções</b></legend>
                <div class="">
                    <table class="cell-border" id="tabelaempresa" style="width:100%;font-size: 12px;">

                        <thead>
                            <tr>
                                <th style="width: 2%;">Editar</th>
                                <th>Nome</th>
                                <th>Dias</th>
                                <th>Data<br>Início</th>
                                <th>Check<br>Início</th>
                                <th>Início<br>Real</th>
                                <th>Término</th>
                                <th>Check<br>Final</th>
                                <th>Final<br>Real</th>
                                <th>Status</th>
                                <th>OBS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $empresa = $_GET['empresa'];
                            $result = mysqli_query($conexao, "SELECT * FROM rf_consultoria WHERE empresa = '$empresa'");
                            while ($row = mysqli_fetch_array($result)) {
                                $resultdata = date('d/m/Y', strtotime($row['datainicio'] . ' + ' . $row['dias'] . 'days'));
                                echo "<tr>";
                                echo "<td><a href='Entrada.php?id={$row['id']}'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen-fill' viewBox='0 0 16 16'>
                                <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z'/>
                              </svg></a></td>";
                                echo "<td>" . $row['nome'] . "</td>";
                                echo "<td>" . $row['dias'] . "</td>";
                                echo "<td>" . date_format(date_create($row['datainicio']), "d/m/Y") . "</td>";
                                echo "<td>" . $row['checkinicio'] . "</td>";
                                echo "<td>" . date_format(date_create($row['inicioreal']), "d/m/Y") . "</td>";
                                echo "<td>" . $resultdata .  "</td>";                                
                                echo "<td>" . $row['checkfinal'] . "</td>";
                                echo "<td>" . date_format(date_create($row['finalreal']), "d/m/Y") . "</td>";
                                echo "<td>" . $row['situacao'] . "</td>";
                                echo "<td>" . $row['obs'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </form>
        <div style="width: 100%">
            <div style="text-align: right;float:right"><a href="index.php"><button type="button" class="btn btn-primary" id="btnvoltar">VoltarA</button></a> </div>
            <div style="text-align: left;"><a href="index.php"><button type="button" class="btn btn-primary" id="btnempresa">Adicionar Empresa</button></a> </div>
        </div>
    </div>
</body>

</html>