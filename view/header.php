<?php 
  define('BASE_URL', "localhost/manpro/tubes_manpro/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
		    <title>AKREDITASI PROGRAM STUDI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
          body{
              background-color: rgb(39, 37, 37);
          }
          .topnav {
            overflow: hidden;
            background-color: rgb(68, 64, 64);
          }
  
          .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 10px;
  
          }
  
          .topnav a:hover {
            background-color: #ddd;
            color: black;
          }
          .site-footer{
            height: 129px;
            background: rgb(53, 54, 54);
            margin-top: 15%;
  
          }
          .item{
            width:100%;
            height: 30%;
          }
        </style>
        <!-- Header -->
        <div class = "w3-container w3-flat-peter-river">	
          <div class="w3-container  w3-cell">
            <img src = "../images/Logo-UNPAR.png" style="width : 100px; margin: 10px">
          </div>
          <div class = "w3-container w3-flat-peter-river w3-cell">
            <hr>
            <h1>AKREDITASI PROGRAM STUDI</h1>
            <hr>
          </div>
          <div class="w3-container  w3-flat-peter-river w3-cell">
            <p style = "margin-top: 30px; text-align: left" >Program Studi Informatika</p>
            <p style = "margin: 0px; text-align: left ">Universitas Katolik Parahyangan</p>
          </div>
          <br>
        </div>
      </head>
      
      <body>
        <!-- Navigation bar -->
        <div class="top">
            <div class="w3-bar w3-card" style="background-color: rgb(68, 64, 64); color: white;">
                <a href="../Modul 1/2_VisiMisi.php" class="w3-bar-item w3-button w3-padding-large">VISI MISI</a>
                <a href="../Modul 1/3_kerjasama.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KERJASAMA</a>
                <div class="w3-dropdown-hover w3-hide-small">
                  <button class="w3-padding-large w3-button" title="More">MAHASISWA <i class="fa fa-caret-down"></i></button>
                  <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="#" class="w3-bar-item w3-button">KUALITAS INPUT MAHASISWA</a>
                      <a href="#" class="w3-bar-item w3-button">MAHASISWA ASING</a>
                  </div>
                </div>
                <div class="w3-dropdown-hover w3-hide-small">
                  <button class="w3-padding-large w3-button" title="More">SUMBER DAYA MANUSIA <i class="fa fa-caret-down"></i></button>
                  <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="../Modul 2/halamanProfileDosen.php" class="w3-bar-item w3-button">PROFIL DOSEN</a>
                      <a href="../Modul 2/halamanKinerjaDosen.php" class="w3-bar-item w3-button">KINERJA DOSEN</a>
                  </div>
                </div>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KEUANGAN, SARANA DAN PRASARANA</a>
                <div class="w3-dropdown-hover w3-hide-small">
                  <button class="w3-padding-large w3-button" title="More">PENDIDIKAN <i class="fa fa-caret-down"></i></button>
                  <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="#" class="w3-bar-item w3-button">KURIKULUM</a>
                      <a href="#" class="w3-bar-item w3-button">INTEGRASI KEGIATAN PENELITIAN/PKM DALAM PEMBELAJARAN</a>
                      <a href="#" class="w3-bar-item w3-button">KEPUASAN MAHASISWA</a>
                  </div>
                </div>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PENELITIAN</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PENGABDIAN KEPADA MASYARAKAT</a>
                <div class="w3-dropdown-hover w3-hide-small">
                  <button class="w3-padding-large w3-button" title="More">LUARAN DAN CAPAIAN TRIDHARMA <i class="fa fa-caret-down"></i></button>
                  <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="../Modul 4/4_(8.a)ipkLulusan.php" class="w3-bar-item w3-button">CAPAIAN PEMBELAJARAN</a>
                      <a href="../Modul 4/4_(8.b.1)prestasiAkademik.php" class="w3-bar-item w3-button">PRESTASI MAHASISWA</a>
                      <a href="../Modul 4/" class="w3-bar-item w3-button">EFEKTIVITAS DAN PRODUKTIVITAS PENDIDIKAN</a>
                      <a href="#" class="w3-bar-item w3-button">DAYA SAING LULUSAN</a>
                      <a href="../Modul 4/4_(8.e.1)tempatKerjaLulusan" class="w3-bar-item w3-button">KINERJA LULUSAN</a>
                      <a href="../Modul 4/4_(8.f.1)_tabel1_publikasiIlmiahMahasiswa.php" class="w3-bar-item w3-button">LUARAN PENELITIAN DAN PKM MAHASISWA</a>
                  </div>
                </div>
            </div>
        </div>
      <br><br>
