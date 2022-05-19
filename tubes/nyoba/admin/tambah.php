<?php 

require '../php_manufactur/functions.php';

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
</head>
<body>

	<h1>Tambah data sabun</h1>

	<form action="" method="post">
	
		<ul>
			<li>
				<label for="nama_sabun">Nama Sabun :</label><br>
				<input type="text" name="nama_sabun" id="nama_sabun" required>
			</li>
			<li>
				<label for="bahan_sabun">Bahan Sabun:</label><br>
				<textarea name="bahan_sabun" id="bahan_sabun" rows="5" cols="50" required></textarea>
			</li>
			<li>
				<label for="kegunaan_sabun">Kegunaan Sabun :</label><br>
				<textarea name="kegunaan_sabun" id="kegunaan_sabun" rows="4" cols="50" required></textarea>
			</li>
			<li>
				<label for="harga_sabun">Harga Sabun :</label><br>
				<input type="number" name="harga_sabun" id="harga_sabun" required>
			</li>
			<li>
				<label for="gambar_sabun">Gambar Sabun :</label><br>
				<input type="text" name="gambar_sabun" id="gambar_sabun" required>
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Tambahkan Data</button>
			</li>
		</ul>

	</form>

</body>
</html>