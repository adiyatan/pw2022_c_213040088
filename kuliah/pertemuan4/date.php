<?php 
//===============
//date
//menampilkan hari
	echo date("l");

	echo "<br>";
//menampilkan tanggal
	echo date("d");

	echo "<br>";
//menampilkan bulan bisa M/m
	echo date("m");

	echo "<br>";
//contoh lengkap
	echo date("l, d-M-Y");

	echo "<br>";
//===============
//time
// UNIX Timestamp / EPOCH time = detik yang berlalu sejak 1 Jan 1970
	echo time();
	
    echo "<br>";    
//menampilkan hari yang akan datang    
    echo date("l", time()+60*60*24*100);
    echo "<br>";
    echo date("d-M-Y", time()+60*60*24*100);

    echo "<br>";
//menampilkan hari yang sudah berlalu    
    echo date("l", time()-60*60*24*100);
    echo "<br>";
    echo date("d-M-Y", time()-60*60*24*100);

    echo "<br>";
//===============
//mktime
// membuat sendiri detik = mktime(0,0,0,0,0,0) (jam,menit,detik,bulan,tanggal,tahun)
    echo mktime(0,0,0,1,13,2004); //detik
    echo "<br>";
    echo date("l", mktime(0,0,0,1,13,2004)); //nama hari

    echo "<br>";
//===============
//strtotime
    echo strtotime("13 jan 2004"); // angka
   	echo "<br>";
   	echo date("l", strtotime("13 jan 2004")); // hari

echo "<br>";
//===============
//string : strlen(),strcmp(),explode(),htmlspecialchars()
//===============
//utility : var_dump(),isset(),empty(),die(),sleep()


?>