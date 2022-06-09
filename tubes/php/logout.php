<?php
// mengaktifkan session php
session_start();
$_SESSION = [];
session_unset();
// menghapus semua session
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '',time() - 3600);

// mengalihkan halaman ke halaman login
header("location:../login.php");
?>