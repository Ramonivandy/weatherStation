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

    .row.content {height: 1500px}
    

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

  include "koneksi.php";
  $id = $_GET['id'];

  $query = "SELECT * FROM tb_admin WHERE id='".$id."'";
  $sql = mysqli_query($koneksi, $query); 
  $data = mysqli_fetch_array($sql);

?>

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
      
      

      <h1><b>Ubah</b></h1>
      <form method="post" action="prosesubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
      <table cellpadding="8">
      <tr>
    <td>Username</td>
    <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input type="text" name="password" value="<?php echo $data['password']; ?>"></td>
    </tr>
    </table>
    <hr>
  <input type="submit" value="Ubah">
  <a href="admin2.php"><input type="button" value="Batal"></a>
      
      <br><br>

      
      
    </div>
  </div>
</div>



</body>
</html>
