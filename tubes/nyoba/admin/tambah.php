<?php 

require '../php_manufactur/functions.php';

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
        		document.location.href = 'admin.php'
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
	<div class="container">
	<h1>Tambah data sabun</h1>
	<a href="admin.php" class="btn btn-primary">Kembali ke daftar Mahasiswa</a>

	<div class="row mt-3">
	<div class="col-8">		
	<form action="" method="post" enctype="multipart/form-data">
	
		<ul>
			<div class="mb-3">				
				<label for="nama_sabun" class="form-label">Nama Sabun :</label>
				<input type="text" name="nama_sabun" id="nama_sabun" class="form-control" required>
			</div>
			<div class="mb-3">
				<label for="bahan_sabun" class="form-label">Bahan Sabun:</label>
				<textarea name="bahan_sabun" id="bahan_sabun" class="form-control" rows="5" cols="50" required></textarea>
			</div>
			<div class="mb-3">
				<label for="kegunaan_sabun" class="form-label">Kegunaan Sabun :</label>
				<textarea name="kegunaan_sabun" id="kegunaan_sabun" class="form-control" rows="4" cols="50" required></textarea>
			</div>
			<div class="mb-3">
				<label for="harga_sabun" class="form-label">Harga Sabun :</label>
				<input type="number" name="harga_sabun" id="harga_sabun" class="form-control" required style="width: 250px;">
			</div>
			<div class="mb-3">
				<label for="gambar_sabun" class="form-label">Gambar Sabun :</label>
				<input type="file" name="gambar_sabun" id="gambar_sabun">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>