<?php

include "koneksi.php";
$id = $_GET['id'];

$username = $_POST['username'];
$password = $_POST['password'];


    $query = "UPDATE tb_admin SET username='".$username."', password='".$password."' WHERE id='".$id."'";
    $sql = mysqli_query($koneksi, $query); 
    if($sql){ 
    header("location: admin2.php"); 
    }

    else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='admin2.php'>Kembali Ke Form</a>";
    }
  
?>