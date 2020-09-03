<html>

<head>
  <title>Login</title>
  <link rel="shortcut icon" href="gambar/blk-icon.png">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body class="background-login">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <!-- kosong -->
      </div>
      <div class="col-4 login-page text-dark">
        <img src="gambar/blk2.png" width="350" style="margin-left: 15px;" class="img-fluid">
        <!-- <H1>Selamat Datang</H1>
        <h2>Di Perpustakaan Online BLK -->
        <hr style="border: 2px solid black;">
        <h3>SILAHKAN MASUK</h3>
        </h2>
        <br>
        <center>
          <form method="POST" action="">
            <table class="text-dark">
              <tr>
                <div class="input-group">
                  <td>ID User</td>
                  <td rowspan="1"> : </td>
                  <span class="input-groud-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <td><input id="email" type="text" name="id" placeholder="ID" class="form-control" autocomplete="off" required=""></td>
                </div>
              </tr>
              <tr>
                <td>Password</td>
                <td> : </td>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <td><input id="password" type="password" class="form-control" name="password" placeholder="Password" required=""></td>
              </tr>
      </div>
      </table>
      <br>
      <input type="submit" name="login" value="Login" class="btn btn-block btn-info login-button">
      <input type="reset" name="reset" value="Reset" class="btn btn-block btn-danger">
      </tr>
      </table>
      </form>
      </center>
    </div>
    <div class="col-4">
      <!-- kosong -->
    </div>
  </div>
  </div>
</body>

</html>
<?php
if (isset($_POST['login'])) {
  if ($_POST["id"] == "admin" && $_POST["password"] == "admin") 
  {
    header("location: index.php");
  }
  elseif ($_POST["id"] == "anggota" && $_POST["password"] == "anggota") 
  {
    header("location: index_user.php");
  } 
  else 
  {
    echo '<script type="text/javascript">alert("Username atau Password Salah");</script>';
  }
}
?>