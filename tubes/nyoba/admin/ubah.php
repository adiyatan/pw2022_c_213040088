<?php 

require '../php_manufactur/functions.php';
// cek apakah yang mengakses halaman ini sudah login


$id_sabun = $_GET['id_sabun'];

$sabun = query("SELECT * FROM data_sabun WHERE id_sabun = $id_sabun")[0];

if (isset($_POST['submit'])) {	
    //cek apakah data berhasil di ubah atau tidak
    if ( ubah($_POST) > 0) {
        echo "
        	<script>
        		alert('data berhasil diubah!!');
        		document.location.href = 'admin.php'
        	</script>
        ";
    } else {
        echo "
        	<script>
        		alert('data gagal diubah!!');
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
	<title>Ubah Data Sabun</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<div class="container">
	<h1>Ubah data sabun</h1>
	<a href="admin.php" class="btn btn-primary">Kembali ke daftar Mahasiswa</a>

	<div class="row mt-3">
	<div class="col-8">	

	<form action="" method="post">
		<input type="hidden" name="id_sabun" value="<?= $sabun['id_sabun'] ?>">
	
		<ul>
			<div class="mb-3">
				<label for="nama_sabun" class="form-label">Nama Sabun :</label><br>
				<input type="text" name="nama_sabun" id="nama_sabun" required value="<?= $sabun['nama_sabun'] ?>" class="form-control" >
			</div>
			<div class="mb-3">
				<label for="bahan_sabun" class="form-label">Bahan Sabun:</label><br>
				<textarea name="bahan_sabun" id="bahan_sabun" rows="5" cols="50" required placeholder="<?= $sabun['bahan_sabun'] ?>" class="form-control" ></textarea>
			</div>
			<div class="mb-3">
				<label for="kegunaan_sabun" class="form-label">Kegunaan Sabun :</label><br>
				<textarea name="kegunaan_sabun" id="kegunaan_sabun" rows="4" cols="50" required placeholder="<?= $sabun['kegunaan_sabun'] ?>" class="form-control"  ></textarea>
			</div>
			<div class="mb-3">
				<label for="harga_sabun" class="form-label">Harga Sabun :</label><br>
				<input type="number" name="harga_sabun" id="harga_sabun" required value="<?= $sabun['harga_sabun'] ?>" class="form-control" style="width: 250px;" >
			</div>
			<div class="mb-3">
				<label for="gambar_sabun" class="form-label">Gambar Sabun :</label><br>
				<input type="text" name="gambar_sabun" id="gambar_sabun" required value="<?= $sabun['gambar_sabun'] ?>" class="form-control" >
			</div>
			<br>
			<div class="mb-3">
				<button type="submit" name="submit" class="btn btn-sn btn-danger">Ubah Data</button>
			</div>
		</ul>

	</form>
	</div>
	</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>