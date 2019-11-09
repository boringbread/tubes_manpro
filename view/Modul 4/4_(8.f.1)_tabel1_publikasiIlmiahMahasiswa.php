<?php include '../header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title>Tabel 8.f.1) Publikasi Ilmiah mahasiswa</title>
        <style>
                table,
                th,
                td {
                        border: 1px solid black;
                        border-collapse: collapse;
                        text-align: center;
                        position: center;
                }

                th,
                td {
                        padding: 5px;
                        text-align: left;
                }

                body {
                        color: white;
                }
        </style>
</head>

<body>
        <h1><b>Publikasi Ilmiah mahasiswa</b></h1> <br>
        <table>
                <tr>
                        <th class="w3-flat-belize-hole" rowspan="2">No</th>
                        <th class="w3-flat-belize-hole" rowspan="2">Jenis Publikasi</th>
                        <th class="w3-flat-belize-hole" colspan="3">Jumlah Judul</th>
                        <th class="w3-flat-belize-hole" rowspan="2">Jumlah</th>
                </tr>
                <tr>
                        <th class="w3-flat-belize-hole">ts2</th>
                        <th class="w3-flat-belize-hole">ts1</th>
                        <th class="w3-flat-belize-hole">ts</th>
                </tr>



                <!-- </tr>
            <td style="background-color:lightgrey;"><b>TS-2</td></b>
            <td  style="background-color:lightgrey;"><b>TS-1</td></b>
            <td  style="background-color:lightgrey;"><b>TS</td></b>
        </tr>

        <tr>
            <th  style="background-color:lightgrey;">1</th>
            <th style="background-color:lightgrey;">2</th>
            <th  style="background-color:lightgrey;">3</th>
            <th  style="background-color:lightgrey;">4</th>
            <th  style="background-color:lightgrey;">5</th>
            <th  style="background-color:lightgrey;">6</th>
        </tr>

        <tr>
                <th>1</th>
                <th style="text-align: left">Jurnal nasional tidak terakreditasi </th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>A1</sub> =  </th>
        </tr>

        <tr>
                <th>2</th>
                <th style="text-align: left">Jurnal nasional terakreditasi</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>A2</sub> =  </th>
        </tr>

        <tr>
                <th>3</th>
                <th style="text-align: left">Jurnal internasional</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>A3</sub> =  </th>
        </tr>

        <tr>
                <th>4</th>
                <th style="text-align: left">Jurnal internasional bereputasi </th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>A4</sub> =  </th>
        </tr>

        <tr>
                <th>5</th>
                <th style="text-align: left">Seminar wilayah/lokal/perguruan
tinggi</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>B1</sub> =  </th>
        </tr>

        <tr>
                <th>6</th>
                <th style="text-align: left">Seminar nasional</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>B2</sub> =  </th>
        </tr>
        
        <tr>
                <th>7</th>
                <th style="text-align: left">Seminar internasional</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>B3</sub> =  </th>
        </tr>

        <tr>
                <th>8</th>
                <th style="text-align: left">Tulisan di media massa wilayah</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>C1</sub> =  </th>
        </tr>

        <tr>
                <th>9</th>
                <th style="text-align: left">Tulisan di media massa nasional</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>C2</sub> =  </th>
        </tr>

        <tr>
                <th>10</th>
                <th style="text-align: left">Tulisan di media massa internasional</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <th>N<sub>C3</sub> =  </th>
        </tr>

    <tr>
        <th colspan=2>Jumlah</th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>

    </tr> -->

                <?php
                include "../../connection.php";

                $temp = new SQL();
                $query = "EXEC [Tabel8f1_partJurnalMahasiswa]";
                $res = $temp->executeStoredProcedure($query, []);

                $index = 1;
                $counter = 0;
                for ($x = 0; $x < sizeof($res); $x++) {
                        echo "<tr>";
                        echo "<td>" . $index . "</td>";
                        $index++;
                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;


                        if ($res[$x][$counter] == "ts2") {
                                echo "<td> v </td>";
                                $counter++;
                                echo "<td></td>";
                                // $counter++;
                                echo "<td></td>";
                                // $counter++;                    
                        } else if ($res[$x][$counter] == "ts1") {
                                echo "<td></td>";
                                $counter++;
                                echo "<td></td>";
                                // $counter++;
                                echo "<td>v</td>";
                                // $counter++;                    
                        } else if ($res[$x][$counter] == "ts") {
                                echo "<td></td>";
                                $counter++;
                                echo "<td>v</td>";
                                // $counter++;
                                echo "<td></td>";
                                // $counter++;                           
                        }

                        echo "<td>" . $res[$x][$counter] . "</td>";
                        $counter++;

                        $counter = 0;
                }
                ?>

        </table>

</body>

</html>
<?php include '../footer.php' ?>