<?php 
//superglobals
//variable milik php yang bisa kita gunakan
//bentuknya array associative
//$_GET
//$_POST
//$_SERVER
// $_GET['nama'] = "adiya";
// $_GET['email'] = "adiyazam03@gmail.com";
// var_dump($_GET);
// var_dump($_POST);
if (isset($_GET['nama'])) {
    $nama = $_GET["nama"];
} else {
    $nama = "Anonymous";
}
 ?>

 <h1>Halo, <?= $nama; ?></h1>
 <ul>
 	<li>
 		<a href="kuliah_latihan1.php?nama=Lulu">Lulu</a>
 	</li>
 	<li>
 		<a href="?nama=Kevin">Kevin</a>
 	</li>
 	<li>
 		<a href="kuliah_latihan1.php?nama=Anas">Anas</a>
 	</li>
 </ul>