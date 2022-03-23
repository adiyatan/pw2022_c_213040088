<?php 

// array
// membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari","febuari","maret"];
$arr = [100,"tulisan",false];

// menampilkan array
// ver debugging
var_dump($hari);
echo "<br>";
print_r($bulan);

//menampilkan 1 elemen pada array
echo "<br>";
echo $arr[1];

echo "<hr>";
 ?>

<!--  =========== -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 30px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 0.5s;
		}
		.kotak:hover {
			transform: rotate(350deg);
			border-radius: 50%;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

	<!-- <?php 
	$angka = [1,2,3,4,5,6,7,8,9];
	 ?>

	<?php foreach($angka as $num) : ?>
		<div class="kotak"><?= $num ?></div>
	<?php endforeach ?> -->

<!-- =================== -->

	<?php 
	$angka = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	];
	 ?>

	<?php foreach($angka as $num) : ?>
		<?php foreach( $num as $var ) : ?>
		<div class="kotak"><?= $var ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach ?>


</body>
</html>