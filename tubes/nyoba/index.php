<?php
require 'php_manufactur/functions.php';

 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }

 ?>
<html>
    <head>
        <title>Login Keira SoapFactory</title>
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        

            <a href="registrasi.php" class="btn btn-primary">Daftar</a>
        <div class="panel_login">
            <p class="tulisan_atas">Silahkan Masuk</p>

            <form action="php_manufactur/checkrole.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form_login" placeholder="Username" required="required" autocomplete="off">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password" required="required">

            <input type="submit" class="tombol_login" name="login" value="LOGIN">
            <br/>
            <br/>
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>