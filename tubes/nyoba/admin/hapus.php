<?php 
require '../php_manufactur/functions.php';
 
$id_sabun = $_GET['id_sabun'];

if( hapus($id_sabun) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
}

?>