<?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari mahasiswa/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//check eror
// if (!$result) {
// 	echo mysqli_error($conn);
// }

//check
// var_dump($);

//ambil data (fetch) mahasiswa dari object resul
//mysqli_fetch_row // mengembalikan array numerik(0,1...)
//mysqli_fetch_assoc() // mengemmbalikan array associative("nama",dkk)
//mysqli_fetch_array() // mengembalikan array double (assoc+num)
//mysqli_fetch_object() // mengembalikan array object ($->nama)

// while ($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs["nama"]);
// }


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Edit</a> |
				<a href="">Delete</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="50" height="50"></td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
		</tr>
		<?php $i++ ?>
            <?php endwhile;  ?>

	</table>

</body>
</html>