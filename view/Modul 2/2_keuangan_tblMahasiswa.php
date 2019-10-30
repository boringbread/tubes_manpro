<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
        <?php
            include "connection.php";

            $temp = new SQL();
            $query = "EXEC [Tabel4_PenggunaanDana]";
            $res = $temp->executeStoredProcedure($query,[]);
        ?>

    <table>
        <tr>
            <th rowspan="2" style="text-align: center"><b>No.</b></th>
            <th rowspan="2" style="text-align: center; width: 50%"><b>Jenis Penggunaan</b></th>
            <th colspan="4" style="text-align: center"><b>Unit Pengelola Program Studi (Rp.)</b></th>
            <th colspan="4" style="text-align: center"><b>Program Studi (Rp.)</b></th>
        </tr>
        <tr>
            <td><b>TS-2</b></td>
            <td><b>TS-1</b></td>
            <td><b>TS</b></td>
            <td><b>Rata-rata</b></td>
            <td><b>TS-2</b></td>
            <td><b>TS-1</b></td>
            <td><b>TS</b></td>
            <td><b>Rata-rata</b></td>
        </tr>
        <?php
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
        <!-- <tr>
            <td>a. Biaya Dosen (Gaji, Honor)</td>
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
            <td>b. Biaya Tenaga Kependidikan (Gaji, Honor)</td>
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
            <td>c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</td>
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
            <td>d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</td>
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
            <td style="text-align: center">2</td>
            <td>Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>
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
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
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
            <td style="text-align: center">3</td>
            <td>Biaya Penelitian</td>
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
            <td style="text-align: center">4</td>
            <td>Biaya PkM</td>
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
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
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
            <td style="text-align: center">5</td>
            <td>Biaya Investasi SDM</td>
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
            <td style="text-align: center">6</td>
            <td>Biaya Investasi Sarana</td>
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
            <td style="text-align: center">7</td>
            <td>Biaya Investasi Prasarana</td>
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
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
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
            <td colspan="2" style="text-align: center"><b>TOTAL</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> -->
    </table>
</body>
</html>