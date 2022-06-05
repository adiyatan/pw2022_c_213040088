<?php
require '../php_manufactur/functions.php';

session_start();
$id_user = $_SESSION['id_user'];

$order = mysqli_query($conn, "SELECT * FROM `order` WHERE id_user = '$id_user'") or die('query failed');
      if(mysqli_num_rows($order) > 0){
         $fetch = mysqli_fetch_assoc($order);
      }

$id_user = $_SESSION['id_user'];
 $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id_user'") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $user = mysqli_fetch_assoc($select);
}



 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman order</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="../asset/js/jquery-3.6.0.min.js"></script>
        <script src="../asset/js/script2.js"></script>
    </head>
    <style>
    .foto {
        width: auto;
        height: 50px;
    }
    .loader {
        width: 100px;
        position: absolute;
        top: 1px;
        left: 285px;
        z-index: -1;
        display: none;
    }

 </style>
    <body>
    
        <div class="container mt-4">
        
        <p>riwayat pesanan <b><?= $user['nama_user']; ?></b></p>
        <br><br>

            <div class="row"> 
        <div class="col-md-3">
            <a href="user.php" class="btn btn-primary">kembali</a>
            <h4>Daftar Order</h4>
                </div>
                <div id="tabel-order">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover table-secondary mt-4">
            
            <tr class="thead-dark text-center">
                <th>ID Pesanan</th>
                <th>Total Product</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($order as $row) : ?>
            <tr class="thead-dark text-center">
                <td><?= $row["id"]; ?></td>
                <td><?= $row["total_produk"]; ?></td>
                <td><?= $row["total_harga"]; ?></td>
                <td>
                    <a href="checkdetail.php?id=<?= $row["id"]?>&nama_user=<?= $row["nama_user"]?>&nomor_user=<?= $row["nomor_user"]?>&method=<?= $row["method"]?>&alamat_user=<?= $row["alamat_user"]?>&provinsi=<?= $row["provinsi"]?>&kota_user=<?= $row["kota_user"]?>&postcode_user=<?= $row["postcode_user"]?>&total_produk=<?= $row["total_produk"]?>&total_harga=<?= $row["total_harga"]?>&waktupesan=<?= $row["waktupesan"]?>  ">Cetak</a>

                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>

        

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>