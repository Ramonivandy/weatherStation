<?php
    session_start();
    if (!isset($_SESSION['username']))
    { ?> 
          <!DOCTYPE html>
<html lang="en">
  <style>
   div {
    
    padding: 10px;
  }
   div.third {
    opacity: 0.6;
    filter: alpha(opacity=60); 
  }
  </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Monitoring Cuaca</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Monitoring Cuaca</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="loginform.php">Login</a>
                <a class="nav-link" href="daftar.php">Sign Up</a>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Mini Weather Station</h1>
            <h4 class="cover-heading">Measure . Monitor . Manage</h4>
            <br>
            <p>Mini Weather Station ini akan membantu anda untuk mengetahui bagaimana cuaca di tempat yang ingin ada kunjungi, sehingga anda bisa mempersiapkannya sebelum berpergian </p>
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p class="cover-heading"> &copy; Kelompok 9, Telkom University. </p>
            </div>
          </div>

        </div>

      </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
  
    <?php } 
    else
    { ?>
        <!DOCTYPE html>
<html lang="en">
  <style>
   div {
    
    padding: 10px;
  }
   div.third {
    opacity: 0.6;
    filter: alpha(opacity=60); 
  }
  </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Monitoring Cuaca</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Monitoring Cuaca</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="index.html">Home</a>
                <a class="nav-link" href="proseslogout.php">Logout</a>

              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Mini Weather Station</h1>
            <h4 class="cover-heading">Measure . Monitor . Manage</h4>
            <br>
            <p>Mini Weather Station ini akan membantu anda untuk mengetahui bagaimana cuaca di tempat yang ingin ada kunjungi, sehingga anda bisa mempersiapkannya sebelum berpergian </p>
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p class="cover-heading"> &copy; Kelompok 9, Telkom University. </p>
            </div>
          </div>

        </div>

      </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

    <?php } ?>
