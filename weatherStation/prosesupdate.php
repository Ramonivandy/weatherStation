<?php

include 'koneksi.php';	

if (isset($_POST['update'])){
	$judul=$_POST[judul];
	$isi=$_POST[isi];
	$fileName = $_FILES['gambar']['name'];

	$update = mysqli_query ($koneksi,"UPDATE tb_berita SET no='$no', judul='$judul' , isi='$isi' WHERE no='$no'"); 


}