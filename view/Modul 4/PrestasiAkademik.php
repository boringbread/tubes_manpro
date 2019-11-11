
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
            text-align: center;
        }
        body{
            color: white;
        }
        
    </style>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
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

                $countLocal=0;
                $countNasional=0;
                $countInternasional=0;
                
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
                        $countLocal++;
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
                        $countInternasional++;
                        // $counter++;                    
                    }

                    else if($res[$x][$counter]=="Nasional"){
                        echo "<td></td>";
                        $counter++;
                        echo "<td>v</td>";
                        $countNasional++;
                        // $counter++;
                        echo "<td></td>";
                        // $counter++;                           
                    }
                    
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    
                    $counter=0;
                }

                $jumlah=$index-1;
                echo "<tr>";
                echo "<td colspan=3>Jumlah</td>";
                echo "<td >$countLocal</td>";
                echo "<td>$countNasional</td>";
                echo "<td>$countInternasional</td>";
                echo "<td>$jumlah</td>";
                echo "</tr>";
                

                
            ?>

    </table>
    <br>
    <br>

    <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
  

    <br>
    <br>

    <h1><b>Prestasi Nonakademik</b></h1>
    <table class="w3-center">
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
                // include "../../connection.php";

                $temp = new SQL();
                $query = "SELECT * FROM prestasi_mhs WHERE Akademik = 'Non-akademik'";
                $res = $temp->executeSelectQuery($query,[]);

                $index = 1;
                $counter = 0;

                $countLocal=0;
                $countNasional=0;
                $countInternasional=0;
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
                        $countLocal++;
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
                        $countInternasional++;
                        // $counter++;                    
                    }

                    else if($res[$x][$counter]=="Nasional"){
                        echo "<td></td>";
                        $counter++;
                        echo "<td>v</td>";
                        $countNasional++;
                        // $counter++;
                        echo "<td></td>";
                        // $counter++;                           
                    }
                    
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    
                    $counter=0;
                }

                $jumlah=$index-1;
                echo "<tr>";
                echo "<td colspan=3>Jumlah</td>";
                echo "<td >$countLocal</td>";
                echo "<td>$countNasional</td>";
                echo "<td>$countInternasional</td>";
                echo "<td>$jumlah</td>";
                echo "</tr>";
            ?>

    </table>

    <br>
    <br>

    <div id="chartContainer1" style="height: 300px; width: 100%;"></div>

    <br>
    <br>

    <script>
  
    window.onload = function () {
        
        var chart = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            
            title:{
                text:"Prestasi Non-Akademik Mahasiswa"
            },
            axisX:{
                interval: 1
            },
            axisY2:{
                interlacedColor: "rgba(1,77,101,.2)",
                gridColor: "rgba(1,77,101,.1)",
                title: "Jumlah Prestasi"
            },
            data: [{
                type: "bar",
                name: "Prestasi Mahasiswa",
                axisYType: "secondary",
                color: "#014D65",
                dataPoints: [
                    { y: 8, label: "Lokal" },
                    { y: 3, label: "Nasional" },
                    { y: 2, label: "Internasional" },
                ]
            }]
        });

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            
            title:{
                text:"Prestasi Akademik Mahasiswa"
            },
            axisX:{
                interval: 1
            },
            axisY2:{
                interlacedColor: "rgba(1,77,101,.2)",
                gridColor: "rgba(1,77,101,.1)",
                title: "Jumlah Prestasi"
            },
            data: [{
                type: "bar",
                name: "Prestasi Mahasiswa",
                axisYType: "secondary",
                color: "#014D65",
                dataPoints: [
                    { y: 0, label: "Lokal" },
                    { y: 5, label: "Nasional" },
                    { y: 6, label: "Internasional" },
                ]
            }]
        });

    chart.render();
    chart2.render();

    }
</script>
</body>
</html>