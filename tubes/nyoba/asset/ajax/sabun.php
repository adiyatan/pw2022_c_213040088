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
                <form action="" method="post">
                <td><?= $i; ?></td>
                <td><input type="hidden" name="product_gambar" value="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>"><img src="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>" class="rounded foto" width="auto" height="50px"></td>
                <td><input type="hidden" name="product_nama" value="<?= $row["nama_sabun"]; ?>"><?= $row["nama_sabun"]; ?></td>
                <td><input type="hidden" name="product_bahan" value="<?= $row["bahan_sabun"]; ?>"><?= $row["bahan_sabun"]; ?></td>
                <td><input type="hidden" name="product_kegunaan" value="<?= $row["kegunaan_sabun"]; ?>"><?= $row["kegunaan_sabun"]; ?></td>
                <td><input type="hidden" name="product_harga" value="<?= $row["harga_sabun"]; ?>"><?= $row["harga_sabun"]; ?></td>
                <td>

                    <a href="detail.php?id_sabun=<?= $row["id_sabun"]; ?> " class="btn btn-warning">detail</a>                   
                </td> 
                </form>   
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>