<?php include '../header.php' ?>
<style>
        table,
        th,
        td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
                position: center;
        }

        th,
        td {
                padding: 5px;
                text-align: left;
        }

        body {
                color: white;
        }
</style>

<h1><b>Tabel 8.f.4) Luaran penelitian/PkM yang dihasilkan mahasiswa</b></h1> <br>
                <table>
                        <tr>
                                <th class="w3-flat-belize-hole">Judul Luaran Penelitian/PkM</th>
                                <th class="w3-flat-belize-hole">Tahun</th>
                                <th class="w3-flat-belize-hole">Keterangan</th>
                        </tr>


                        <?php
                include "../../connection.php";
                $temp = new SQL();
                $query = "EXEC [Tabel8f3_LuaranPenelitianPKMLainnyaMahasiswa]";
                $res = $temp->executeStoredProcedure($query,[]);
                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
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
</html>
<?php include '../footer.php' ?>
