<!Doctype html>
<html>
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
            }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Sumber Pembayaran</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">judul</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-3</th>
                <th>TS</th>
            </tr>
            
            <?php
            include "connection.php";

            $temp = new SQL();
            $query = "EXEC tabel3b3_PKMDTPS";
            $res = $temp->executeStoredProcedure($query,[]);

            $index = 1;
            $counter = 0;
            for($x=0; $x<sizeof($res); $x++){
                echo "<tr>";
                echo "<td>".$index."</td>";
                $index++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "</tr>";
                $counter=0;
            }
            ?>`
        </table>
    </body>
</html>