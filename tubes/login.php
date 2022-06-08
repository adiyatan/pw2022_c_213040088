<?php
require 'php/functions.php';
 ?>
<html>
    <head>
        <title>Login Keira SoapFactory</title>
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
              <a class="nav-link" href="registrasi.php" style="color:black;">Registrasi</a>
            </li>
          </ul>
        </nav> 

<?php 

 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>   
        <div class="panel_login fs-2">
            <p class="tulisan_atas">Silahkan Masuk</p>

            <form action="php/checkrole.php" method="post">

            <div class="form-floating mb-5">
            <input type="text" class="form-control fs-3" id="floatingInput" placeholder="Username" name="username" style="height: 50px" required autocomplete="off">
            <label for="floatingInput">Username :</label>
            </div>

             <div class="form-floating mb-5">
            <input type="password" class="form-control fs-3" id="floatingInput" placeholder="Username" name="password" style="height: 50px" required autocomplete="off">
            <label for="floatingInput">Password :</label>
            </div>

            <input type="submit" class="tombol_login" name="login" value="LOGIN" style="color:black; background-color: #0DCAF0;">
            <br/>
            <br/>
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>