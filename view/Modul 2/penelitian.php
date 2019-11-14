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
        <table>
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Nama Dosen</th>
                    <th rowspan="2">Tema Penelitian sesuai Roadmap</th>
                    <th rowspan="2">Nama Mahasiswa</th>
                    <th rowspan="2">Judul tesis/Disertai</th>
                    <th rowspan="2">Tahun</th>
                </tr>
                <tr>

                </tr>

                <tr style="text-align: center">
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                </tr>

                <tr style="text-align: center">
                        <th>1</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                </tr>

                <tr style="text-align: center">
                        <th>2</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                </tr>

                <tr style="text-align: center">
                        <th>...</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                </tr>

                <tr style="text-align: center">
                        <th colspan="4">Jumlah</th>
                        <th></th>
                        <th></th>
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
</html>


