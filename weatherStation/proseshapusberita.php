<?php

include "koneksi.php";

$no = $_GET['no'];

$query = "SELECT * FROM tb_berita WHERE no='".$no."'";
$sql = mysqli_query($koneksi, $query); 
$data = mysqli_fetch_array($sql); 

$query2 = "DELETE FROM tb_berita WHERE no='".$no."'";
$sql2 = mysqli_query($koneksi, $query2); 
if($sql2){ 
  header("location: admin.php"); 
}else{

  echo "Data gagal dihapus. <a href='admin2.php'>Kembali</a>";
}
?>