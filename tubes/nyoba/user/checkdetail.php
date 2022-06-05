<?php 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Sabun</title>
  </head>
  <style>
 	.foto {
 		width: auto;
 		height: 50px;
 	}
 </style>
  <body>
    <div class="container">
        <h1>Detail Order <?= $_GET['id'] ?></h1>

        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../asset/img/default-avatar.png" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Pesanan <?= $_GET['nama_user'] ?></h5>
                <p class="card-text"><?= $_GET['id'] ?></p>
                <p class="card-text"><?= $_GET['nama_user'] ?></p>
                <p class="card-text"><?= $_GET['nomor_user'] ?></p>
                <p class="card-text"><?= $_GET['method'] ?></p>
                <p class="card-text"><?= $_GET['alamat_user'] ?></p>
                <p class="card-text"><?= $_GET['provinsi'] ?></p>
                <p class="card-text"><?= $_GET['kota_user'] ?></p>
                <p class="card-text"><?= $_GET['postcode_user'] ?></p>
                <p class="card-text"><?= $_GET['total_produk'] ?></p>
                <p class="card-text"><?= $_GET['total_harga'] ?></p>
                <p class="card-text"><?= $_GET['waktupesan'] ?></p>
                <a href="cetak.php">Cetak</a>
                <a href="check.php">Kembali</a>
              </div>
            </div>
          </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>