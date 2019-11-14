<<<<<<< HEAD:view/Modul 4/4_(8.e.2)kepuasanPengguna.php
<?php include '../header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Integrasi Kegiatan Penelitian</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../Modul 3/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../Modul 3/css/customStyle.css" rel="stylesheet" type="text/css">
    <title>8.e.2 Kepuasan Pengguna</title>

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
=======
<?php include "../header.php"; ?>
<style type="text/css">
    body{
        color:white;
    }
</style>
    <h1><b>Masa Studi Lulusan Program Diploma Tiga</b></h1>
>>>>>>> Modul4:view/Modul 4/4_Efektifitas.php
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

    <h1><b>Daaya Saing Lulusan Program Diploma Tiga</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah lulusan </th>row
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
    <h1><b>Daaya Saing Lulusan Program Diploma Tiga</b></h1>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Lulus</th>
            <th class="w3-flat-belize-hole" rowspan="2">Jumlah lulusan </th>row
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
</body>
</html>
<?php include '../footer.php' ?>