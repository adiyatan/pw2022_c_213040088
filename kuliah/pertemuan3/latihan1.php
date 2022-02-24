<?php 
// pengulangan: for, while,do..while,foreach(pengulangan khusus arary)

//for
for($i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}
echo "<hr>";

//while
$i = 0;
while( $i < 5 ) {
    echo "Hello Dunia!! <br>";
    $i++; //kalo di hapus looping selamanya
}
echo "<hr>";

//do while
$i = 0;
do {
    echo "Hai dunia <br>";
    $i++;
} while( $i < 5 );

 ?>