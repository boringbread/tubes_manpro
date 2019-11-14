<!DOCTYPE HTML>

<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0;}
	.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}	
	.tg .tg-ussh{font-weight:bold;font-size:11px;text-align:center;vertical-align:middle}
	.tg .tg-wa1i{font-weight:bold;text-align:center;vertical-align:middle}
	.tg .tg-nrix{text-align:center;vertical-align:middle}
	.tg .tg-t4kw{font-size:11px;text-align:center;vertical-align:middle}
</style>

<body>
	<h3> Table 3A3. Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang diakreditasi </h3>
	
	<table class="tg" style="undefined;table-layout: fixed; width: 980px">
		<colgroup>
			<col style="width: 35px">
			<col style="width: 100px">
			<col style="width: 100px">
			<col style="width: 90px">
			<col style="width: 90px">
			<col style="width: 90px">
			<col style="width: 120px">
			<col style="width: 100px">
			<col style="width: 120px">
			<col style="width: 100px">
			<col style="width: 90px">
		</colgroup>
		<tr>
			<th class="tg-wa1i" rowspan="3">Nama Dosen (DT)</th>
			<th class="tg-wa1i" rowspan="3">DTPS1)</th>
			<th class="tg-wa1i" colspan="6">Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
			<th class="tg-wa1i" rowspan="3">Jumlah (sks)</th>
			<th class="tg-wa1i" rowspan="3">Rata-rata per Semester (sks)</th>
		</tr>
		<tr>
			<td class="tg-wa1i" colspan="3">Pendidikan: Pembelajaran dan Pembimbingan</td>
			<td class="tg-wa1i" rowspan="2">Penelitian</td>
			<td class="tg-wa1i" rowspan="2">PkM</td>
			<td class="tg-wa1i" rowspan="2">Tugas Tambahan dan/atau Penunjang</td>
		</tr>
		<tr>
			<td class="tg-wa1i">PS yang Diakreditasi</td>
			<td class="tg-wa1i">PS Lain di dalam PT</td>
			<td class="tg-wa1i">PS Lain di luar PT</td>
		</tr>
		<?php
                include "connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel3a1_DosenTetapUPPS]";
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
		<tr>
			<td class="tg-wa1i" colspan="9">Rata-rata DT</td>
			<td class="tg-t4kw"></td>
			<td class="tg-t4kw"></td>
		</tr>
		<tr>
			<td class="tg-wa1i" colspan="9">Rata-rata DTPS</td>
			<td class="tg-nrix"></td>
			<td class="tg-nrix"></td>
		</tr>
	</table>
</body