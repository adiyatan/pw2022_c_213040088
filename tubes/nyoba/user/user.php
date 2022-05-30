<?php
session_start();

require '../php_manufactur/functions.php';
$listsabun = query("SELECT * FROM data_sabun");

$user_id = $_SESSION['id_user'];
 $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$user_id'") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $user = mysqli_fetch_assoc($select);
}
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['role']==""){
header("location:../index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="../asset/js/jquery-3.6.0.min.js"></script>
        <script src="../asset/js/script.js"></script>
        <style>
            .loader {
            width: 100px;
            position: absolute;
            top: 1px;
            left: 285px;
            z-index: -1;
            display: none;
        }
        </style>
    </head>
    <body>

        <div class="container mt-5">
        <p>Halo <b><?= $user['nama_user']; ?><br>
        </b> Selamat berbelanja </p>

        <h1>List of health soaps</h1>
        <p>by Keira SoapFactory</p>
        <a href="profille.php" class="btn btn-primary">ubah profile</a>

        <div class="row"> 
        <div class="col-md-3">
            <h4>Daftar Sabun</h4>
            <div class="col-md">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="masukkan kata kunci" autocomplete="off" autofocus id="keyword">
                            <div class="input-group-append">
                                <button type="submit" name="cari" class="btn btn-secondary p-3" id="tombol-cari">Cari</button>
                            </div>
                            <img src="../asset/img/loader.gif" class="loader">
                        </div>
                    </form>
                </div>
                </div>
                <div id="tabel-sabun">
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
                <td><img src="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>" width="80"></td>
                <td><?= $row["nama_sabun"]; ?></td>
                <td><?= $row["bahan_sabun"]; ?></td>
                <td><?= $row["kegunaan_sabun"]; ?></td>
                <td><?= $row["harga_sabun"]; ?></td>
                <td>
                    <a href="ubah.php?id_sabun=<?= $row["id_sabun"]; ?>" class="btn btn-success">Detail</a> <br>
                    <a href="hapus.php?id_sabun=<?= $row["id_sabun"]; ?> " class="btn btn-warning" onclick="return confirm('Barang dimasukan ke wishlist')">Beli</a>

                </td>            
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>
        </div>
        </div>

        <a href="../php_manufactur/logout.php" class="btn btn-danger">LOGOUT</a>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>