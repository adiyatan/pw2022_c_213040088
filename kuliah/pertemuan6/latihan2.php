<!-- <?php 
$mahasiswa =[
	["Adiya Tanaya permana", "213040088", "adiyazam03@gmail.com", "teknik informatika"],
	["bot", "213040666", "bot666@gmail.com", "teknik informatika"],
];
 ?> -->

<!--  	//array associative,sama seperti array numerik,kecuali
 		//key-nya adalah string yang kita buat sendiri -->

 <?php 

$mobil = [
		["merk" => "Porsche",
    "jenis" => "911", 
    "warna" => "kuning", 
    "ts" => "308 Km/h",
		"gambar" => "Porsche.jpeg"], 

    ["merk" => "Mercedes Benz",
    "jenis" => "AMG GTR", 
    "warna" => "HIJAU", 
    "ts" => "285 Km/h",
		"gambar" => "amg.jpeg"],
];
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Mahasiswa</title>
 </head>
 <style>
 	.foto {
 		width: auto;
 		height: 200px;
 	}
 </style>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 
	<?php foreach($mobil as $car) : ?>
	 <ul>
	 	<li>
	 		<img src="img/<?php echo $car["gambar"]; ?> " class="foto">
	 	</li>
	 	<li>Merk : <?php echo $car["merk"]; ?></li>
	 	<li>Jenis : <?php echo $car["jenis"] ?></li>
	 	<li>Warna : <?php echo $car["warna"] ?></li>
	 	<li>Top-Speed : <?php echo $car["ts"] ?></li>
	 </ul>
	 <?php endforeach ?>

 </body>
 </html>