<?php
include('database/koneksi.php');
if(isset($_POST['submit'])){
  $user = mysql_real_escape_string(htmlentities($_POST['username']));
  $pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));

  $sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
  $cek = (mysql_num_rows($sql));
  $data = mysql_fetch_array($sql);
  if($cek > 0){
    echo 'Username atau Password anda salah <br>';
  echo '<META HTTP-EQUIV="Refresh" Content="2; URL=index.php">';
  }
    if($data['level'] == "admin"){
      @$_SESSION['admin'] = $data ['username'];
      echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="administrator.php";</script>';
    }else if($data['level'] == "anggota"){
     @$_SESSION['anggota'] = $data ['username'];
      echo '<script language="javascript">alert("Anda berhasil Login user!"); document.location="user.php";</script>';
    }
  }
?>
