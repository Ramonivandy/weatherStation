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
    document.location='index.php';
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
      
      
      <h1><b>Membuat Berita Baru</b></h1>
      <form method="post" action="update_berita.php" enctype="multipart/form-data">
        
        <label><b>Judul</b></label>
        <input type="judul" class="form-control" name="judul" placeholder="Judul">
        <br>
        <div class="form-group">
          <label> Isi Berita </label>
          <textarea class="form-control" rows="6" name ="isi" required> </textarea>
          <br>
          <label>Input Gambar</label>
        <input type="file" class="form-control-file" name="foto">
        </div>
        <button type="submit" class="btn btn-success" value="simpan">Submit</button>
        <br><br>
        <hr>
        <h1><b>Recent Berita</b></h1>
           <table border="1" width="100%">
        <tr>

        <th>Id</th>
        <th>Judul</th>
    
        <th colspan="2">Action</th>
        </tr>
    
         <?php
        include "koneksi.php";
        $query = "SELECT * FROM tb_berita"; 
         $sql = mysqli_query($koneksi, $query); 
  
        while($data = mysqli_fetch_array($sql)){ 
        echo "<tr>";
        echo "<td>".$data['no']."</td>";
        echo "<td>".$data['judul']."</td>";
        echo "<td><a href='ubahberita.php?no=".$data['no']."'> Ubah </a></td>";
        echo "<td><a href='proseshapusberita.php?no=".$data['no']."'>Hapus</a></td>";
        echo "</tr>";
        }
          ?>
         </table>
      </form>
      <br><br>
    </div>
  </div>
</div>

   


<footer>
  <p>&copy; Kelompok 9, Telkom University.</p> 
</footer>
</body>
</html>
