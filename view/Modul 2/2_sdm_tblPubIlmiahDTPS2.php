<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3b.4 Tabel 2</title>
<style>
    table,th, td {
        border: 1px solid black;
        border-collapse: collapse;
        
      }
    </style>
</head>
<body>
    <table>
        <tr>
            <th rowspan="2">Jenis</th>
            <th colspan="3">Jumlah Judul</th>
            <th rowspan="2">Jumlah</th>
        </tr>

       

        </tr>
            <td>TS-2</td>
            <td>TS-1</td>
            <td>TS</td>
        </tr>

        <?php
                include "connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel3b4_PartXXXX]";
                $res = $temp->executeStoredProcedure($query,[]);

                $index = 0;
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
                    echo "</tr>";
                    $counter=0;
                }
            ?>

        

    </tr>

    </table>
   
</body>
</html>