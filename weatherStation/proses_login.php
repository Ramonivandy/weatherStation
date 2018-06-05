<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sqlcek = mysqli_query($koneksi, "Select * from tb_admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($sqlcek);
if ($cek > 0)
{
	$sesi = mysqli_fetch_array($sqlcek);
	$_SESSION['id'] = $sesi['id'];
	$_SESSION['username'] = $sesi['username'];
	$_SESSION['level'] = $sesi['level'];
	$_SESSION['status'] = $sesi['status'];
	header("header:user.php");

	if($sesi['level'] == 'admin' ){
	?>

	<script>   
		alert('Login Admin Berhasil');
		document.location='admin.php';
	</script>

	<?php
	}
	else if($sesi['level'] == 'user' )
	{ ?>
		<script> 
		alert('Login Berhasil!');
		document.location='user.php';
		</script>
	<?php	
	}
	
}
	else
	{
		?>
		<script>
			alert('Login Gagal');
			document.location = 'loginform.php'

		</script>
	<?php } ?>


