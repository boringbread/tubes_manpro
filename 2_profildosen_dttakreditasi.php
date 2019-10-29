<html>
    <head>
        <style>
            table, tr,td, th {
                border:solid 1px; 
                border-collapse:collapse;
                text-align: center;
            }
            .num,th{
                background-color: lightgrey;
            }
            
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>No.</th>
                <th>Nama Dosen</th>
                <th>NIDN / NIDK 1)</th>
                <th>Pendidikan Pasca Sarjana 2)</th>
                <th>Bidang keahlian 3)</th>
                <th>Jabatan Akademik</th>
                <th>Sertifkat Pendidik Profesional 4)</th>
                <th>Sertifikat Profesi/Kompetensi/Industri 5)</th>
                <th>Mata Kuliah yang Diampu pada PS yang Diakreditasi 6)</th>
                <th>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu 7)</th>
            </tr>
            <?php
                include "connection.php";

                $temp = new SQL();
                $query = "EXEC Tabel3a4_DosenTidakTetapUPPS";
                $res = $temp->executeStoredProcedure($query,[]);
                $index = 1;
                $counter = 0;
                for($x = 0; $x < sizeof($res); $x++){
                    echo "<tr>";
                    echo "<td>".$index."</td>";
                    $index++;
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
                    $counter = 0;
                }
            
            ?>
        </table>
    </body>
</html>