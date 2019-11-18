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
                    th, td{
                        padding: 5px;
                        text-align: center;
                    }
            </style>
    <body>
        <h3>3. b. 1. Pengakuan/Rekognisi DTPS</h3>
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Nama Dosen</th>
                <th rowspan="2">Bidang Keahlian</th>
                <th rowspan="2">Rekognisi dan Bukti Pendukung</th>
                <th colspan="3">Tingkat</th>
                <th rowspan="2">Tahun</th>
            </tr>
            <tr>
                <th>Wilayah</th>
                <th>Nasional</th>
                <th>Internasional</th>
            </tr>
            <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC Tabel3b1_RekognisiDTPS";
                $res = $temp->executeStoredProcedure($query,[]);

                $index = 1;
                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
                    echo "<td>".$index."</td>";
                    $index++;
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