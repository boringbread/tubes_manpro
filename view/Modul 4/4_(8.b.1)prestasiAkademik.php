
<?php
    include "../header.php";
?>

<style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        body{
            color: white;
        }
        
    </style>

    <h1><b>Prestasi Akademik</b></h1> <br>
    <table>
        <tr>
            <th class="w3-flat-belize-hole" rowspan="2">No</th>
            <th class="w3-flat-belize-hole" rowspan="2">Nama Kegiatan</th>
            <th class="w3-flat-belize-hole" rowspan="2">Tahun Perolehan</th>
            <th class="w3-flat-belize-hole" colspan="3">Tingkat</th>
            <th class="w3-flat-belize-hole" rowspan="2">Prestasi yang Dicapai</th>
        </tr>
        <tr>
            <th class="w3-flat-belize-hole">Lokal/Wilayah</th>
            <th class="w3-flat-belize-hole">Nasional</th>
            <th class="w3-flat-belize-hole">Internasional</th>
        </tr>
        
        <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "SELECT * FROM prestasi_mhs WHERE Akademik = 'Akademik'";
                $res = $temp->executeSelectQuery($query,[]);

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

                    if($res[$x][$counter]=="Lokal"){
                        echo "<td> v </td>";
                        $counter++;
                        echo "<td></td>";
                        // $counter++;
                        echo "<td></td>";
                        // $counter++;                    
                    }
                    
                    else if($res[$x][$counter]=="Internasional"){
                        echo "<td></td>";
                        $counter++;
                        echo "<td></td>";
                        // $counter++;
                        echo "<td>v</td>";
                        // $counter++;                    
                    }

                    else if($res[$x][$counter]=="Nasional"){
                        echo "<td></td>";
                        $counter++;
                        echo "<td>v</td>";
                        // $counter++;
                        echo "<td></td>";
                        // $counter++;                           
                    }
                    
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    
                    $counter=0;
                }
            ?>

    </table>
</body>
</html>