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
                        <th class="w3-flat-belize-hole" rowspan="2">No</th>
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

                $index = 1;
                $counter = 0;
                for ($x = 0; $x < sizeof($res); $x++) {
                        echo "<tr>";
                        echo "<td>" . $index . "</td>";
                        $index++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;


                        if ($res[$x][$counter] == "ts2") {
                                echo "<td> v </td>";
                                $counter++;
                                echo "<td></td>";
                                // $counter++;
                                echo "<td></td>";
                                // $counter++;                    
                        } else if ($res[$x][$counter] == "ts1") {
                                echo "<td></td>";
                                $counter++;
                                echo "<td></td>";
                                // $counter++;
                                echo "<td>v</td>";
                                // $counter++;                    
                        } else if ($res[$x][$counter] == "ts") {
                                echo "<td></td>";
                                $counter++;
                                echo "<td>v</td>";
                                // $counter++;
                                echo "<td></td>";
                                // $counter++;                           
                        }

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
                        <th class="w3-flat-belize-hole" rowspan="2">No</th>
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

                $index = 1;
                $counter = 0;
                for ($x = 0; $x < sizeof($res); $x++) {
                        echo "<tr>";
                        echo "<td>" . $index . "</td>";
                        $index++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;


                        if ($res[$x][$counter] == "ts2") {
                                echo "<td> v </td>";
                                $counter++;
                                echo "<td></td>";
                                // $counter++;
                                echo "<td></td>";
                                // $counter++;                    
                        } else if ($res[$x][$counter] == "ts1") {
                                echo "<td></td>";
                                $counter++;
                                echo "<td></td>";
                                // $counter++;
                                echo "<td>v</td>";
                                // $counter++;                    
                        } else if ($res[$x][$counter] == "ts") {
                                echo "<td></td>";
                                $counter++;
                                echo "<td>v</td>";
                                // $counter++;
                                echo "<td></td>";
                                // $counter++;                           
                        }

                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;

                        $counter = 0;
                }
                ?>
        </table>
</div>

<div class="iuran">
        <h1><b>Tabel 8.f.4) Luaran penelitian/PkM yang dihasilkan mahasiswa</b></h1> <br>
        <div class="w3-container">
                <table>
                        <tr>
                                <th class="w3-flat-belize-hole" rowspan="2">No</th>
                                <th class="w3-flat-belize-hole" rowspan="2">Judul Luaran Penelitian/PkM</th>
                                <th class="w3-flat-belize-hole" colspan="3">Tahun</th>
                                <th class="w3-flat-belize-hole" rowspan="2">Keterangan</th>
                        </tr>


                        <?php
                        //include "../../connection.php";

                        $temp = new SQL();
                        $query = "EXEC [Tabel8f3_LuaranPenelitianPKMLainnyaMahasiswa]";
                        $res = $temp->executeStoredProcedure($query, []);

                        $index = 1;
                        $counter = 0;
                        for ($x = 0; $x < sizeof($res); $x++) {
                                echo "<tr>";
                                echo "<td>" . $index . "</td>";
                                $index++;
                                echo "<td>" . $res[$x][$counter] . "</td>";
                                $counter++;
                                echo "<td>" . $res[$x][$counter] . "</td>";
                                $counter++;

                                $counter = 0;
                        }
                        ?>

                </table>
        </div>
</div>

</html>
<?php include '../footer.php' ?>