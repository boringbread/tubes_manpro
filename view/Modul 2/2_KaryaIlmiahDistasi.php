<!DOCTYPE html>
<html lang="eng">
<head>
    <title></title>
    <style></style>
</head>
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
<body>
<h3>3.b.5 Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir</h3>
<table>
    <tr>
        <th rowspan = "2">No.</th>
        <th rowspan = "2">Nama Dosen</th>
        <th rowspan = "2">Judul Artikel yang Disitasi (Jurnal/Buku, Volume, Tahun, Nomor, Halaman)</th>
        <th rowspan = "2">Judul Sitasi</th>
    </tr>
    <tr>
        <td class="nomor">1</td>
        <td class="nomor">2</td>
        <td class="nomor">3</td>
        <td class="nomor">4</td>
    </tr>
    <?php
        include "connection.php";

        $temp = new SQL();
        $query = "EXEC Tabel3b5_KaryaIlmiahDistasi";
        $res = $temp->executeStoredProcedure($query,[]);

        $counter = 0;
        for($x=0; $x<sizeof(res); $x++){
            echo "<tr>";
            echo "<td>".$res[$res][$counter]."</td>";"
            $counter++;
            echo "<td>".$res[$res][$counter]."</td>";"
            $counter++;
            echo "<td>".$res[$res][$counter]."</td>";"
            $counter++;
            echo "<td>".$res[$res][$counter]."</td>";"
            $counter++;
            echo "<td>".$res[$res][$counter]."</td>";"
            $counter=0;
            echo "</tr>";
        }
        ?>
</table>
</body>
</html>