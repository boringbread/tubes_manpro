<?php include '../header.php'; ?>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        body{
            color: white;
        }
    </style>

    <div class="w3-container">
        <h4>
            Tabel 5.b) Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran
        </h4>
        <table>
            <tr>
                <th>No</th>
                <th>Integrasi</th>
                <th>Sumber</th>
                <th>Bentuk Sumber</th>
                <th>Dosen</th>
                <th>Tahun</th>
                <th>Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>Judul Penelitian</th>
                <th>Bentuk Integrasi</th>
            </tr>
            
            <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel5b_IntegrasiKegiatanPenelitianPkM]";
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
                    echo "</tr>";
                    $counter=0;
                }
            ?>
        </table>
    </div>
</body>
<?php include '../footer.php' ?>
</html>