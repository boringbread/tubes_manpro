<?php include '../header.php';?>
<style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            color: white;
        }
        th, td{
            padding: 5px;
            text-align: left;
            color: white;
        }
</style>
<div class="container">
    <h4 style="color: white;">Tabel Kerjasama</h4>
    <br>
    <table>
        <tr>
            <th style="text-align: center;"><b>No.</b></th>
            <th style="text-align: center;"><b>Lembaga Mitra</b></th>
            <th style="text-align: center;"><b>Tingkat</b></th>
            <th style="text-align: center;"><b>Judul Kegiatan Kerjasama</b></th>
            <th style="text-align: center;"><b>Manfaat bagi PS yang Diakreditasi</b></th>
            <th style="text-align: center;"><b>Waktu Mulai</b></th>
            <th style="text-align: center;"><b>Waktu Berakhir</b></th>
            <th style="text-align: center;"><b>Bukti Kerjasama</b></th>
        </tr>
        <?php
        include "../../connection.php";
        $temp = new SQL();
        $query="SELECT * FROM Kerjasama";
        $res = $temp->executeSelectQuery($query,[]);

        $counter=0;
        for($x=0; $x<sizeof($res); $x++){
            echo "<tr>";
            echo "<td>".$res[$x][$counter]."</td>";
            $counter=$counter+1;
            echo "<td>".$res[$x][$counter]."</td>";
            $counter=$counter+1;
            echo "<td>".$res[$x][$counter]."</td>";
            $counter=$counter+1;
            echo "<td>".$res[$x][$counter]."</td>";
            $counter=$counter+1;
            echo "<td>".$res[$x][$counter]."</td>";
            $counter=$counter+1;
            if($res[$x][$counter] != null ){
                echo "<td>".$res[$x][$counter]->format('Y-m-d H:i:s')."</td>";
            }else{
                echo "<td></td>";
            }
            $counter=$counter+1;
            if($res[$x][$counter] != null ){
                echo "<td>".$res[$x][$counter]->format('Y-m-d H:i:s')."</td>";
            }else{
                echo "<td></td>";
            }
            $counter=$counter+1;
            echo "<td>".$res[$x][$counter]."</td>";
            $counter=$counter+1;
            echo "</tr>";
            $counter=0;
        }
        ?>
    </table>
</div>