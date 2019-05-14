<?php 	include "akses.php";
		include "database/koneksi.php";
			// $sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
			//$data = mysql_fetch_array($sql);
			$aktif= $_SESSION['anggota'];
			$sql = mysql_query("SELECT * FROM mahasiswa WHERE username='$aktif' ") or die(mysql_error());
            $result=mysql_fetch_array($sql);

?>


<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp; UKM UNIVERSITAS SILIWANGI</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"> </a></li>
                        <li><a href="#">  </a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/*.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="user.php"><i class="fa fa-desktop "></i>home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>EDIT<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="useredit.php">PROFIL</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="daftarukm.php"><i class="fa fa-edit "></i>Daftar UKM </a>
                    </li>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>SELAMAT DATANG</h2>   
                    </div>
                </div>              
				<a  class="btn btn-default" > <?php echo 'USERNAME AKTIF : ', strtoupper($aktif)  ?> </h3> </a> 
				<br>
				<br>
                <a  class="btn btn-default" > <?php echo 'Nama Lengkap : ', ucwords($result['nama']);  ?> </h3> </a> 
				<br>
				<br>
                <a  class="btn btn-default" > <?php echo 'Tempat, Tanggal Lahir : ', ucwords($result['tempat_lahir']),', ', ucwords($result['tgl_lahir']);  ?> </h3> </a> 
				<br>
				<br>
                <a  class="btn btn-default" > <?php echo 'Kelas : ', ucwords($result['kelas']);  ?> </h3> </a> 
				<br>
				<br>
                <a  class="btn btn-default" > <?php echo 'Jurusan : ', ucwords($result['jurusan']);  ?> </h3> </a> 
				<br>
				<br>
				<a  class="btn btn-default" > <?php echo 'Fakultas : ', ucwords($result['fakultas']); ?> </h3> </a> 
				<br>
				<br>
				<a  class="btn btn-default" > <?php echo 'Alamat : ', ucwords($result['alamat']); ?> </h3> </a> 
				<br>
				<br>
                <a  class="btn btn-default" > <?php echo 'Nomor HP : ', ucwords($result['nomor_hp']); ?> </h3> </a> 
				<br>
				<br>
                <a  class="btn btn-default" > <?php echo 'UKM yang diikuti : ' ?> </h3> </a>
                <br>
				<br>
                <?php 
                $i=1;
                $sql1 = mysql_query("SELECT * FROM ukm WHERE username='$aktif' ") or die(mysql_error());
                while($result1=mysql_fetch_array($sql1)){
                ?>
				<tr>
                <a  class="btn btn-default" > <?php echo $i ?> </h3> </a> 
                <a  class="btn btn-default" > <?php echo ucwords($result1['ukm']); ?> </h3> </a> 
                    <br>
                    <br>
                    </tr>
                  <?php
            $i++;
            }
        ?>
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
