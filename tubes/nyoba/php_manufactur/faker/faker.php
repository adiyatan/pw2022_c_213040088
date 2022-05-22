<?php 

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('id_ID');
$conn = mysqli_connect("localhost","root","","test") or die('Connections_failed');

for ($i=0; $i < 1000; $i++) { 
	$nama =  $faker->name;
	$alamat =  $faker->streetAddress;
	$postcode =  $faker->postcode;
	$provinsi =  $faker->state;
	$kota =  $faker->city;
	$nomor =  $faker->phoneNumber;
	$email =  $faker->freeEmail;

	$conn->query("INSERT INTO data_sabun (nama_sabun, bahan_sabun, kegunaan_sabun, harga_Sabun, gambar_sabun) VALUES(
		'$faker->name', '$faker->streetAddress', '$faker->city', '$faker->postcode','$faker->state' )
");
    }


 ?>