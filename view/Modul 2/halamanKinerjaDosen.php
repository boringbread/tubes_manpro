<?php include '../header.php'; ?>
<style>
        table, th, td {
            border: 1px solid black;
            border: 1px solid black;
            border-collapse: collapse;
            color : white;
        }
        th, td {
            padding: 5px;
        }
        body{
            color: white;
        }
        h1{
            color : white;
        }
    </style>

    <div class="w3-container">
        <h4>Tabel 3.b.1) Pengakuan/Rekognisi DTPS</h4>
        <h1 class="w3-border-buttom">Kinerja Dosen</h1>
        <button onclick="showcount('tabel3b1')" class="w3-button w3-block w3-left-align">
        Tabel 3.b.1) Pengakuan/Rekognisi DTPS
        <div style="overflow-x:auto" id="tabel3b1" class="w3-container w3-hide">
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Nama Dosen</th>
                <th rowspan="2">Bidang Keahlian</th>
                <th rowspan="2">Rekognisi dan Bukti Pendukung</th>
                <th colspan="3">Tingkat</th>
                <th rowspan="2">Tahun</th>
            </tr>
            <tr>
                <th>Wilayah</th>
                <th>Nasional</th>
                <th>Internasional</th>
            </tr>
            <?php
                include "../../connection.php";
                $temp = new SQL();
                $query = "EXEC Tabel3b1_RekognisiDTPS";
                $res = $temp->executeStoredProcedure($query,[]);
                $index = 1;
                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
                    // echo "<td>".$index."</td>";
                    // $index++;
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
                    $counter=0;
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    </button>

    <div class="tabel3b2">
    <h4>3.b.2) Penelitian DTPS</h4>
    <button onclick="showcount('tabel3b2')" class="w3-button w3-block w3-left-align">
        Tabel 3.b.2) Penelitian DTPS
        <div style="overflow-x:auto" id="tabel3b2" class="w3-container w3-hide">
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Sumber Pembiayaan</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                    <th>TS-2</th>
                    <th>TS-1</th>
                    <th>TS</th>
            </tr>
            <?php
                $temp = new SQL();
                $query = "EXEC Tabel3b2_PenelitianDTPS";
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
                    // echo "<td>".$res[$x][$counter]."</td>";
                    // $counter++;
                    // echo "<td>".$res[$x][$counter]."</td>";
                    // $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter=0;
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    </button>
        <h4>3.b.3) PKM DTPS</h4>
    <div class="tabel3b3">
    <button onclick="showcount('tabel3b3')" class="w3-button w3-block w3-left-align">
        Tabel 3.b.3) PKM DTPS
        <div style="overflow-x:auto" id="tabel3b3" class="w3-container w3-hide">
    <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Sumber Pembayaran</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">judul</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-3</th>
                <th>TS</th>
            </tr>
            
            <?php
            $temp = new SQL();
            $query = "EXEC tabel3b3_PKMDTPS";
            $res = $temp->executeStoredProcedure($query,[]);
            $index = 1;
            $counter = 0;
            for($x=0; $x<sizeof($res); $x++){
                echo "<tr>";
                echo "<td>".$index."</td>";
                $index++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$x][$counter]."</td>";
                $counter++;
                echo "</tr>";
                $counter=0;
            }
            ?>`
        </table>
    </div>
    </button>

    <div class="w3-container">
        <h4></h4>
    </div>

    <div class="w3-container">
    <h4>3.b.5) Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir</h4>
    <table>
        <tr>
            <th rowspan = "2">No.</th>
            <th rowspan = "2">Nama Dosen</th>
            <th rowspan = "2">Judul Artikel yang Disitasi (Jurnal/Buku, Volume, Tahun, Nomor, Halaman)</th>
            <th rowspan = "2">Judul Sitasi</th>
        </tr>
        <?php
            $temp = new SQL();
            $query = "EXEC Tabel3b5_KaryaIlmiahDistasi";
            $res = $temp->executeStoredProcedure($query,[]);
            $counter = 0;
            for($x=0; $x<sizeof(res); $x++){
                echo "<tr>";
                echo "<td>".$res[$res][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$res][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$res][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$res][$counter]."</td>";
                $counter++;
                echo "<td>".$res[$res][$counter]."</td>";
                $counter=0;
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div class="w3-container">

    </div>