<!DOCTYPE html>
<html>
<head>
<style>
body{
	font-family: Arial;
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
	font-size:16px;
	background-color: lightgray;
    text-align:center
}
#number{
	text-align: center;
    font-weight: bold;
}

#border-top{
	border-top:double;
}

#keterangan{
	padding-left:22px;
}

#jumlah{ 
    border-top:double;
    border-bottom:solid;
	text-align:center;
}

#jumlah2{ 
    border-top:double;
	text-align:center;
}

#bag{
	border-top:none !important;
}

</style>
</head>
<body>
<?php
	include "../../connection.php";

	$temp = new SQL();
	$query = "EXEC [Tabel3b7_LuaranPenelitianPKMLainnya]";
	$res = $temp->executeStoredProcedure($query,[]);
?>
<table style="width:100%">
  <tr>
    <th>No.</th>
    <th>Judul Luaran Penelitian/PkM</th>
    <th>Tahun</th>
    <tH>Keterangan</th>
  </tr>
  <tr style="border-top:solid black;">
    <td id="small">1</td>
    <td id="small">2</td>
    <td id="small">3</td>
    <td id="small">4</td>
  </tr>
  <?php
	   $counter = 0;
	   $nomer = 0;
	   for($x=0; $x<sizeof($res); $x++){
		   if($res[$x][1] == "Jumlah"){
			   echo "<tr>";
			   $counter++;
			   echo "<td id='jumlah' colspan='2'>"."<b>".$res[$x][$counter]."</b>"."</td>";
			   echo "<td id='jumlah'>N<sub>A</sub> =</td>";
			   $counter++;
			   echo "<td id='jumlah'>".$res[$x][$counter]."</td>";
			   $counter++;
			   echo "<tr>";
			   $counter=0;
			   $nomer = 0;
		   }
		   else{
			   echo "<tr>";
			   echo "<td id='number'>".$res[$x][$counter]."</td>";
			   if($res[$x][$counter]==""){
				   $counter++;
				   echo "<td id='keterangan'>".$nomer.". ".$res[$x][$counter]."</td>";
			   }
			   else{
				   $counter++;
				   echo "<td>"."<b>".$res[$x][$counter]."</b>"."</td>";
				   
			   }
			   $nomer++;
			   $counter++;
			   echo "<td>".$res[$x][$counter]."</td>";
			   $counter++;
			   echo "<td>".$res[$x][$counter]."</td>";
			   $counter++;
			   echo "<tr>";
			   $counter=0;
		   }
		   
	   } 
	?>

  
  
</table>

</body>
</html>
