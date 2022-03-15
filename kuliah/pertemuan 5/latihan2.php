 <!-- Resource = Offline -->

<?php 

//array multidimensi
//array di dalam array

$mahasiswa = [
	["Adiya Tanaya permana", "213040088", "adiyazam03@gmail.com", "teknik informatika"], 
	["Dea abeliya casmita",[1,[2],3], "213040070", "dea.213040070@mail.unpas.ac.id", "teknik informatika"]
];
echo $mahasiswa[0][1];

echo $mahasiswa[1][1][1][0];

 ?>

 <!-- Resource = YT -->
 
 <?php 
//pengulangan pada Array
//for / foreach
$angka = [1,13124,1235,1,531,5135,1,12,2];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan 2</title>
 	<style >
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 		.clear { clear: both; }
 	</style>
 </head>
 <body>

<!-- cara ke 1 -->
	<?php for( $i = 0; $i < count($angka); $i++){ ?> 
		<div class="kotak"> <?php echo $angka[$i]; ?></div>
	<?php } ?>
	 
	<div class="clear"></div>

<!-- cara ke 2 -->
	<?php foreach( $angka as $a) { ?>
		<div class="kotak"><?php echo $a; ?></div>
	<?php } ?>

	<div class="clear"></div>

<!-- cara ke 3 -->
	<?php foreach( $angka as $a ) : ?>
		<div class="kotak"><?= $a; ?></div>
	<?php endforeach; ?>

 </body>
 </html>