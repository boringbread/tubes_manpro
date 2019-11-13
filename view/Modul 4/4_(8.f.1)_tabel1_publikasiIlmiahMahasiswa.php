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

                $index = 1;
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

                $index = 1;
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
<br>
        <table>
        <h1> Tabel 8.f.2)Karya Ilmiah </h1>
        <tr>
            <th rowspan="2" style="text-align: center"><b>No.</b></th>
            <th rowspan="2" style="text-align: center"><b>Nama Mahasiswa</b></th>
            <th rowspan="2" style="text-align: center"><b>Judul Artikel yang Disitasi (Jurnal/Buku, Volume, Tahun, Nomor, Halaman) </b></th>
            <th rowspan="2" style="text-align: center"><b>Jumlah Sitasi</b></th>
        </tr>

        <tr>
        </tr>
        
        <tr>
            <td style="text-align: center">1</td>
            <td style="text-align: center">2</td>
            <td style="text-align: center">3</td>
            <td style="text-align: center">4</td>
        </tr>
        <tr>
            <td style="text-align: center">1</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">3</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">4</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">...</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
            <td></td>
            <td></td>
        </tr>
    </table>
<br>

    <table>
        <h1>Tabel 8.f.3)Produk Jasa</h1>
        <tr>
            <th rowspan="2" style="text-align: center"><b>No.</b></th>
            <th rowspan="2" style="text-align: center"><b>Nama Mahasiswa</b></th>
            <th rowspan="2" style="text-align: center"><b>Nama Produk/Jasa</b></th>
            <th rowspan="2" style="text-align: center"><b>Deskripsi Produk/Jasa</b></th>
            <th rowspan="2" style="text-align: center"><b>Bukti</b></th>
        </tr>

        <tr>
        </tr>
        
        <tr>
            <td style="text-align: center">1</td>
            <td style="text-align: center">2</td>
            <td style="text-align: center">3</td>
            <td style="text-align: center">4</td>
            <td style="text-align: center">5</td>
        </tr>
        <tr>
            <td style="text-align: center">1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center">...</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>     

<br>
        
<table>
<h1>Tabel 8.f.4) Luaran penelitian/PkM yang dihasilkan mahasiswa</h1>
        <tr>
        <th class="w3-flat-belize-hole">Judul Luaran Penelitian/PkM</th>
        <th class="w3-flat-belize-hole">Tahun</th>
        <th class="w3-flat-belize-hole">Keterangan</th>
        </tr>


                        <?php
                //include "../../connection.php";
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
</div>
        
</html>
<?php include '../footer.php' ?>
