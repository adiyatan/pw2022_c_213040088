<?php 
usleep(500000);
require '../../php_manufactur/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM data_sabun
            WHERE
          nama_sabun LIKE '%$keyword%' OR
          bahan_sabun LIKE '%$keyword%' OR
          kegunaan_sabun LIKE '%$keyword%' OR
          harga_sabun LIKE '%$keyword%'
        ";
$listsabun = query($query);
?>
<table border="1" cellpadding="10" cellspacing="0" width="600px" class="table table-bordered table-hover table-secondary mt-4">
            
            <tr class="thead-dark text-center">
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Sabun</th>
                <th>Bahan Sabun</th>
                <th>Kegunaan Sabun</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($listsabun as $row) : ?>
            <tr class="thead-dark text-center">
                <td><?= $i; ?></td>
                <td><img src="../asset/img/<?= $row["gambar_sabun"]; ?>" width="80"></td>
                <td><?= $row["nama_sabun"]; ?></td>
                <td><?= $row["bahan_sabun"]; ?></td>
                <td><?= $row["kegunaan_sabun"]; ?></td>
                <td><?= $row["harga_sabun"]; ?></td>
                <td>
                    <a href="ubah.php?id_sabun=<?= $row["id_sabun"]; ?>" class="btn btn-success">Masukan ke keranjang</a> <br>
                    <a href="hapus.php?id_sabun=<?= $row["id_sabun"]; ?> " class="btn btn-warning" onclick="return confirm('Barang dimasukan ke wishlist')">Tambah kan ke wishlist</a>

                </td>            
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>