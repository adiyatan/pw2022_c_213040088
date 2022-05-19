<?php 

require '../php_manufactur/functions.php';

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
</head>
<body>

	<h1>Ubah data sabun</h1>

	<form action="" method="post">
		<input type="hidden" name="id_sabun" value="<?= $sabun['id_sabun'] ?>">
	
		<ul>
			<li>
				<label for="nama_sabun">Nama Sabun :</label><br>
				<input type="text" name="nama_sabun" id="nama_sabun" required value="<?= $sabun['nama_sabun'] ?>">
			</li>
			<li>
				<label for="bahan_sabun">Bahan Sabun:</label><br>
				<textarea name="bahan_sabun" id="bahan_sabun" rows="5" cols="50" required value="<?= $sabun['bahan_sabun'] ?>"></textarea>
			</li>
			<li>
				<label for="kegunaan_sabun">Kegunaan Sabun :</label><br>
				<textarea name="kegunaan_sabun" id="kegunaan_sabun" rows="4" cols="50" required value="<?= $sabun['kegunaan_sabun'] ?>"></textarea>
			</li>
			<li>
				<label for="harga_sabun">Harga Sabun :</label><br>
				<input type="number" name="harga_sabun" id="harga_sabun" required value="<?= $sabun['harga_sabun'] ?>">
			</li>
			<li>
				<label for="gambar_sabun">Gambar Sabun :</label><br>
				<input type="text" name="gambar_sabun" id="gambar_sabun" required value="<?= $sabun['gambar_sabun'] ?>">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>

	</form>

</body>
</html>