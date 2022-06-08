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

    <div class="container-xl">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-muted"><?= $_GET['product_nama'] ?> <br> Harga : Rp.<?= $_GET['product_harga'] ?></h1>
      <hr class="my-4">
          <img src="../asset/uploaded-img/<?= $_GET['gambar'] ?>" class="img-fluid rounded-start" alt="<?php $_GET['product_nama'] ?>">
      <p class="fs-5 text-muted">Kegunaan : membuat <?= $_GET['product_kegunaan'] ?></p>
      <p class="fs-5 text-muted">Bahan : <?= $_GET['product_bahan'] ?></p>
      <a href="user.php" class="btn btn-danger">Kembali</a>
    </div>
    
    <table border="1" cellpadding="2" cellspacing="0" width="200px" class="table table-bordered table-hover table-secondary">
            
            <tr class="thead-dark text-center table table-dark table-striped">
                <th>Premium</th>
                <th>Beransi</th>
                <th>Anti Bahan Berbahaya</th>
                <th>Halal</th>
            </tr>
            <tr class="thead-dark text-center">
                <td>&#10004;</td>
                <td>  &#10004;</td>
                <td>  &#10004;</td>
                <td>  &#10004;</td>                 
                  
            </tr>

        </table>
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