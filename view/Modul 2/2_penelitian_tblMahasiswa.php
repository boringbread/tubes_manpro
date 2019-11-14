<!DOCTYPE HTML>

<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0;}
	.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg .tg-wa1i{font-weight:bold;text-align:center;vertical-align:middle}
	.tg .tg-nrix{text-align:center;vertical-align:middle}
</style>

<body>
	<h3>Tabel 6.a Penelitian DTPS yang melibatkan mahasiswa</h3>
	
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
                include "connection.php";

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
</body