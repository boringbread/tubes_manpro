<?php include '../header.php'; ?>
    <style>
        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
            color: white;
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

    <h1 class="w3-border-buttom">Penelitian</h1>
    <button onclick="showCont('tabel6a')" class="w3-button w3-block w3-left-align">
    Tabel 6.a) Penelitian DTPS yang melibatkan mahasiswa 
    <div style="overflow-x:auto" id="tabel6a" class="w3-container w3-hide">
    <table class="tg" style="undefined;table-layout: fixed; width: 640px">
		<colgroup>
			<col style="width: 30px">
			<col style="width: 130px">
			<col style="width: 130px">
			<col style="width: 130px">
			<col style="width: 120px">
			<col style="width: 120px">
		</colgroup>
		<tr>
			<th class="tg-wa1i">No</th>
			<th class="tg-wa1i">Nama Dosen</th>
			<th class="tg-wa1i">Tema Penelitian sesuai RoadMap</th>
			<th class="tg-wa1i">Nama Mahasiswa</th>
			<th class="tg-wa1i">Judul Kegiatan 1)</th>
			<th class="tg-wa1i">Tahun</th>
		</tr>
		<?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel6a_PenelitianDTPSMahasiswa]";
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
					echo "</tr>";
					
					
                    $counter=0;
                }
            ?>
		<tr>
			<td class="tg-wa1i" colspan="4">Jumlah</td>
			<td class="tg-nrix"></td>
			<td class="tg-nrix"></td>
		</tr>
	</table>
    </div>
</button>

<button onclick="showCont('tabel6b')" class="w3-button w3-block w3-left-align">
    Tabel 6.b) Penelitian DTPS yang menjadi rujukan tema tesis/disertasi
    <div style="overflow-x:auto" id="tabel6b" class="w3-container w3-hide"> 
        <!-- isi table 6.b disini -->
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


