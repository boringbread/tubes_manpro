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
                <th rowspan=3>No.</th>
                <th rowspan=3>Nama Dosen</th>
                <th colspan=8>Jumlah Mahasiswa yang Dibimbing</th>
                <th rowspan=3>Rata-rata Jumlah Bimbingan di semua Program/Semester</th>
           </tr>
           <tr>
                <th colspan=4>pada PS yang Diakreditasi</th>
                <th colspan=4>pada PS Lain di PT</th>
           </tr> 
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>Rata-rata</th>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>Rata-rata</th>
            </tr>
            <?php
            include "connection.php";

            $temp = new SQL();
            $query = "EXEC Tabel3a2_DosenPembimbingUtamaTugasAkhir";
            $res = $temp->executeStoredProcedure($query,[]);

            $counter = 0;
            for($x=0; $x<sizeof($res); $x++){
                echo "<tr>";
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter = $counter+1;
                echo "</tr>";
                $counter=0;
            }
            ?>
        </table>
    </body>
</html>    