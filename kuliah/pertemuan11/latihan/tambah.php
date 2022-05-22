<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {  
    //cek apakah data berhasil di tambahkan atau tidak
    if ( tambah($_POST) > 0) {
        echo "
          <script>
            alert('data berhasil ditambahkan!!');
            document.location.href = 'kuliah_latihan1.php'
          </script>
        ";
    } else {
        echo "
          <script>
            alert('data gagal ditambahkan!!');
            document.location.href = 'kuliah_latihan1.php'
          </script>
        ";
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah data Mahasiswa</title>
  </head>
  <style>
 	.foto {
 		width: auto;
 		height: 50px;
 	}
 </style>
  <body>
    <div class="container">
        <h1>Form data Mahasiswa</h1>

        <a href="kuliah_latihan1.php" class="btn btn-primary">Kembali ke daftar Mahasiswa</a>

        <div class="row mt-3">
          
          <div class="col-8">
            <form action="" method="post">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
              </div>
            <div class="mb-3">
                <label for="npm" class="form-label">Npm :</label>
                <input type="number" name="npm" class="form-control" id="npm" required style="width: 250px;">
              </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" class="form-control" id="email" required>
              </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan :</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan" required>
              </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar :</label>
                <input type="text" name="gambar" class="form-control" id="gambar" required>
              </div>
              <button type="submit" class="btn btn-sn btn-danger" name="tambah">Tambahkan data</button>
            </form>
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