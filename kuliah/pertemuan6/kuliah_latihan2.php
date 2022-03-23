<?php 


$mahasiswa = [
	["nama" => "Adiya Tanaya permana",
    "npm" => "213040088", 
    "email" => "adiyazam03@gmail.com", 
    "prodi" => "teknik informatika"], 

    ["nama" => "Dea abeliya casmita",
    "npm" => "213040070", 
    "email" => "dea.213040070@mail.unpas.ac.id", 
    "prodi" => "teknik informatika"], 

    ["nama" => "Adiya Tanaya permana",
    "npm" => "213040088", 
    "email" => "adiyazam03@gmail.com", 
    "prodi" => "teknik informatika"],  
];

// var_dump($mahasiswa)[0]["email"];

?>

<?php foreach($mahasiswa as $mhs) { ?>
 <ul>
 	<li>Nama : <?php echo $mhs["nama"]; ?></li>
 	<li>Npm : <?php echo $mhs["npm"] ?></li>
 	<li>Email : <?php echo $mhs["email"] ?></li>
 	<li>Prodi : <?php echo $mhs["prodi"] ?></li>
 </ul>
 <?php } ?>

 <hr>

 <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>: <?php echo $value; ?></li>
        <?php } ?>
    </ul>
    <?php } ?>