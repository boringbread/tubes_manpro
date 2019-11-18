<?php include '../header.php'; ?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
 font-family:Arial;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
td{
	text-align: left;
}
th{
	text-align: center;
	background-color: lightgray;
}
#small{
	font-size:12px;
	background-color: lightgray;
    text-align:center	
}
#number{
	text-align: center;
}

#jumlah{
	border-top:double;
}

</style>
</head>
<body>
<?php
	include "../../connection.php";

	$temp = new SQL();
	$query = "EXEC [Tabel7_PKMDTPSMahasiswa]";
	$res = $temp->executeStoredProcedure($query,[]);
?>

<table style="width:100%">
  <tr>
    <th>No.</th>
    <th style="width:30%;">Nama Dosen</th>
    <th >Tema PkM sesuai Roadmap</th>
    <th style="width:20%;">Nama Mahasiswa</th>
	<th style="width:20%;">Judul Kegiatan</th>
	<th>Tahun</th>
  </tr>
  <tr>
    <td id="small">1</td>
    <td id="small">2</td>
    <td id="small">3</td>
    <td id="small">4</td>
    <td id="small">5</td>
    <td id="small">6</td>
  </tr>
  <?php
	   $counter = 0;
	   $startYear = "";
	   $endYear = "";
	   for($x=0; $x<sizeof($res); $x++){
		   echo "<tr>";
		   echo "<td id='number'>".($x+1)."</td>";
		   $counter++;
		   echo "<td>".$res[$x][$counter]."</td>";
		   $counter++;
		   echo "<td>".$res[$x][$counter]."</td>";
		   $counter++;
		   echo "<td>".$res[$x][$counter]."</td>";
		   $counter++;
		   echo "<td>".$res[$x][$counter]."</td>";
		   $counter++;
		   $str = $res[$x][$counter];
		   if($x==0){
			   $startYear = substr($str,0,4);
		   }
		   else if($x==sizeof($res)-1){
			   $endYear = substr($str,strlen($str)-4,strlen($str));
		   }
		   echo "<td>".$res[$x][$counter]."</td>";
		   $counter++;
		   echo "<tr>";
		   $counter=0;
	   } 
	   echo "<tr>";
	   echo "<td id='jumlah' colspan='4' style='text-align:center;'><b>Jumlah</b></td>";
	   echo "<td id='jumlah'>".sizeof($res)."</td>";
	   echo "<td id='jumlah' style='background-color:lightgray;'>".$startYear."-".$endYear."</td>";
	   echo "<tr>";
	?>
</table>

</body>
</html>
