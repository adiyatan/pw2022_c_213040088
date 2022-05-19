<?php
$conn = mysqli_connect("localhost","root","","test") or die('Connections_failed');


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	//ambil data dari tiap elemen dalam form
	$nama_sabun = htmlspecialchars($data["nama_sabun"]);
	$bahan_sabun = htmlspecialchars($data["bahan_sabun"]);
	$kegunaan_sabun = htmlspecialchars($data["kegunaan_sabun"]);
	$harga_sabun = htmlspecialchars($data["harga_sabun"]);
	$gambar_sabun = htmlspecialchars($data["gambar_sabun"]);

	 //query insert data
	 $query = "INSERT INTO data_sabun
				VALUES
				 ('', '$nama_sabun', '$bahan_sabun', '$kegunaan_sabun', '$harga_sabun', '$gambar_sabun')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM data_sabun WHERE id_sabun = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id_sabun = $data["id_sabun"];
	$nama_sabun = htmlspecialchars($data["nama_sabun"]);
	$bahan_sabun = htmlspecialchars($data["bahan_sabun"]);
	$kegunaan_sabun = htmlspecialchars($data["kegunaan_sabun"]);
	$harga_sabun = htmlspecialchars($data["harga_sabun"]);
	$gambar_sabun = htmlspecialchars($data["gambar_sabun"]);
	
	$query = "UPDATE data_sabun SET
				nama_sabun = '$nama_sabun',
				bahan_sabun = '$bahan_sabun',
				kegunaan_sabun = '$kegunaan_sabun',
				harga_sabun = '$harga_sabun',
				gambar_sabun = '$gambar_sabun'
			  WHERE id_sabun = $id_sabun
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

?>