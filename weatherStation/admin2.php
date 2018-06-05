<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

    .row.content {height: 1000px}
    

    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    

    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    

    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
  <?php
    session_start();
    if ($_SESSION['username'] != 'admin')
    { ?>
    <script> 
    alert('Anda Tidak Punya Akses');
    document.location='user.php';
    </script>
    <?php } ?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h1>Admin</h1>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="admin.php">Berita</a></li>
        <li><a href="admin2.php">User Control</a></li>
        <li><a href="beritacarouse.php">Carousel</a></li>
        <li><a href="indexadmin.php">Back to Index</a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      
      <h1><b>User Control</b></h1>
      <table border="1" width="100%">
  <tr>

    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    
    <th colspan="2">Action</th>
  </tr>
    
    <?php
  include "koneksi.php";
  $query = "SELECT * FROM tb_admin"; 
  $sql = mysqli_query($koneksi, $query); 
  
  while($data = mysqli_fetch_array($sql)){ 
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['username']."</td>";
    echo "<td>".$data['password']."</td>";
    echo "<td><a href='formubah.php?id=".$data['id']."'> Ubah </a></td>";
    echo "<td><a href='proseshapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
    ?>
  </table>

      <br><br>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>&copy; Kelompok 9, Telkom University.</p> 
</footer>

</body>
</html>