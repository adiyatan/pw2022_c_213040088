<?php 
// $_GET
$mahasiswa = [
	["nama" => "Adiya Tanaya permana",
        "npm" => "213040088", 
        "email" => "adiyazam03@gmail.com", 
        "prodi" => "teknik informatika",
        "gambar" => "pic-1.png"
        ], 
    
        ["nama" => "Dea abeliya casmita",
        "npm" => "213040070", 
        "email" => "dea.213040070@mail.unpas.ac.id", 
        "prodi" => "teknik informatika",
        "gambar" => "pic-2.png"
        ] 
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
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&prodi=<?= $mhs["prodi"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>