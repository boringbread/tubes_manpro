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
                <th rowspan=2>No</th>
                <th rowspan=2>Nama Dosen</th>
                <th rowspan=2>NIDN/NIDK</th>
                <th colspan=2>Pendidikan Pasca Sarjana</th>
                <th rowspan=2>Bidang Keahlian</th>
                <th rowspan=2>Kesesuaian dengan Kompetensi Inti PS</th>
                <th rowspan=2>Jabatan Akademik</th>
                <th rowspan=2>Sertifikat Pendidik Profesional</th>
                <th rowspan=2>Mata Kuliah yang Diampu pada PS yang Diakreditasi</th>
                <th rowspan=2>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</th>
                <th rowspan=2>Mata Kuliah yang Diampu pada PS Lain</th>
            </tr>
            <tr>
                <th>Magister/Magister Terapan/Spesialis</th>
                <th>Doktor/Dokter Terapan/Spesialis</th>
            </tr>
        
            <?php
                include "connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel3a1_DosenTetapUPPS]";
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