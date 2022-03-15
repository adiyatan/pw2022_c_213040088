<!-- resource = Offline -->

<?php 

// Pertemuan 5 - Array
// Array adalah variabel yang bisa menampung / menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";


$bulan = "januari";
$bulan2 = "febuari";

$mahasiswa1 = "Adiya";

// membuat ARRAY

$hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"]; //cara baru
$bulan = array("januari", "febuari", "maret", "april", "mei", "juni", "juli"); //cara lama
$myArr = [10, "Adiya", true];

// mencetak ARRAY
// mencetak 1 elemen di dalam array
echo $hari[0];
echo "<br>";
echo $bulan[2];

// mencetak dengan var_dump() atau print_r()
// khusus untuk debugging
var_dump ($hari);
print_r ($bulan);
echo "<hr>";

// mencetak semua isi array memggunakan looping
// for
echo $hari[0];
echo "<br>";
echo $hari[1];
echo "<br>";
echo $hari[2];
echo "<br>";
echo $hari[3];
echo "<br>";


//for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo"<br>";
}
echo "<hr>";

//foreach
foreach ($bulan as $b) {
	echo $b;
	echo "<br>";
}
echo "<hr>";

foreach ($bulan as $key => $value) {
	echo "Key: $key - Value: $value";
	echo "<br>";
}
echo "<hr>";

// memanipulasi ARRAY
// menambah elemen baru di akhir array
$hari[3] = "kamis";
$hari[0] = "Jum'at";
print_r($hari);

 ?>

 <!-- Resource = YT -->
 
 <?php 
//Array = var yang dapat memiliki banyak nilai
//element pada arry boleh memiliki tipe data yang berbeda
//pasangan antara key dan value dimana
//key = merupakan index yang dimulai dari 0


//cara lama
$hari = array("Senin","Selasa","Rabu");
//cara baru
$bulan = ["Januari", "Febuari", "Maret"];
$arr1 = [123, "Tulisan", false];

//menampilkan array menggunakan var_dump / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//menampilkan 1 element pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

//menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

 ?>