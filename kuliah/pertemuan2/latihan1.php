<?php
echo 'halo';

// ==============================
// variabel berupa int maupun string
//tempat menyimpan data
//aturan : nama bebas gabole ada spasi,angka di akhir

$nama = "adiya";
echo $nama;

//==============================
echo "<br>";

//==============================
//operator
// Aritmatika : kabatakur
echo 1 + 2;
echo "<br>";
echo 10 % 5;
echo "<br>";

//===============================
//perbandingan: <,>, <=, >=, ==, !=
echo 1 < 2;
echo "<br>";
echo 10 < 5;
echo "<br>";
echo 10 == "10"; // pake identitas

//===============================
//identitas : ===, !==
echo "<hr>";
echo 10 !== "10";

//===============================
//operator : increment dan decrement (penambahan dan pengurangan)
$x = 10;
echo ++$x; //ini akan dibaca +1
echo "<br>";
echo $x++; //ini tidak akan dibaca +1

//===============================
//concet
$nama_belakang = "Tanaya permana";
$nama_depan + "Adiya";
echo $nama_belakang . $nama_depan;

?>