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
      
      

      <h1><b>Update Carousel</b></h1>
      <form role="form" method="post" action="prosesubahcarou.php">

        
        <label><b>Carousel 1</b></label>
        <input type="text" class="form-control" id="judul" placeholder="Judul" name = "judul">
        <br>
        <div class="form-group">
          <textarea class="form-control" rows="6" name ="isi" required></textarea>
          <br>
        </div>
        <button type="submit" class="btn btn-success" value = "Upload" name="save">Submit</button>
        
      </form>
      <br><br>
      <form role="form" method="post" action="prosesubahcarou2.php">
      <label><b>Carousel 2</b></label>
        <input type="text" class="form-control" id="judul" placeholder="Judul" name = "judul">
        <br>
        <div class="form-group">
          <textarea class="form-control" rows="6" name ="isi" required></textarea>
          <br>
        </div>
        <button type="submit" class="btn btn-success" value = "Upload" name="save">Submit</button>
        
      </form>
      <br><br>
      <form role="form" method="post" action="prosesubahcarou3.php">
       <label><b>Carousel 3</b></label>
        <input type="text" class="form-control" id="judul" placeholder="Judul" name = "judul">
        <br>
        <div class="form-group">
          <textarea class="form-control" rows="6" name ="isi" required></textarea>
          <br>
        </div>
        <button type="submit" class="btn btn-success" value = "Upload" name="save">Submit</button>
      </form>      
    </div>
  </div>
</div>

<footer>
  <p>&copy; Kelompok 9, Telkom University.</p> 
</footer>

</body>
</html>
