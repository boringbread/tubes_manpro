<?php include '../header.php'; ?>
    <style>
        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
            color: black;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        body{
            color: white;
            /* background-color: white; */
        }
        h1{
            color: white
        }
    </style>
<body>

    <h1 class="w3-border-buttom">Profile Dosen</h1>
    <button onclick="showCont('tabel3a1')" class="w3-button w3-block w3-left-align">
    Tabel 3.a.1) Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang diakreditasi
    <div style="overflow-x:auto" id="tabel3a1" class="w3-container w3-hide">
        <table>
            <tr>
                <th rowspan=2>No</th>
                <th rowspan=2>Nama Dosen</th>
                <th rowspan=2>NIDN/NIDK</th>
                <th colspan=2>Pendidikan Pasca Sarjana</th>
                <th rowspan=2>Bidang Keahlian</th>
                <th rowspan=2>Kesesuaian dengan Kompetensi Inti PS</th>                
                <th rowspan=2>Jabatan Akademik</th>
                <th rowspan=2>Sertifikat Pendidik Profesional</th>
                <th rowspan=2>Mata Kuliah yang Diampu pada PS yang Diakreditasi</th>
                <th rowspan=2>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</th>
                <th rowspan=2>Mata Kuliah yang Diampu pada PS Lain</th>
            </tr>
            <tr>
                <th>Magister/Magister Terapan/Spesialis</th>
                <th>Doktor/Dokter Terapan/Spesialis</th>
            </tr>
            
            <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel3a1_DosenTetapUPPS]";
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
    </div>
</button>

<button onclick="showCont('tabel3a2')" class="w3-button w3-block w3-left-align">
    Tabel 3.a.2) Dosen Pembimbing Utama Tugas Akhir 
    <div style="overflow-x:auto" id="tabel3a2" class="w3-container w3-hide"> 
        <table>
            <tr>
                <th rowspan=3>No.</th>
                <th rowspan=3>Nama Dosen</th>
                <th colspan=8>Jumlah Mahasiswa yang Dibimbing</th>
                <th rowspan=3>Rata-rata Jumlah Bimbingan di semua Program/Semester</th>
            </tr>
            <tr>
                <th colspan=4>pada PS yang Diakreditasi</th>
                <th colspan=4>pada PS Lain di PT</th>
            </tr> 
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>Rata-rata</th>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>Rata-rata</th>
            </tr>

            <?php
                $temp = new SQL();
                $query = "EXEC Tabel3a2_DosenPembimbingUtamaTugasAkhir";
                $res = $temp->executeStoredProcedure($query,[]);

                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter = $counter+1;
                    echo "</tr>";
                    $counter=0;
                }
            ?>
        </table>
    </div>
</button>

<button onclick="showCont('tabel3a3')" class="w3-button w3-block w3-left-align">
    Tabel 3.a.3)
    <div style="overflow-x:auto" id="tabel3a3" class="w3-container w3-hide">
        <table>
        </table>
    </div>
</button>

<button onclick="showCont('tabel3a4')" class="w3-button w3-block w3-left-align">
        Tabel 3.a.4)Dosen Tidak Tetap yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi
        <div style="overflow-x:auto" id="tabel3a4" class="w3-container w3-hide">
        <table>
                <tr>
                    <th>No.</th>
                    <th>Nama Dosen</th>
                    <th>NIDN / NIDK 1)</th>
                    <th>Pendidikan Pasca Sarjana 2)</th>
                    <th>Bidang keahlian 3)</th>
                    <th>Jabatan Akademik</th>
                    <th>Sertifkat Pendidik Profesional 4)</th>
                    <th>Sertifikat Profesi/Kompetensi/Industri 5)</th>
                    <th>Mata Kuliah yang Diampu pada PS yang Diakreditasi 6)</th>
                    <th>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu 7)</th>
                </tr>
                <?php
                    $temp = new SQL();
                    $query = "EXEC Tabel3a4_DosenTidakTetapUPPS";
                    $res = $temp->executeStoredProcedure($query,[]);
                    $index = 1;
                    $counter = 0;
                    for($x = 0; $x < sizeof($res); $x++){
                        echo "<tr>";
                        $index++;
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
                        $counter = 0;
                    }
                ?>
            </table> 
        </div>
</button>

<button onclick="showCont('tabel3a5')" class="w3-button w3-block w3-left-align">
    tabel 3.a.5)
    <div style="overflow-x:auto" id="tabel3a5" class="w3-container w3-hide">

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
</html>


