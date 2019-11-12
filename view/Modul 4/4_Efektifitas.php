<?php include "../header.php"; ?>
<style type="text/css">
    body{
        color:white;
    }
</style>
    <h1><b>Masa Studi Lulusan Program Diploma Tiga</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Masuk</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Mahasiswa Diterima <sup>1)</sup></th>
            <th class="w3-flat-belize-hole" colspan="5">Jumlah Mahasiswa yang Lulus pada</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Lulusan s.d. Akhir TS</th>
            <th class="w3-flat-belize-hole" rowspan="2">Rata-rata Masa Studi</th>
        </tr>
        <tr>
            <th class="w3-flat-belize-hole">Akhir <br>TS-4</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS-3</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS-2</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS-1</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS</th>
        </tr>
        <tr>
            <td>TS-4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TS-3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <td>TS-2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
        </tr>
    </table>

    <h1><b>Masa Studi Lulusan Program Sarjana Terapan</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="">ID</th>
            <th class="w3-flat-belize-hole" rowspan="">Nama Mahasiswa <sup>1)</sup></th>
            <th class="w3-flat-belize-hole" colspan="">Nomor Pokok Mahasiswa</th>
            <th class="w3-flat-belize-hole" rowspan="">Bulan Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="">Tahun Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="">Tanggal Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="">IPK</th>
            <th class="w3-flat-belize-hole" rowspan="">TS</th>
        </tr>
        <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "SELECT * FROM data_lulus";
                $res = $temp->executeSelectQuery($query,[]);

                $index = 1;
                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
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
    <br><br>

    <h1><b>Masa Studi Lulusan Program Diploma Tiga</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Masuk</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Mahasiswa Diterima <sup>1)</sup></th>
            <th class="w3-flat-belize-hole" colspan="5">Jumlah Mahasiswa yang Lulus pada</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Lulusan s.d. Akhir TS</th>
            <th class="w3-flat-belize-hole" rowspan="2">Rata-rata Masa Studi</th>
        </tr>
        <tr>
            <th class="w3-flat-belize-hole">Akhir <br>TS-4</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS-3</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS-2</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS-1</th>
            <th class="w3-flat-belize-hole">Akhir <br>TS</th>
        </tr>
        <tr>
            <td>TS-4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TS-3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <td>TS-2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
        </tr>
    </table>
    A
</body>
</html>