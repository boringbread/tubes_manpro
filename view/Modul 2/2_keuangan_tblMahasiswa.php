<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
          color : white;
        }
    </style>

</head>
<body>
        <?php
            include "../../connection.php";

            $temp = new SQL();
            $query = "EXEC [Tabel4_PenggunaanDana]";
            $res = $temp->executeStoredProcedure($query,[]);
        ?>

    <table>
        <tr>
            <th rowspan="2" style="text-align: center"><b>No.</b></th>
            <th rowspan="2" style="text-align: center; width: 50%"><b>Jenis Penggunaan</b></th>
            <th colspan="4" style="text-align: center"><b>Unit Pengelola Program Studi (Rp.)</b></th>
            <th colspan="4" style="text-align: center"><b>Program Studi (Rp.)</b></th>
        </tr>
        <tr>
            <td><b>TS-2</b></td>
            <td><b>TS-1</b></td>
            <td><b>TS</b></td>
            <td><b>Rata-rata</b></td>
            <td><b>TS-2</b></td>
            <td><b>TS-1</b></td>
            <td><b>TS</b></td>
            <td><b>Rata-rata</b></td>
        </tr>
        <?php
           $counter = 0;
           for($x=0; $x<sizeof($res); $x++){
               echo "<tr>";
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "<td>".$res[$x][$counter]."</td>";
               $counter++;
               echo "</tr>";
               $counter=0;
           } 
        ?>
    </table>

    
</body>
</html>