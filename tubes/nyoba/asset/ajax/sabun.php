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
                <td><input type="hidden" name="product_gambar"><img src="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>" class="rounded foto" width="auto" height="50px"></td>
                <td><input type="hidden" name="product_nama"><?= $row["nama_sabun"]; ?></td>
                <td><input type="hidden" name="product_bahan"><?= $row["bahan_sabun"]; ?></td>
                <td><input type="hidden" name="product_kegunaan"><?= $row["kegunaan_sabun"]; ?></td>
                <td><input type="hidden" name="product_harga"><?= $row["harga_sabun"]; ?></td>
                <td>

                    <input type="submit" class="btn" value="detail" name="add_to_cart">
                    <input type="submit" class="btn" value="add to cart" onclick="return confirm('Beli sekarang?')" name="add_to_cart">

                </td>            
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>