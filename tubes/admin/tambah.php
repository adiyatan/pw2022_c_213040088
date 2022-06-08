<?php 

require '../php/functions.php';

session_start();
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['role']==""){
  header("location:../index.php");
 } 

if (isset($_POST['submit'])) {	
    //cek apakah data berhasil di tambahkan atau tidak
    if ( tambah($_POST) > 0) {
        echo "
        	<script>
        		alert('data berhasil ditambahkan!!');
        		document.location.href = 'produk.php'
        	</script>
        ";
    } else {
        echo "
        	<script>
        		alert('data gagal ditambahkan!!');
        		document.location.href = 'admin.php'
        	</script>
        ";
    }



}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Sabun</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<header>
    <div class="px-3 py-2 bg-info text-dark fs-4">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none"> Keira Soap Factory
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="admin.php" class="nav-link text-dark">
                Beranda
              </a>
            </li>
            <li>
              <a href="tambah.php" class="nav-link text-white">
                Tambah Data
              </a>
            </li>
            <li>
              <a href="order.php" class="nav-link text-dark">
                Orderan
              </a>
            </li>
            <li>
              <a href="produk.php" class="nav-link text-dark">
                Produk
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

	<div class="container">
	<h1>Tambah data sabun</h1>

	<div class="row mt-3">
	<div class="col-8">		
	<form action="" method="post" enctype="multipart/form-data">
	
		<ul>
			<div class="form-floating mb-3">				
				<input type="text" class="form-control" id="floatingInput" name="nama_sabun" required placeholder="Nama Sabun">
  				<label for="floatingInput">Nama Sabun :</label>
			</div>
			<div class="mb-3">
				<label for="bahan_sabun" class="form-label">Bahan Sabun:</label>
				<textarea name="bahan_sabun" id="bahan_sabun" class="form-control" rows="5" cols="50" required></textarea>
			</div>
			<div class="mb-3">
				<label for="kegunaan_sabun" class="form-label">Kegunaan Sabun :</label>
				<textarea name="kegunaan_sabun" id="kegunaan_sabun" class="form-control" rows="4" cols="50" required></textarea>
			</div>
			<div class="form-floating mb-3">				
				<input type="number" class="form-control" id="floatingInput" name="harga_sabun" required placeholder="Harga Sabun" style="width: 250px;">
  				<label for="floatingInput">Harga Sabun :</label>
			</div>
			<div class="mb-3">
				<label for="gambar_sabun" class="form-label">Gambar Sabun :</label>
				<img src="" class="img-thumbnail" id="img-preview" width="120" style="display :none;"> <br>
				<input type="file" name="gambar_sabun" id="gambar_sabun" onchange="previewimg()">
			</div>
			<br>
			<div class="mb-3">
				<button type="submit" name="submit" class="btn btn-sn btn-danger" onclick="return confirm('Tambah kan data?');">Tambahkan Data</button>
			</div>
		</ul>

	</form>
	</div>
	</div>
</div>
</body>
<script src="../asset/js/script2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>