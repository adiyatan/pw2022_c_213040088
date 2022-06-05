<?php 

function koneksi() {
	$conn = mysqli_connect("localhost", "root", "", "pw2022_c_213040088") or die('Connections_failed');
	return $conn;
}

function query($query) {
	$conn = koneksi();
	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row;
 } 
 return $rows;
}

function tambah($data) {
	$conn = koneksi();

	//jika user tidak memilih gambar
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = 'adiya.jpeg';
	} else {
		//jalankan fungsi upload gambar
		$gambar = upload();
		//jika upload gagal
		if (!$gambar) {
			return false;
		}
	}

	//ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	
	// $gambar = htmlspecialchars($data["gambar"]);

	 //query insert data
	 $query = "INSERT INTO mahasiswa
				VALUES
				 ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);

}

function hapus($id) {
	$conn = koneksi();

	//query berdasarkan id
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

	if ($mhs["gambar"] !== 'adiya.jpg') {
	unlink("img/". $mhs["gambar"]);
	}

	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn)) ;
	return mysqli_affected_rows($conn);
 }

function ubah($data) {
	$conn = koneksi();
	//ambil data dari tiap elemen dalam form
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	 //query insert data
	 $query = "UPDATE mahasiswa SET
	 			nama = '$nama',
				npm = '$npm',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			  WHERE id = $id
			  ";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}

//modern
function upload(){
	$filename = $_FILES['gambar']['name'];
	$filenametmp = $_FILES['gambar']['tmp_name'];
	$filesize = $_FILES['gambar']['size'];
	$filetype = pathinfo($filename,
		PATHINFO_EXTENSION);
	$allowedtype = ["jpg","jpeg","png"];

	//cek apakah file yang di upload bukan gambar
	if (!in_array($filetype, $allowedtype)) {
		echo "
		<script>
            alert('yang anda upload bukan gambar!!');
          </script>";
          return false;
	}

	//cek apakah ukuran
	if ($filesize>1000000) {
		echo "
		<script>
            alert('ukuran gambar terlalu besar!!');
          </script>";
          return false;
	}

	//lolos pengecekan
	$new_filename=uniqid() . $filename;
	move_uploaded_file($filenametmp, 'img/' . $new_filename);

	return $new_filename;
}

 ?>
