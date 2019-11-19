<?php include "../header.php"; ?>
<style type="text/css">
    body{
        color:white;
    }

    #dayasaing table{
        border:white solid 1px;
        text-align: center;
        
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
    <table >
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

    <div id="dayasaing">
    <h1><b>Daya Saing Lulusan Program Diploma Tiga</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah lulusan </th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Lulusan Terlacak </th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Lulusan yang Dipesan Sebelum Lulus </th>
            <th class="w3-flat-belize-hole" colspan="3">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatakan Pekerjaan</th>
        </tr>
        <tr>
            <th class="w3-flat-belize-hole">WT < 3 bulan</th>
            <th class="w3-flat-belize-hole"> 3 <= WT <= 6 bulan </th>
            <th class="w3-flat-belize-hole">WT > 6 bulan</th>
        </tr>
        <tr>
            <td>TS-4</td>
            <td>30</td>
            <td>25</td>
            <td>10</td>
            <td>7</td>
            <td>5</td>
            <td>3</td>
        </tr>
        <tr>
            <td>TS-3</td>
            <td>25</td>
            <td>20</td>
            <td>8</td>
            <td>6</td>
            <td>4</td>
            <td>2</td>
        </tr>
         <tr>
            <td>TS-2</td>
            <td>35</td>
            <td>34</td>
            <td>14</td>
            <td>10</td>
            <td>9</td>
            <td>1</td>
         </tr>
        </tr>
    </table>
    </div>

    <div id="dayasaing"  >
    <h1><b>Daya Saing Lulusan Program Diploma Tiga</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah lulusan </th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Lulusan Terlacak </th>
            <th class="w3-flat-belize-hole" colspan="3">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatakan Pekerjaan</th>
        </tr>
        <tr>
            <th class="w3-flat-belize-hole">WT < 3 bulan</th>
            <th class="w3-flat-belize-hole"> 3 <= WT <= 6 bulan </th>
            <th class="w3-flat-belize-hole">WT > 6 bulan</th>
        </tr>
        <tr>
            <td>TS-4</td>
            <td>20</td>
            <td>12</td>
            <td>6</td>
            <td>2</td>
            <td>3</td>

        </tr>
        <tr>
            <td>TS-3</td>
            <td>13</td>
            <td>6</td>
            <td>4</td>
            <td>1</td>
            <td>1</td>
        </tr>
         <tr>
            <td>TS-2</td>
            <td>25</td>
            <td>15</td>
            <td>7</td>
            <td>3</td>
            <td>5</td>
         </tr>
        </tr>
    </table>
    </div>
    <div id="divrafi">
    <h1><b>Program Sarjana Terapan</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah lulusan </th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Lulusan Terlacak </th>
            <th class="w3-flat-belize-hole" colspan="3">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatakan Pekerjaan</th>
        </tr>
        <tr>
            <th class="w3-flat-belize-hole">WT < 3 bulan</th>
            <th class="w3-flat-belize-hole"> 3 <= WT <= 6 bulan </th>
            <th class="w3-flat-belize-hole">WT > 6 bulan</th>
        </tr>
        <tr>
            <td>TS-4</td>
            <td>20</td>
            <td>15</td>
            <td>10</td>
            <td>3</td>
            <td>2</td>

        </tr>
        <tr>
            <td>TS-3</td>
            <td>30</td>
            <td>20</td>
            <td>10</td>
            <td>5</td>
            <td>5</td>
        </tr>
         <tr>
            <td>TS-2</td>
            <td>25</td>
            <td>17</td>
            <td>5</td>
            <td>7</td>
            <td>5</td>
         </tr>
        </tr>
    </table>
    </div>

    <div id="divrafi"  >
    <h1><b>Kesesuaian Bidang Kerja Lulusan</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah lulusan </th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah Lulusan Terlacak </th>
            <th class="w3-flat-belize-hole" colspan="3">Jumlah Lulusan Terlacak dengan Tingkat Kesesuaian Bidang Kerja</th>
        </tr>
        <tr>
            <th class="w3-flat-belize-hole">Rendah</th>
            <th class="w3-flat-belize-hole">Sedang</th>
            <th class="w3-flat-belize-hole">Tinggi</th>
        </tr>
        <tr>
            <td>TS-4</td>
            <td>20</td>
            <td>10</td>
            <td>5</td>
            <td>3</td>
            <td>2</td>

        </tr>
        <tr>
            <td>TS-3</td>
            <td>30</td>
            <td>20</td>
            <td>10</td>
            <td>5</td>
            <td>5</td>
        </tr>
         <tr>
            <td>TS-2</td>
            <td>25</td>
            <td>17</td>
            <td>5</td>
            <td>7</td>
            <td>5</td>
         </tr>
        </tr>
    </table>
    </div>
</body>
</html>