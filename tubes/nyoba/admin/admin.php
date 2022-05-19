<?php
 session_start();

 require '../php_manufactur/functions.php';
 $listsabun = query("SELECT * FROM data_sabun");

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['role']==""){
  header("location:../index.php?pesan=gagal");
 }



 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman admin</title>
    </head>
    <body>
    
        <p>Halo <b><?php echo $_SESSION['nama'] ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
        
        <h1>List of health soaps</h1>
        <p>by Keira SoapFactory</p>

        <a href="tambah.php">Tambah data</a>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Sabun</th>
                <th>Bahan Sabun</th>
                <th>Kegunaan Sabun</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($listsabun as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="../asset/img/<?= $row["gambar_sabun"]; ?>" width="80"></td>
                <td><?= $row["nama_sabun"]; ?></td>
                <td><?= $row["bahan_sabun"]; ?></td>
                <td><?= $row["kegunaan_sabun"]; ?></td>
                <td><?= $row["harga_sabun"]; ?></td>
                <td>
                    <a href="ubah.php?id_sabun=<?= $row["id_sabun"]; ?>">Ubah</a>
                    <a href="hapus.php?id_sabun=<?= $row["id_sabun"]; ?>" onclick="return confirm('yakin?')">hapus</a>

                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>







        <a href="../php_manufactur/logout.php">LOGOUT</a>


    </body>
</html>