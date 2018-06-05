<?php
include "koneksi.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYhis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path))
{
	$query = "INSERT INTO tb_berita VALUES('".$no."', '".$judul."', '".$isi."', '".$fotobaru."')";
    $sql = mysqli_query($koneksi, $query);

    if($sql)
    {?>
    <script> 
    alert('Berita Sudah Di Update!');
    document.location='indexadmin.php';
    </script>
    <?php
    }
    else
    {
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='admin.php'>Kembali Ke Form</a>";
  }
}
else{
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='admin.php'>Kembali Ke Form</a>";
}


?>