<?php 
session_start();
include 'koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$sqlcek = mysqli_query($koneksi, "Select * from tb_carousel2 where judul='$judul'");
	if($sqlcek)
	{?>
		<script>
			alert('Post Berita Berhasil!');
			document.location='beritacarouse.php'
		</script>
		
	<?php }
	else
	{
		echo "COBA LAGI";
	}

	mysqli_query($koneksi, "insert into tb_carousel2 values(null,'$judul','$isi')");
?>

