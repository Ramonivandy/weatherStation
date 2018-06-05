
<!DOCTYPE html>
<html lang="en">
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: #FFFFFF;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}


.cancelbtn,.signupbtn {
    float: left;
    width: 100%;
}


.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    width: 100%;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
  <head>
     <link href="css/bootstrap.min.css" rel="stylesheet">
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico">

    <title>Login</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
   

    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>


    
  </head>
  <body>
     <script src="js/bootstrap.min.js"></script>
     <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <a class="navbar-brand" href="#">Monitoring Cuaca</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <a class="nav-link" href="daftar.php">Sign Up</a>
          <a class="nav-link" href="loginform.php">Login</a>
        </form>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>



    <h2 align="center">Login</h2>

    <form class="form-signup" method="post" action="proses_login.php">
      <div class="container">
        <label><b>Username</b></label>
          <input type="text" placeholder="Username" name="username" required>

        <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

      <div class="clearfix">
        <br>
          <button type="submit" class="signupbtn">Login</button>
      </div>
      </div>
    </form>
  </body>
</html>
