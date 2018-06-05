
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Monitoring Cuaca</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">

    <link href="index.css" rel="stylesheet">
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
    
    <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
    <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/highstock.js"></script>
    <script type="text/javascript" src="js/exporting.js"></script>
<script>
  var config = {
    apiKey: "AIzaSyC8CGrogNBFhahZYsp81jEbDBqfkuYbh3A",
    authDomain: "fir-tubes.firebaseapp.com",
    databaseURL: "https://fir-tubes.firebaseio.com",
    projectId: "fir-tubes",
    storageBucket: "fir-tubes.appspot.com",
    messagingSenderId: "932596889478"
  };
  firebase.initializeApp(config);
</script>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <a class="navbar-brand" href="">Monitoring Cuaca</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="indexadmin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#news">News</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <a class="nav-link" href="admin.php">Admin</a>
          <a class="nav-link" href="proseslogout.php">Logout</a>
          
        </form>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="bg4.png" alt="">
          <div class="container">
            <div class="carousel-caption text-left">
              <?php
              include "koneksi.php";
              $query = "SELECT * FROM tb_carousel ORDER BY no DESC LIMIT 1"; 
              $sql = mysqli_query($koneksi, $query);
              while($data = mysqli_fetch_array($sql))
              {
                echo "<h1>".$data['judul']."</h1>";
              }
              ?>
              <?php
              include "koneksi.php";
              $query = "SELECT * FROM tb_carousel ORDER BY no DESC LIMIT 1"; 
              $sql = mysqli_query($koneksi, $query);
              while($data = mysqli_fetch_array($sql))
              {
                echo "<p>".$data['isi']."<p>";
              }
              ?>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="bg.jpg" alt="">
          <div class="container">
            <div class="carousel-caption text-left">
              <?php
              include "koneksi.php";
              $query = "SELECT * FROM tb_carousel2 ORDER BY no DESC LIMIT 1"; 
              $sql = mysqli_query($koneksi, $query);
              while($data = mysqli_fetch_array($sql))
              {
                echo "<h1>".$data['judul']."</h1>";
              }
              ?>
              <?php
              include "koneksi.php";
              $query = "SELECT * FROM tb_carousel2 ORDER BY no DESC LIMIT 1"; 
              $sql = mysqli_query($koneksi, $query);
              while($data = mysqli_fetch_array($sql))
              {
                echo "<p>".$data['isi']."<p>";
              }
              ?>
              <br>
              <br>
              <br>              
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="bg1.jpg">
          <div class="container">
            <div class="carousel-caption text-left">
              <?php
              include "koneksi.php";
              $query = "SELECT * FROM tb_carousel3 ORDER BY no DESC LIMIT 1"; 
              $sql = mysqli_query($koneksi, $query);
              while($data = mysqli_fetch_array($sql))
              {
                echo "<h1>".$data['judul']."</h1>";
              }
              ?>
              <?php
              include "koneksi.php";
              $query = "SELECT * FROM tb_carousel3 ORDER BY no DESC LIMIT 1"; 
              $sql = mysqli_query($koneksi, $query);
              while($data = mysqli_fetch_array($sql))
              {
                echo "<p>".$data['isi']."<p>";
              }
              ?>
             <br>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>




    <div class="container marketing">

 
      <div class="row">
        <div class="col-lg-4">
         <img src="temperature.jpg">
          <h2><b>Temperature</b></h2>
           <div id="angka"> </div>
           <script type="text/javascript">
        const fbase = firebase.database().ref("DHT11/Suhu");
        fbase.on("value", snap => {
          document.getElementById("angka").innerHTML = snap.val()+'&deg;C';
        })
      </script>
      <p> </p>
          <p><a class="btn btn-secondary" href="grafiksuhu.html" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img src="humidity.jpg">
          <h2> <b>Humidity</b></h2>
         <div id="kelembaban"></div>
           <script type="text/javascript">
        const fbase2 = firebase.database().ref("DHT11/Kelembaban");
        fbase2.on("value", snap => {
          document.getElementById("kelembaban").innerHTML = snap.val()+'%';
        })
      </script>
      <p> </p>
          <p><a class="btn btn-secondary" href="grafikkelembaban.html" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img src="wind.jpg">
          <h2><b>Wind Speed</b></h2>
          <div id="wind"></div>
           <script type="text/javascript">
        const fbase3 = firebase.database().ref("DHT11/Angin");
        fbase3.on("value", snap => {
          document.getElementById("wind").innerHTML = snap.val()+' m/s';
        })
      </script>
      <p> </p>
          <p><a class="btn btn-secondary" href="grafikangin.html" role="button">View details &raquo;</a></p>
        </div>
      </div>
      <br id="news">
      <br>
      <hr>
      
      <?php
              include "koneksi.php";
              $query = "SELECT * FROM tb_berita ORDER BY no DESC"; 
              $sql = mysqli_query($koneksi, $query);
              while($data = mysqli_fetch_array($sql))
              {
                echo "<h1>".$data['judul']."</h1>";
                echo "<td><img src='images/".$data['foto']."' width='500' height='281'></td>";
                echo "<p>".$data['isi']."</p>";
              }
      ?>
      <hr>
      <footer>
        <p>&copy; Kelompok 9, Telkom University.</p> 
      </footer>

    </div>





    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
   
  </body>
</html>
