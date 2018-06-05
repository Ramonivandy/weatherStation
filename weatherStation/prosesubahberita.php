<?php

include "koneksi.php";
$no = $_GET['no'];

$judul = $_POST['judul'];
$isi = $_POST['isi'];


    $query = "UPDATE tb_berita SET judul='".$judul."', isi='".$isi."' WHERE no='".$no."'";
    $sql = mysqli_query($koneksi, $query); 
    if($sql){ 
    header("location: admin.php"); 
    }

    else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='admin.php'>Kembali Ke Form</a>";
    }
  
?>