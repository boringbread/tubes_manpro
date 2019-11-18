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
            Tabel 5.a) Kurikulum
        </h4>
        <table>
            <tr>
                <th>No</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>Bobot Pemrograman</th>
                <th>SKS</th>
                <th>Semester</th>
            </tr>
            
            <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "select kodeMatakuliah, namaMatakuliah, bobotPemrograman, sks, semester from MataKuliah";
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
</body>
<?php include '../footer.php' ?>
</html>