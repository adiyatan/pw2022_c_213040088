<?php

require 'php/functions.php';

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  //ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id ='$id'");
  $rows = mysqli_fetch_assoc($result);

  //cek cookie dan id
  if ($key === hash('sha256', $rows['username'])) {
    $_SESSION['login'] = true;
  }
}

if(isset($_SESSION['login'])){
  if ($_SESSION['user'] = true) {
    header("Location: user/user.php");
  }
}

if (isset($_SESSION['login'])) {
  if ($_SESSION['admin'] = true) {
    header("Location: admin/admin.php");
  }
}

if (isset($_POST['register'])) {
    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Berhasil mendaftar!');
                document.location.href = 'login.php'
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}

 ?>
<html>
    <head>
        <title>Registrasi Keira SoapFactory</title>
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/css/style3.css">
    </head>
    <body>

        <nav id="navbar-example2" class="navbar navbar-light bg-info px-3 fs-3">
          <a class="navbar-brand fs-2 text-center" href="#">Keira Soap Factory</a>
          <ul class="nav nav-pills fs-2 text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php#scrollspyHeading1" style="color:black;">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#scrollspyHeading2" style="color:black;">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" style="color:black;">Login</a>
            </li>
          </ul>
        </nav>      
        <div class="panel_login">
            <p class="tulisan_atas fs-2">Silahkan Daftar</p>

            <form action="" method="post">
        
            <div class="form-floating mb-5">
            <input type="text" class="form-control fs-3" id="floatingInput" placeholder="Nama Lengkap" name="nama_user" style="height: 50px" required autocomplete="off">
            <label for="floatingInput">Nama Lengkap :</label>
            </div>

            <div class="form-floating mb-5">
            <input type="text" class="form-control fs-3" id="floatingInput" placeholder="Username" name="username" style="height: 50px" required autocomplete="off">
            <label for="floatingInput">Username :</label>
            </div>

            <div class="form-floating mb-5">
            <input type="email" class="form-control fs-3" id="floatingInput" placeholder="test@example.com" name="email" style="height: 50px" required autocomplete="off">
            <label for="floatingInput">Email :</label>
            </div>

            <div class="form-floating mb-5">
            <input type="password" class="form-control fs-3" id="floatingInput" placeholder="Password" name="password" style="height: 50px" required autocomplete="off">
            <label for="floatingInput">Password :</label>
            </div>


            <div class="form-floating mb-5">
            <input type="password" class="form-control fs-3" id="floatingInput" placeholder="Konfirmasi Password" name="password2" style="height: 50px" required autocomplete="off">
            <label for="floatingInput">Konfirmasi Password :</label>
            </div>

            <input type="submit" class="btn btn-info" value="register" name="register" style="color:black; background-color: #0DCAF0;">
            <br/>
            <br/>
            </form>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>