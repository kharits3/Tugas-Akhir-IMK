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
                        <a href=""><i class="fa fa-edit "></i>EDIT<span class="fa arrow"></span></a>
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
        <form  onSubmit="return validasi()" action="useredit_proses.php" method="post">
      <table width="0" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
<br>
<br>
      <td> EDIT USER </td>
          <tr>
            <td> Nama Lengkap </td>
            <td></td>
            <td>
                <input type="text" id="nama" name="nama" class="form-control" class="required">
            </td>
        </tr>
        <tr>
            <td> Tempat lahir </td>
            <td></td>
            <td>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td> Tanggal lahir </td>
            <td></td>
            <td>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td> Kelas </td>
            <td></td>
            <td>
                <input type="text" id="kelas" name="kelas" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td> jurusan </td>
            <td></td>
            <td>
                <input type="text" id="jurusan" name="jurusan" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td> Fakultas </td>
            <td></td>
            <td>
                <input type="text" id="fakultas" name="fakultas" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td></td>
            <td>
                <input type="text" id="alamat" name="alamat" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td> No HP </td>
            <td></td>
            <td>
                <input type="text" id="nomor_hp" name="nomor_hp" class="form-control" class="required" >
            </td>
    <tr>
    </tr>
		  <td>&nbsp;</td>
		  <td></td>
		  <td><input type="submit" name="update" class="btn btn-primary" value="update"></td>
</table>

   </form>
              
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
