<?php
require '../php/functions.php';

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

$select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE id_user = $id_user") or die('query failed');
$row_count = mysqli_num_rows($select_rows);

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Check Pesanan</title>
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

        <header>
    <div class="px-3 py-2 bg-info text-dark fs-4">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none"> Keira Soap Factory
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="user.php#daftarsabun" class="nav-link text-dark">
                Beranda
              </a>
            </li>
            <li>
              <a href="cart.php" class="nav-link text-dark">
                Keranjang <span>(<?php echo $row_count; ?>)</span>
              </a>
            </li>
            <li>
              <a href="check.php" class="nav-link text-white">
                Riwayat Pesanan
              </a>
            </li>
            <li>
              <a href="profile.php" class="nav-link text-dark">
                Ubah Profil
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
    
        <div class="container-xl mt-1 fs-4">
        
        <p>riwayat pesanan <b><?= $user['nama_user']; ?></b></p>
        <div class="row"> 
            <form action="" method="GET">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group mb-3">
                <select class="form-control" name="sort">
                  <option value="">--Sortir Berdasarkan Waktu--</option>
                  <option value="a-z" <?php if(isset($_GET['sort']) && $_GET['sort'] == "a-z"){echo "Pilih";} ?>>Terlama</option>
                  <option value="z-a" <?php if(isset($_GET['sort']) && $_GET['sort'] == "z-a"){echo "Pilih";} ?>>Terbaru</option>
                </select>
                <button type="submit" class="input-group-text btn btn-danger" id="tombol-sortir">Sortir</button>
              </div>
            </div> 
          </div>
        </form>
            <div id="tabel-order">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover table-secondary mt-4">
            
            <tr class="thead-dark text-center table table-dark table-striped">
                <th>ID Pesanan</th>
                <th>Waktu pemesanan</th>
                <th>Total Product</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <?php 
            $sort = "";
            if (isset($_GET["sort"])) {
              if ($_GET["sort"] == "a-z") {
                $sort = "ASC";
              } else if($_GET["sort"] == "z-a") {
                $sort = "DESC";
              }
            }
            $order = mysqli_query($conn, "SELECT * FROM `order` ORDER BY waktupesan $sort") or die('query failed');
             ?>

            <?php $i = 1; ?>
            <?php foreach ($order as $row) : ?>
            <tr class="thead-dark text-center">
                <td><?= $row["id"]; ?></td>
                <td><?= $row["waktupesan"]; ?></td>
                <td><?= $row["total_produk"]; ?></td>
                <td><?= $row["total_harga"]; ?></td>
                <td><?= $row["status"]; ?></td>
                <td>
                    <a href="checkpesanan.php?id=<?= $row["id"]?>&nama_user=<?= $row["nama_user"]?>&nomor_user=<?= $row["nomor_user"]?>&method=<?= $row["method"]?>&alamat_user=<?= $row["alamat_user"]?>&provinsi=<?= $row["provinsi"]?>&kota_user=<?= $row["kota_user"]?>&postcode_user=<?= $row["postcode_user"]?>&total_produk=<?= $row["total_produk"]?>&total_harga=<?= $row["total_harga"]?>&waktupesan=<?= $row["waktupesan"]?>  " class="btn btn-success">Cetak</a>

                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>


        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>