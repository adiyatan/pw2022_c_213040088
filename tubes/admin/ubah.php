<?php 

require '../php/functions.php';

session_start();
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['role']==""){
  header("location:../index.php");
 }

$id_sabun = $_GET['id_sabun'];

$sabun = query("SELECT * FROM data_sabun WHERE id_sabun = $id_sabun")[0];

if (isset($_POST['submit'])) {	
    //cek apakah data berhasil di ubah atau tidak
    if ( ubah($_POST) > 0) {
        echo "
        	<script>
        		alert('data berhasil diubah!!');
        		document.location.href = 'produk.php'
        	</script>
        ";
    } else {
        echo "
        	<script>
        		alert('data gagal diubah!!');
        		document.location.href = 'produk.php'
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
	<title>Ubah Data Sabun</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<div class="container">
	<h1>Ubah data sabun</h1>
	<a href="produk.php" class="btn btn-primary">Kembali ke beranda</a>

	<div class="row mt-3">
	<div class="col-8">	

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_sabun" value="<?= $sabun['id_sabun'] ?>">
		<input type="hidden" name="gambar_sabun" value="<?= $sabun["gambar_sabun"]; ?>">
		<ul>
			<div class="form-floating mb-3">				
				<input type="text" class="form-control" id="floatingInput" name="nama_sabun" required placeholder="Nama Sabun" value="<?= $sabun['nama_sabun'] ?>">
  				<label for="floatingInput">Nama Sabun :</label>
			</div>
			<div class="mb-3">
				<label for="bahan_sabun" class="form-label">Bahan Sabun:</label><br>
				<textarea name="bahan_sabun" id="bahan_sabun" rows="5" cols="50" required class="form-control" ><?= $sabun['bahan_sabun'] ?></textarea>
			</div>
			<div class="mb-3">
				<label for="kegunaan_sabun" class="form-label">Kegunaan Sabun :</label><br>
				<textarea name="kegunaan_sabun" id="kegunaan_sabun" rows="4" cols="50" required class="form-control"  ><?= $sabun['kegunaan_sabun'] ?></textarea>
			</div>
			<div class="form-floating mb-3">				
				<input type="number" class="form-control" id="floatingInput" name="harga_sabun" required placeholder="Harga Sabun" style="width: 250px;" value="<?= $sabun['harga_sabun'] ?>" class="form-control">
  				<label for="floatingInput">Harga Sabun :</label>
			</div>
			<div class="mb-3">
				<label for="gambar_sabun" class="form-label">Gambar Sabun :</label><br>
				<img src="" class="img-thumbnail" id="img-preview" width="120" style="display :none;"> <br>
				<input type="file" name="gambar_sabun" id="gambar_sabun" value="<?= $sabun['gambar_sabun'] ?>" class="form-control" onchange="previewimg()">
			</div>
			<br>
			<div class="mb-3">
				<button type="submit" name="submit" class="btn btn-sn btn-danger" onclick="return confirm('Ubah data?');">Ubah Data</button>
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