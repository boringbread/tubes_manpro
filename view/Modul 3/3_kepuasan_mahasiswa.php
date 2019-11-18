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
            Tabel 5.c) Kepuasan Mahasiswa
        </h4>
        <table>
            <tr>
                <th rowspan=2>No</th>
                <th rowspan=2>Aspek yang diukur</th>
                <th colspan=4>Tingkat Kepuasan Mahasiswa</th>
                <th rowspan=2>Rencana Tindak Lanjut oleh UPPS/PS</th>
            </tr>
            <tr>
                <th>Sangat Baik</th>
                <th>Baik</th>
                <th>Cukup</th>
                <th>Kurang</th>
            </tr>

            </tr>
            
            <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "";
                $res = $temp->executeSelectQuery($query,[]);

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
                    echo "</tr>";
                    $counter=0;
                }
            ?>
        </table>
    </div>
</body>
<?php include '../footer.php' ?>
</html>