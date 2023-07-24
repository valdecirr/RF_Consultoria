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
            padding: 10px;
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
        #btnempresa{
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
                    <table class="cell-border" id="tabelaempresa" style="width:100%">

                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $resultA = mysqli_query($conexao, "SELECT * FROM empresas");
                            $resultB = mysqli_query($conexao, "SELECT * FROM rf_consultoria");
                            while ($row = mysqli_fetch_array($resultA)) {
                                echo "<tr>";
                                echo "<td style='text-align:center;width:50%'><a href='tabelaprincipal.php?empresa={$row['nome']}'>" . $row['nome'] . "</a></td>";
                                while ($row = mysqli_fetch_array($resultB)) {
                                    $soma++;
                                }
                                echo "<td style='text-align:center;width:50%'>" . $soma . "</td>";
                                echo "</tr>";
                                $soma = 0;
                            }

                            ?>
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