<?php 
//array Numerik
//array yang index-nya berpasangan dengan angka

$mahasiswa = [
	["Adiya Tanaya permana", "213040088", "adiyazam03@gmail.com", "teknik informatika"], 
	["Dea abeliya casmita", "213040070", "dea.213040070@mail.unpas.ac.id", "teknik informatika"],
];

var_dump($mahasiswa)[1][2];

 ?>
<?php foreach($mahasiswa as $mhs) { ?>
 <ul>
 	<li>Nama : <?php echo $mhs[0]; ?></li>
 	<li>Npm : <?php echo $mhs[1] ?></li>
 	<li>Email : <?php echo $mhs[2] ?></li>
 	<li>Prodi : <?php echo $mhs[3] ?></li>
 </ul>
 <?php } ?>


