<?php

if (!isset($_SESSION)) {
    session_start();
}

$host = "localhost";
$user = "root";       
$pass = "";             
$name = "database"; 
 
$koneksi = mysql_connect($host, $user, $pass) or die("Gagal untuk mengkoneksi database");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih");
?>