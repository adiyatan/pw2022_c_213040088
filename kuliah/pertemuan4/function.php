<?php 
function salam($waktu = "Datang", $nama = "Adiya") {
	return "Selamat $waktu, $nama!";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1><?= salam("Pagi"); ?></h1>
 </body>
 </html>