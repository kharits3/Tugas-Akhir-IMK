<?php

if(isset($_POST['update'])){

    //untuk memasukan file koneksi ke database
	include("database/koneksi.php");
    $aktif= $_SESSION['anggota'];
    $nama            = $_POST['nama'];
    $tempat_lahir    = $_POST['tempat_lahir'];
    $tgl_lahir       = $_POST['tgl_lahir'];
    $kelas           = $_POST['kelas'];
    $jurusan         = $_POST['jurusan'];
    $fakultas        = $_POST['fakultas'];
    $alamat          = $_POST['alamat'];
    $nomor_hp        = $_POST['nomor_hp'];

    

    $query = mysql_query("UPDATE mahasiswa SET  nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', kelas='$kelas', jurusan='$jurusan ', fakultas='$fakultas', alamat='$alamat ', nomor_hp ='$nomor_hp'  WHERE username ='$aktif'") or die(mysql_error());
    if($query){

    	echo "ANDA TELAH MASUK KE UKM<br>";
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=user.php">';

    }else{

    	echo "Maaf anda Gagal untuk menambahkan Data";
    }
}

?>
