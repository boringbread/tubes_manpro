<?php include '../header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Integrasi Kegiatan Penelitian</title>
    
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="../Modul 3/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../Modul 3/css/customStyle.css" rel="stylesheet" type="text/css">
    <title>8.f.1 tabel 1</title>

    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
        }
        th{
            background-color: lightgray;
            text-align: center;
        }
    </style>

</head>
<body>
    <table>
        <tr>
            <th style="text-align: center"><b>No</b></th>
            <th style="text-align: center"><b>JudulLuaran</b></th>
            <th style="text-align: center"><b>tahun</b></th>
            <th style="text-align: center"><b>keterangan</b></th>
        </tr>
        <!-- <tr>
            <th><b>1</b></th>
            <th><b>2</b></th>
            <th><b>3</b></th>
            <th><b>4</b></th>
        </tr>
        <tr>
            <td style="text-align: center"><b>I</b></td>
            <td><b>HKI<super>1)</super>:</b><br> c) Paten,<br> d) Paten Sederhana</td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   1. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   2. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   3. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr style="border-top: 2px solid black; border-bottom: 2px solid black;">
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
            <td><b>N<sub>A</sub>=</b></td>
            <td></td>
        </tr>

        
        <tr>
            <td style="text-align: center"><b>II</b></td>
            <td><b>HKI<super>1)</super>:</b><br> f) Hak Cipta,<br> d) Desain Produk Industri,<br>h) Perlindungan Varietas Tanaman (Sertifikat Perlindungan vaerietas Tanaman, Sertifikat Pelepasan Varietas, Sertifikat Pendaftaran Varietas),<br>i) Desain Tata Letak Sirkuit Terpadu,<br>j) dll.)</td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   1. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   2. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   3. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr style="border-top:double black; border-bottom: 2px solid black;">
            <td colspan="2" style="text-align: center;"><b>Jumlah</b></td>
            <td><b>N<sub>B</sub>=</b></td>
            <td></td>
        </tr>
        
        <tr>
            <td style="text-align: center"><b>III</b></td>
            <td><b>Teknologi Tepat Guna, Produk (Produk Terstandarisasi, Produk Tersetifikasi), Karya Seni, Rekayasa Sosial</b></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   1. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   2. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   3. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr style="border-top: 2px solid black; border-bottom: 2px solid black;">
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
            <td><b>N<sub>C</sub>=</b></td>
            <td></td>
        </tr>
        
        <tr>
            <td style="text-align: center"><b>IV</b></td>
            <td><b>Buku ber-ISBN, <i>Book Chapter</i></b></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   1. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   2. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td style="text-align: center"></td>
            <td><pre style="display: inline">   3. ...</pre></td>
            <td></td>
            <td></td>

        </tr>
        <tr style="border-top: 2px solid black; border-bottom: 2px solid black;">
            <td colspan="2" style="text-align: center"><b>Jumlah</b></td>
            <td><b>N<sub>D</sub>=</b></td>
            <td></td>
        </tr> -->
        <!---->
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
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "</tr>";
                    $counter=0;
                }
            ?>

    </table>
</body>
</html>
<?php include '../footer.php' ?>