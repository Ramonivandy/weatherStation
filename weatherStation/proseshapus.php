<?php

include "koneksi.php";

$id = $_GET['id'];

$query = "SELECT * FROM tb_admin WHERE id='".$id."'";
$sql = mysqli_query($koneksi, $query); 
$data = mysqli_fetch_array($sql); 

$query2 = "DELETE FROM tb_admin WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2); 
if($sql2){ 
  header("location: admin2.php"); 
}else{

  echo "Data gagal dihapus. <a href='admin2.php'>Kembali</a>";
}
?>