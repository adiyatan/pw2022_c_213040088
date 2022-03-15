<?php 

$mahasiswa = [
	["Adiya", "213040088", "Teknik Informatika", "adiya.213040088@mail.unpas.ac.id"],
	["Dea", "213040070", "Teknik Informatika", "dea.213040070@mail.unpas.ac.id"],
	["Keira", "213040666", "Teknik Informatika", "keira.213040666@mail.unpas.ac.id"],

];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 
 <h1>Data Mahasiswa</h1>

<!-- ini kalau datanya cuman 1 -->
 <!-- cara manual -->
    <ul>
        <li>Adiya</li>
        <li>213040088</li>
        <li>Teknik Informatika</li>
        <li>adiya.213040088@mail.unpas.ac.id</li>
    </ul>

<!-- cara php -->
    <ul>
        <?php foreach( $mahasiswa as $m ) : ?>
        	<li><?php echo $m; ?></li>
        <?php endforeach; ?>
    </ul>

<!-- cara php v.2 -->
            <ul>
                <li><?= $mahasiswa[0]; ?></li>
                <li><?= $mahasiswa[1]; ?></li> 
                <li><?= $mahasiswa[2]; ?></li> 
                <li><?= $mahasiswa[3]; ?></li>
            </ul>

<!-- kalau banyak seperti ini -->
	<?php foreach( $mahasiswa as $mhs) : ?>
		<ul>
                <li>Nama : <?= $mhs[0]; ?></li>
                <li>Nrp : <?= $mhs[1]; ?></li> 
                <li>Jurusan : <?= $mhs[2]; ?></li> 
                <li>Email : <?= $mhs[3]; ?></li>
            </ul>
	<?php endforeach; ?>


 </body>
 </html>