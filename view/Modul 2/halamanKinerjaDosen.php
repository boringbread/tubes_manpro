<?php include '../header.php'; ?>
    <style>
        table, th, td {
            border: 2px solid white;
            border-collapse: collapse;
            color : white;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        body{
            color: white;
        }
        h1{
            color : white;
        }
    </style>
<body>
    
    <h1 class="w3-border-buttom">Kinerja Dosen</h1>
    <button onclick="showCont('tabel3b1')" class="w3-button w3-block w3-left-align">
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

    <button onclick="showCont('tabel3b2')" class="w3-button w3-block w3-left-align">
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

    <button onclick="showCont('tabel3b3')" class="w3-button w3-block w3-left-align">
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
                ?>
            </table>
        </div>
    </button>

    <button onclick="showCont('tabel3b4')" class="w3-button w3-block w3-left-align">
        Tabel 3.b.4) Pagelaran/pameran/presentasi/publikasi Ilmiah DTPS 
        <div style="overflow-x:auto" id="tabel3b4" class="w3-container w3-hide">            
        <table>
            <tr>
                <th rowspan="2">Media Publikasi</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">Jumlah </th>
            </tr>

            </tr>
                <td>TS-2</td>
                <td>TS-1</td>
                <td>TS</td>
            </tr>

            <?php
                $temp = new SQL();
                $query = "EXEC [Tabel3b4_PartJurnal]";
                $res = $temp->executeStoredProcedure($query,[]);
                $index = 0;
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
                    echo "</tr>";
                    $counter=0;
                }
            ?>
        </table>
    </div>
</button>

    <button onclick="showCont('tabel3b5')" class="w3-button w3-block w3-left-align">
        Tabel 3.b.5) Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir
        <div style="overflow-x:auto" id="tabel3b5" class="w3-container w3-hide">
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
                $counter=0;
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    </button>

    <button onclick="showCont('tabel3b6')" class="w3-button w3-block w3-left-align">
        Tabel 3.b.6) Produk/jasa DTPS yang diadopsi oleh industri/masyarakat 
        <div style="overflow-x:auto" id="tabel3b6" class="w3-container w3-hide">
        <table>
            <tr>
                <th rowspan = "2">No.</th>
                <th rowspan = "2">Nama Dosen</th>
                <th rowspan = "2">Nama Produk/Jasa</th>
                <th rowspan = "2">Deskripsi Produk/Jasa</th>
                <th rowspan = "2">Bukti</th>
            </tr>
        </table>
    </div>
</button>

<button onclick="showCont('tabel3b7')" class="w3-button w3-block w3-left-align">
    3.b.7) Luaran Penelitian/PkM Lainnya oleh DTPS
    <div style="overflow-x:auto" id="tabel3b7" class="w3-container w3-hide">
        <table>
            <tr>
                <th>No.</th>
                <th>Judul Luaran Penelitian/PkM</th>
                <th>Tahun</th>
                <th>Keterangan</th>
            </tr>
        </table>
    </div>
    </button>
    <script>
        function showCont(id){
        var x = document.getElementById(id);

            if(x.className.indexOf("w3-show")==-1){
                x.className+="w3-show";
            }
            else{
                x.className+= x.className.replace("w3-show","");
            }
        }
    </script>
</body>