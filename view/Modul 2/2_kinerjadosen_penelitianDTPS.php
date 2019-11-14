<!DOCTYPE html>
<html lang="eng">
    <head>
       <title></title>
       <style></style>
    </head>
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            } 
            th{
                padding: 5px;
                text-align: center;
            }
            td{
                padding: 5px;
                text-align: left;
            }
            .nomor{
                text-align: center;
            }
        </style>
    <body>
        <h3>3. b. 2. Penelitian DTPS</h3>
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Sumber Pembiayaan</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                    <th>TS-2</th>
                    <th>TS-1</th>
                    <th>TS</th>
            </tr>
            <tr>
                <td class="nomor">1</td>
                <td class="nomor">2</td>
                <td class="nomor">3</td>
                <td class="nomor">4</td>
                <td class="nomor">5</td>
                <td class="nomor">6</td>
            </tr>
            <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC Tabel3b2_PenelitianDTPS";
                $res = $temp->executeStoredProcedure($query,[]);

                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
                    echo "<td>".$res[$res][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$res][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$res][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$res][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$res][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$res][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$res][$counter]."</td>";
                    $counter=0;
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>