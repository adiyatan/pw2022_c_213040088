<?php

require 'php_manufactur/functions.php';

if (isset($_POST['register'])) {
    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!')
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
    </head>
    <body>
        

            <a href="index.php" class="btn btn-primary">Login</a>
        <div class="panel_login">
            <p class="tulisan_atas">Silahkan Daftar</p>

            <form action="" method="post">
            <label>Username</label>
            <input type="text" name="username" id="username" class="form_login" placeholder="Username" required="required">

            <label>email</label>
            <input type="email" name="email" id="email" class="form_login" placeholder="Email" required="required">

            <label>Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password" required="required">

            <label>konfirmasi password</label>
            <input type="password" name="password2" id="password2" class="form_login" placeholder="Password" required="required">

            <input type="submit" class="tombol_login" value="register" name="register">
            <br/>
            <br/>
            </form>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>