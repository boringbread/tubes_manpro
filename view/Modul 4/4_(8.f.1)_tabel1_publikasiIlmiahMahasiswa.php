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

<div class="w3-container">
        <h1><b>Tabel 8.f.1) Publikasi Ilmiah mahasiswa</b></h1> <br>
        <table>
                <tr>
                <th class="w3-flat-belize-hole" rowspan="2">No.</th>
                        <th class="w3-flat-belize-hole" rowspan="2">Jenis Publikasi</th>
                        <th class="w3-flat-belize-hole" colspan="3">Jumlah Judul</th>
                        <th class="w3-flat-belize-hole" rowspan="2">Jumlah</th>
                </tr>
                <tr>
                        <th class="w3-flat-belize-hole">ts2</th>
                        <th class="w3-flat-belize-hole">ts1</th>
                        <th class="w3-flat-belize-hole">ts</th>
                </tr>

                <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel8f1_partJurnalMahasiswa]";
                $res = $temp->executeStoredProcedure($query, []);

                $index =
                $counter = 0;
                for ($x = 0; $x < sizeof($res); $x++) {
                        echo "<tr>";
                        echo "<td>".$index."</td>";
                        $index++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;

                        $counter = 0;
                }
                ?>
        </table>
</div>

<div class="lanjutan">
        <h1><b>Tabel 8.f.1) Pagelaran/pameran/presentasi/publikasi Ilmiah mahasiswa</b></h1> <br>
        <table>
                <tr>
                        <th class="w3-flat-belize-hole" rowspan="2">No.</th>
                        <th class="w3-flat-belize-hole" rowspan="2">Jenis Publikasi</th>
                        <th class="w3-flat-belize-hole" colspan="3">Jumlah Judul</th>
                        <th class="w3-flat-belize-hole" rowspan="2">Jumlah</th>
                </tr>
                <tr>
                        <th class="w3-flat-belize-hole">ts2</th>
                        <th class="w3-flat-belize-hole">ts1</th>
                        <th class="w3-flat-belize-hole">ts</th>
                </tr>

                <?php
                //include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel8f1_PartSeminarMahasiswa]";
                $res = $temp->executeStoredProcedure($query, []);

                $index =
                $counter = 0;
                for ($x = 0; $x < sizeof($res); $x++) {
                        echo "<tr>";
                        echo "<td>".$index."</td>";
                        $index++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;

                        $counter = 0;
                }
                ?>
        </table>
</div>
        
</html>
<?php include '../footer.php' ?>
