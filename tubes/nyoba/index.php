<?php
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
    </head>
    <body>

        <div class="panel_login">
            <p class="tulisan_atas">Silahkan Masuk</p>

            <form action="php_manufactur/checkrole.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" required="required">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password" required="required">

            <input type="submit" class="tombol_login" value="LOGIN">
            <br/>
            <br/>
            </form>
        </div>
    </body>
</html>