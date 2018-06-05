<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$ulangpass = $_POST['ulangpass'];
$sqlcek = mysqli_query($koneksi, "Select * from tb_admin where username='$username'");
	if($sqlcek)
	{?>
		<script>
			alert('Daftar Berhasil!');
			document.location='loginform.php'
		</script>
		
	<?php }

	else
	{?>
		<script>
			alert('Daftar Gagal');
			document.location='daftar.php'
		</script>
	<?php }

	mysqli_query($koneksi, "insert into tb_admin values(null,'$username','$password','user','1')");
?>

