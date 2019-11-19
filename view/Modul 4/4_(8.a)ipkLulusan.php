<<<<<<< HEAD
<?php include '../header.php' ?>
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
    <!-- YOUR TABLE HERE -->
    <div class="w3-center">
      <p class="w3-margin">Berikut data Indek Prestasi Kumulatif lulusan Unika Parahyangan dalam 3 tahun terakhir.</p>
    </div>
    <div class="w3-container ">
      <h1 class="w3-center w3-margin">Tabel IPK Lulusan</h1>
        <table style="width: 100%; height: 50vh;" class="w3-centered w3-border w3-bordered w3-white">
          <tr>
            <th rowspan="2">Tahun Lulus</th>
            <th rowspan="2">Jumlah Lulusan</th>
            <th colspan="3">Indeks Prestasi Kumulatif</th>  
          </tr>
          <tr>
            <th>Min</th>
            <th>Rata-Rata</th>
            <th>Maks</th>
          </tr>
          <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
          </tr>
          
          <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "SELECT * FROM v_8a";
                $res = $temp->executeSelectQuery($query,[]);

          
                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
                    echo "<td>TS".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    echo "</tr>";


                    $counter=0;
                   
                }

              
                
                $dataPoints1 = array(
                  array("label"=> "TS-2", "y"=> 57),
                  array("label"=> "TS-1", "y"=> 48),
                  array("label"=> "TS", "y"=> 68),
                );
                $dataPoints2 = array(
                  array("label"=> "TS-2", "y"=> 2.0),
                  array("label"=> "TS-1", "y"=> 2.1),
                  array("label"=> "TS", "y"=> 2.0),
                );
                $dataPoints3 = array(
                  array("label"=> "TS-2", "y"=> 2.9),
                  array("label"=> "TS-1", "y"=> 3.0),
                  array("label"=> "TS", "y"=> 2.9),
                );
                $dataPoints4 = array(
                  array("label"=> "TS-2", "y"=> 3.9),
                  array("label"=> "TS-1", "y"=> 3.9),
                  array("label"=> "TS", "y"=> 3.8)
                );
            ?>
          
        </table>

        <br>
        <br>

        <script>
        window.onload = function () {
        
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "light2",
          title:{
            text: "Indek Prestasi Kumulatif lulusan Unika Parahyangan dalam 3 tahun terakhir"
          },
          legend:{
            cursor: "pointer",
            verticalAlign: "center",
            horizontalAlign: "right",
            itemclick: toggleDataSeries
          },
          data: [{
            type: "column",
            name: "Jumlah Lulusan",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
          },{
            type: "column",
            name: "Min. IPK",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
          },{          
            type: "column",
            name: "Rata-rata IPK",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
          
            },{
            type: "column",
            name: "Maks. IPK",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
            }
          ]
        });
        chart.render();
        
        function toggleDataSeries(e){
          if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
          }
          else{
            e.dataSeries.visible = true;
          }
          chart.render();
        }
        
        }
        </script>
    </div>

      
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      
</body>
<!-- Footer -->
<!-- <footer class="site-footer">
   <h2 style="color: white;">Contact Us</h2>
   <p style = "color:white;">Program Studi Teknik Informatika, Fakultas Teknologi Informasi dan Sains Gedung 9 Jalan Ciumbeluit 94, Bandung 40141 Indonesia</p>
   <p style = "color: white;">ph. (022)2032655, 2042004 ext. 100114 Fax. (022) 2031110</p>
   <a href="https://www.instagram.com/if.unpar/"><img src="images/ig.png" style="width:2%; heigth: 1%; margin-top: -16%; margin-left: 13%"></a>
   <a href="https://twitter.com/if_unpar"><img src="images/twt.png" style="width:3%; heigth: 1%; margin-top: -16%;"></a>
   <a href="https://www.youtube.com/user/unparofficial"><img src="images/ytb.png" style="width:3%; heigth: 1%; margin-top: -16%;"></a>
   <a href="https://web.facebook.com/if.unpar/?_rdc=1&_rdr"><img src="images/fb.png" style="width:2%; heigth: 1%; margin-top: -16%;"></a>
  </footer> -->
=======
<?php include '../header.php' ?>
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
    <!-- YOUR TABLE HERE -->
    <div class="w3-center">
      <p class="w3-margin">Berikut data Indek Prestasi Kumulatif lulusan Unika Parahyangan dalam 3 tahun terakhir.</p>
    </div>
    <div class="w3-container ">
      <h1 class="w3-center w3-margin">Tabel IPK Lulusan</h1>
        <table style="width: 100%; height: 50vh;" class="w3-centered w3-border w3-bordered w3-white">
          <tr>
            <th rowspan="2">Tahun Lulus</th>
            <th rowspan="2">Jumlah Lulusan</th>
            <th colspan="3">Indeks Prestasi Kumulatif</th>  
          </tr>
          <tr>
            <th>Min</th>
            <th>Rata-Rata</th>
            <th>Maks</th>
          </tr>
          <tr>

            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
          </tr>
          
          <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "SELECT * FROM v_8a";
                $res = $temp->executeSelectQuery($query,[]);

          
                $counter = 0;
                for($x=0; $x<sizeof($res); $x++){
                    echo "<tr>";
                    echo "<td>TS".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    $counter++;
                    echo "<td>".$res[$x][$counter]."</td>";
                    echo "</tr>";


                    $counter=0;
                   
                }

              
                
                $dataPoints1 = array(
                  array("label"=> "TS-2", "y"=> 57),
                  array("label"=> "TS-1", "y"=> 48),
                  array("label"=> "TS", "y"=> 68),
                );
                $dataPoints2 = array(
                  array("label"=> "TS-2", "y"=> 2.0),
                  array("label"=> "TS-1", "y"=> 2.1),
                  array("label"=> "TS", "y"=> 2.0),
                );
                $dataPoints3 = array(
                  array("label"=> "TS-2", "y"=> 2.9),
                  array("label"=> "TS-1", "y"=> 3.0),
                  array("label"=> "TS", "y"=> 2.9),
                );
                $dataPoints4 = array(
                  array("label"=> "TS-2", "y"=> 3.9),
                  array("label"=> "TS-1", "y"=> 3.9),
                  array("label"=> "TS", "y"=> 3.8)
                );
            ?>

            <td>TS-1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>TS-2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>TS</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          
        </table>

        <br>
        <br>

        <script>
        window.onload = function () {
        
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "light2",
          title:{
            text: "Indek Prestasi Kumulatif lulusan Unika Parahyangan dalam 3 tahun terakhir"
          },
          legend:{
            cursor: "pointer",
            verticalAlign: "center",
            horizontalAlign: "right",
            itemclick: toggleDataSeries
          },
          data: [{
            type: "column",
            name: "Jumlah Lulusan",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
          },{
            type: "column",
            name: "Min. IPK",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
          },{          
            type: "column",
            name: "Rata-rata IPK",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
          
            },{
            type: "column",
            name: "Maks. IPK",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
            }
          ]
        });
        chart.render();
        
        function toggleDataSeries(e){
          if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
          }
          else{
            e.dataSeries.visible = true;
          }
          chart.render();
        }
        
        }
        </script>
    </div>

      
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      
</body>
<!-- Footer -->
<!-- <footer class="site-footer">
   <h2 style="color: white;">Contact Us</h2>
   <p style = "color:white;">Program Studi Teknik Informatika, Fakultas Teknologi Informasi dan Sains Gedung 9 Jalan Ciumbeluit 94, Bandung 40141 Indonesia</p>
   <p style = "color: white;">ph. (022)2032655, 2042004 ext. 100114 Fax. (022) 2031110</p>
   <a href="https://www.instagram.com/if.unpar/"><img src="images/ig.png" style="width:2%; heigth: 1%; margin-top: -16%; margin-left: 13%"></a>
   <a href="https://twitter.com/if_unpar"><img src="images/twt.png" style="width:3%; heigth: 1%; margin-top: -16%;"></a>
   <a href="https://www.youtube.com/user/unparofficial"><img src="images/ytb.png" style="width:3%; heigth: 1%; margin-top: -16%;"></a>
   <a href="https://web.facebook.com/if.unpar/?_rdc=1&_rdr"><img src="images/fb.png" style="width:2%; heigth: 1%; margin-top: -16%;"></a>
  </footer> -->
>>>>>>> Modul4
</html>